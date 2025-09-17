<?php
header("Access-Control-Allow-Origin: *");

// Połączenie z bazą danych
$host = 'localhost';
$db   = 'monwiz';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';
session_start();

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
    // Sprawdź, czy użytkownik jest zalogowany
    if ($_SERVER['REQUEST_METHOD'] === 'SEARCH') {
        $player_id = $_SESSION['player_id'] ?? null;  // Pobierz id gracza z sesji

        if ($player_id === null) {
            echo json_encode(['status' => 'error', 'message' => 'Nie znaleziono gracza']);
            exit();
        }

        $stmt = $pdo->prepare("SELECT id FROM player WHERE id = :player_id");
        $stmt->bindParam(':player_id', $player_id, PDO::PARAM_INT);
        $stmt->execute();

        $data = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($data) {
            echo json_encode(['status' => 'success', 'id' => $data['id']]);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Nie znaleziono gracza']);
        }
    } 
    //
    elseif ($_SERVER['REQUEST_METHOD'] === 'LOAD_UNACTIVE_QUESTS') {
        $player_id = $_SESSION['player_id'] ?? null;  // Pobierz id gracza z sesji

        if ($player_id === null) {
            echo json_encode(['status' => 'error', 'message' => 'Nie znaleziono gracza']);
            exit();
        }

        $stmt = $pdo->prepare("
            SELECT q.*
            FROM quest q
            JOIN status s ON q.id = s.id_quest
            JOIN player p ON s.id_player = p.id
            WHERE s.id_player = :player_id AND s.status = 'unstarted' AND p.exp >= q.min_lvl
        ");
        $stmt->bindParam(':player_id', $player_id, PDO::PARAM_INT);
        $stmt->execute();

        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if ($data) {
            echo json_encode(['status' => 'success', 'quests' => $data]);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Nie znaleziono questów']);
        }
    } 
    //
    elseif ($_SERVER['REQUEST_METHOD'] === 'LOAD_INPROGRESS_QUESTS') {
        $player_id = $_SESSION['player_id'] ?? null;  // Pobierz id gracza z sesji

        if ($player_id === null) {
            echo json_encode(['status' => 'error', 'message' => 'Nie znaleziono gracza']);
            exit();
        }
        $stmt = $pdo->prepare("
            SELECT q.*, s.progress
            FROM quest q
            JOIN status s ON q.id = s.id_quest
            JOIN player p ON s.id_player = p.id
            WHERE s.id_player = :player_id AND s.status = 'inprogress'
        ");

        $stmt->bindParam(':player_id', $player_id, PDO::PARAM_INT);
        $stmt->execute();

        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if ($data) {

            echo json_encode(['status' => 'success', 'quests' => $data]);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Nie znaleziono questów w trakcie realizacji']);
        }
    } 
    elseif ($_SERVER['REQUEST_METHOD'] === 'LOAD_PROGRESS') {
        $player_id = $_SESSION['player_id'] ?? null;  // Pobierz id gracza z sesji
        $quest_id = $_POST['quest_id'] ?? null;
        if ($player_id === null) {
            echo json_encode(['status' => 'error', 'message' => 'Nie znaleziono gracza']);
            exit();
        }

        $stmt = $pdo->prepare("
            SELECT progress
            FROM status
            WHERE id_player = :player_id AND id_quest = :quest_id
        ");

        $stmt->bindParam(':player_id', $player_id, PDO::PARAM_INT);
        $stmt->bindParam(':quest_id', $quest_id, PDO::PARAM_INT);
        $stmt->execute();

        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if ($data) {
            echo json_encode(['status' => 'success', 'quests' => $data]);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Nie znaleziono questów w trakcie realizacji']);
        }
    
    } 
    // 
    elseif ($_SERVER['REQUEST_METHOD'] === 'CHECK_STATUS') {
        try {
            // Pobierz id gracza
            $player_id = $_SESSION['player_id'];

            // Pobierz wszystkie questy, które są aktywne
            $stmtQuests = $pdo->prepare("
                SELECT q.id
                FROM quest q
                LEFT JOIN status s ON q.id = s.id_quest AND s.id_player = :player_id
                WHERE s.id_quest IS NULL
            ");
            $stmtQuests->bindParam(':player_id', $player_id, PDO::PARAM_INT);
            $stmtQuests->execute();
            $quests = $stmtQuests->fetchAll(PDO::FETCH_COLUMN);

            // Sprawdzenie i tworzenie brakujących wpisów w tabeli status
            foreach ($quests as $quest_id) {
                $stmtInsert = $pdo->prepare("INSERT INTO status (id_quest, id_player, status) VALUES (:id_quest, :id_player, 'unstarted')");
                $stmtInsert->bindParam(':id_quest', $quest_id, PDO::PARAM_INT);
                $stmtInsert->bindParam(':id_player', $player_id, PDO::PARAM_INT);
                $stmtInsert->execute();
            }

            echo json_encode(['status' => 'success', 'message' => 'Sprawdzono i utworzono brakujące wpisy w tabeli status z statusem "unstarted".']);
        } catch (\PDOException $e) {
            echo json_encode(['status' => 'error', 'message' => $e->getMessage()]);
        }
    }


    // Jeśli zapytanie jest typu GET, pobierz dane z bazy
    elseif ($_SERVER['REQUEST_METHOD'] === 'GET') {
        // Pobierz id gracza z sesji
        $player_id = $_SESSION['player_id'];

        $stmt = $pdo->prepare("SELECT * FROM player WHERE id = :player_id");
        $stmt->bindParam(':player_id', $player_id, PDO::PARAM_INT);
        $stmt->execute();
        $data = $stmt->fetch();
        echo json_encode($data);
    }

    elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Pobierz id gracza z sesji
        $player_id = $_SESSION['player_id'];

        if ($_POST['action'] === 'CHANGE_STATUS') {
            $quest_id = $_POST['quest_id'];
            $newStatus = $_POST['newStatus'];

            $stmt = $pdo->prepare("UPDATE status SET status = :newStatus WHERE id_player = :player_id AND id_quest = :quest_id");
            $stmt->bindParam(':newStatus', $newStatus, PDO::PARAM_STR);
            $stmt->bindParam(':quest_id', $quest_id, PDO::PARAM_INT);
            $stmt->bindParam(':player_id', $player_id, PDO::PARAM_INT);
            $stmt->execute();
    
            echo json_encode(['status' => 'success']);
        }
        if ($_POST['action'] === 'CHANGE_PROGRESS') {
            $quest_id = $_POST['quest_id'];
            $newProgress = $_POST['newProgress'];

            $stmt = $pdo->prepare("UPDATE status SET progress = :newProgress WHERE id_player = :player_id AND id_quest = :quest_id");
            $stmt->bindParam(':newProgress', $newProgress, PDO::PARAM_STR);
            $stmt->bindParam(':quest_id', $quest_id, PDO::PARAM_INT);
            $stmt->bindParam(':player_id', $player_id, PDO::PARAM_INT);
            $stmt->execute();
    
            echo json_encode(['status' => 'success']);
        }
        if ($_POST['action'] === 'SAVE') {
            $newExp = $_POST['newExp'];
            $newHP = $_POST['newHp'];
            $newDMG = $_POST['newDMG'];
            $newX = $_POST['newX'];
            $newY = $_POST['newY'];
    
            $stmt = $pdo->prepare("UPDATE player SET exp = :exp, hp = :hp, dmg = :dmg, x = :x, y = :y WHERE id = :player_id");
            $stmt->bindParam(':exp', $newExp, PDO::PARAM_INT);
            $stmt->bindParam(':hp', $newHP, PDO::PARAM_INT);
            $stmt->bindParam(':dmg', $newDMG, PDO::PARAM_INT);
            $stmt->bindParam(':x', $newX, PDO::PARAM_INT);
            $stmt->bindParam(':y', $newY, PDO::PARAM_INT);
            $stmt->bindParam(':player_id', $player_id, PDO::PARAM_INT);
            $stmt->execute();
    
            echo json_encode(['status' => 'success']);
        }
        if ($_POST['action'] === 'REVIVE') {
            $newHP = $_POST['playerHp'];
            $newX = $_POST['playerX'];
            $newY = $_POST['playerY'];
    
            $stmt = $pdo->prepare("UPDATE player SET hp = :hp, x = :x, y = :y WHERE id = :player_id");
            $stmt->bindParam(':hp', $newHP, PDO::PARAM_INT);
            $stmt->bindParam(':x', $newX, PDO::PARAM_INT);
            $stmt->bindParam(':y', $newY, PDO::PARAM_INT);
            $stmt->bindParam(':player_id', $player_id, PDO::PARAM_INT);
            $stmt->execute();
    
            echo json_encode(['status' => 'success']);
        }
        if ($_POST['action'] === 'LOGOUT') {
            // Zniszcz sesję
            session_destroy();

            echo "Wylogowano pomyślnie!";
        }
    }
} catch (\PDOException $e) {
    echo json_encode(['status' => 'error', 'message' => $e->getMessage()]);
}
