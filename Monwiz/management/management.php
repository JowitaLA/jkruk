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
    if ($_SERVER['REQUEST_METHOD'] === 'SEARCH') {
        $player_id = $_SESSION['player_id'] ?? null;  // Pobierz id gracza z sesji

        if ($player_id === null) {
            echo json_encode(['status' => 'error', 'message' => 'Nie znaleziono gracza']);
            exit();
        }

        $stmt = $pdo->prepare("SELECT id FROM player WHERE id = :player_id AND role = 'admin'");
        $stmt->bindParam(':player_id', $player_id, PDO::PARAM_INT);

        $stmt->execute();

        $data = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($data) {
            echo json_encode(['status' => 'success', 'id' => $data['id']]);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Nie znaleziono gracza']);
        }
    } 

    // Jeśli zapytanie jest typu GET, pobierz dane z bazy
    if ($_SERVER['REQUEST_METHOD'] === 'GET_USERS') {

        $stmt = $pdo->prepare("SELECT * FROM player");


        $stmt->execute();
        $data = $stmt->fetchAll();
        echo json_encode($data);
    } elseif ($_SERVER['REQUEST_METHOD'] === 'GET_QUESTS') {
        $stmt = $pdo->prepare("SELECT * FROM quest");

        $stmt->execute();
        $data = $stmt->fetchAll();
        echo json_encode($data);
    }

    // Jeśli zapytanie jest typu SAVE, zaktualizuj dane w bazie
    elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {

        if ($_POST['action'] === 'UPDATE_USER') {
            $player_id = $_POST['idPlayer'];

            $newNickname = $_POST['newNickname'];
            $newPassword = $_POST['newPassword'];
            $newExp = $_POST['newExp'];
            $newHp = $_POST['newHp'];
            $newDmg = $_POST['newDmg'];
            $newX = $_POST['newX'];
            $newY = $_POST['newY'];
            $newRole = $_POST['newRole'];

            $stmt = $pdo->prepare("UPDATE player SET nickname = :newNickname, password = :newPassword, exp = :newExp, hp = :newHp, dmg = :newDmg, x = :newX, y = :newY, role = :newRole WHERE id = :player_id");
            $stmt->bindParam(':newNickname', $newNickname, PDO::PARAM_STR);
            $stmt->bindParam(':newPassword', $newPassword, PDO::PARAM_STR);
            $stmt->bindParam(':newExp', $newExp, PDO::PARAM_INT);
            $stmt->bindParam(':newHp', $newHp, PDO::PARAM_INT);
            $stmt->bindParam(':newDmg', $newDmg, PDO::PARAM_INT);
            $stmt->bindParam(':newX', $newX, PDO::PARAM_INT);
            $stmt->bindParam(':newY', $newY, PDO::PARAM_INT);
            $stmt->bindParam(':newRole', $newRole, PDO::PARAM_STR);

            $stmt->bindParam(':player_id', $player_id, PDO::PARAM_INT);
            $stmt->execute();

            echo json_encode(['status' => 'success']);
        }

        if ($_POST['action'] === 'DELETE_USER') {
            $player_id = $_POST['idPlayer'];

            $stmtStatus = $pdo->prepare("DELETE s FROM status s JOIN player p ON s.id_player = p.id WHERE p.id = :player_id");
            $stmtStatus->bindParam(':player_id', $player_id, PDO::PARAM_INT);
            $stmtStatus->execute();

            $stmt = $pdo->prepare("DELETE FROM player WHERE id = :player_id");
            $stmt->bindParam(':player_id', $player_id, PDO::PARAM_INT);
            $stmt->execute();

            echo json_encode(['status' => 'success']);
        }

        if ($_POST['action'] === 'ADD_USER') {
            $newNickname = $_POST['newNickname'];
            $newPassword = $_POST['newPassword'];
            $newExp = $_POST['newExp'];
            $newHp = $_POST['newHp'];
            $newDmg = $_POST['newDmg'];
            $newX = $_POST['newX'];
            $newY = $_POST['newY'];
            $newRole = $_POST['newRole'];

            $stmt = $pdo->prepare("INSERT INTO player (nickname, password, exp, hp, dmg, x, y, role) VALUES (:newNickname, :newPassword, :newExp, :newHp, :newDmg, :newX, :newY, :newRole)");
            $stmt->bindParam(':newNickname', $newNickname, PDO::PARAM_STR);
            $stmt->bindParam(':newPassword', $newPassword, PDO::PARAM_STR);
            $stmt->bindParam(':newExp', $newExp, PDO::PARAM_INT);
            $stmt->bindParam(':newHp', $newHp, PDO::PARAM_INT);
            $stmt->bindParam(':newDmg', $newDmg, PDO::PARAM_INT);
            $stmt->bindParam(':newX', $newX, PDO::PARAM_INT);
            $stmt->bindParam(':newY', $newY, PDO::PARAM_INT);
            $stmt->bindParam(':newRole', $newRole, PDO::PARAM_STR);

            $stmt->execute();

            echo json_encode(['status' => 'success']);
        }

        if ($_POST['action'] === 'UPDATE_QUEST') {
            $quest_id = $_POST['idQuest'];

            $newNPC = $_POST['newNPC'];
            $newTitle = $_POST['newTitle'];
            $newDialog = $_POST['newDialog'];
            $newLvl = $_POST['newLvl'];
            $newNameTarget = $_POST['newNameTarget'];
            $newTarget = $_POST['newTarget'];
            $newPrizeEXP = $_POST['newPrizeEXP'];
            $newPrizeHP = $_POST['newPrizeHP'];
            $newPrizeDMG = $_POST['newPrizeDMG'];
            
            $lvl = $newLvl;
            $newLvl = 0;
            
            for(;$lvl>=0;$lvl--){
                $newLvl = $newLvl + ($lvl*1000);
            }

            $stmt = $pdo->prepare("UPDATE quest SET id_npc = :newNPC, title = :newTitle, dialog = :newDialog, min_lvl = :newLvl, target = :newTarget, name_target = :newNameTarget, prize_exp = :newPrizeEXP, prize_hp = :newPrizeHP, prize_dmg = :newPrizeDMG WHERE id = :quest_id");
            $stmt->bindParam(':newNPC', $newNPC, PDO::PARAM_STR);
            $stmt->bindParam(':newTitle', $newTitle, PDO::PARAM_STR);
            $stmt->bindParam(':newDialog', $newDialog, PDO::PARAM_STR);
            $stmt->bindParam(':newLvl', $newLvl, PDO::PARAM_INT);
            $stmt->bindParam(':newNameTarget', $newNameTarget, PDO::PARAM_STR);
            $stmt->bindParam(':newTarget', $newTarget, PDO::PARAM_INT);
            $stmt->bindParam(':newPrizeEXP', $newPrizeEXP, PDO::PARAM_INT);
            $stmt->bindParam(':newPrizeHP', $newPrizeHP, PDO::PARAM_INT);
            $stmt->bindParam(':newPrizeDMG', $newPrizeDMG, PDO::PARAM_INT);

            $stmt->bindParam(':quest_id', $quest_id, PDO::PARAM_INT);
            $stmt->execute();

            echo json_encode(['status' => 'success']);
        }

        if ($_POST['action'] === 'DELETE_QUEST') {
            $quest_id = $_POST['idQuest'];

            $stmtStatus = $pdo->prepare("DELETE s FROM status s JOIN quest q ON s.id_quest = q.id WHERE q.id = :quest_id");
            $stmtStatus->bindParam(':quest_id', $quest_id, PDO::PARAM_INT);
            $stmtStatus->execute();

            $stmt = $pdo->prepare("DELETE FROM quest WHERE id = :quest_id");
            $stmt->bindParam(':quest_id', $quest_id, PDO::PARAM_INT);
            $stmt->execute();

            echo json_encode(['status' => 'success']);
        }

        if ($_POST['action'] === 'ADD_QUEST') {
            $newNPC = $_POST['newNPC'];
            $newTitle = $_POST['newTitle'];
            $newDialog = $_POST['newDialog'];
            $newLvl = $_POST['newLvl'];
            $newNameTarget = $_POST['newNameTarget'];
            $newTarget = $_POST['newTarget'];
            $newPrizeEXP = $_POST['newPrizeEXP'];
            $newPrizeHP = $_POST['newPrizeHP'];
            $newPrizeDMG = $_POST['newPrizeDMG'];

            $lvl = $newLvl;
            $newLvl = 0;
            
            for(;$lvl>=0;$lvl--){
                $newLvl = $newLvl + ($lvl*1000);
            }

            $stmt = $pdo->prepare("INSERT INTO quest (id_npc, title, dialog, min_lvl, target, name_target, prize_exp, prize_hp, prize_dmg) VALUES (:newNPC, :newTitle, :newDialog, :newLvl, :newTarget, :newNameTarget, :newPrizeEXP, :newPrizeHP, :newPrizeDMG)");
            $stmt->bindParam(':newNPC', $newNPC, PDO::PARAM_STR);
            $stmt->bindParam(':newTitle', $newTitle, PDO::PARAM_STR);
            $stmt->bindParam(':newDialog', $newDialog, PDO::PARAM_STR);
            $stmt->bindParam(':newLvl', $newLvl, PDO::PARAM_INT);
            $stmt->bindParam(':newNameTarget', $newNameTarget, PDO::PARAM_STR);
            $stmt->bindParam(':newTarget', $newTarget, PDO::PARAM_INT);
            $stmt->bindParam(':newPrizeEXP', $newPrizeEXP, PDO::PARAM_INT);
            $stmt->bindParam(':newPrizeHP', $newPrizeHP, PDO::PARAM_INT);
            $stmt->bindParam(':newPrizeDMG', $newPrizeDMG, PDO::PARAM_INT);

            $stmt->execute();

            echo json_encode(['status' => 'success']);
        }

    }
} catch (\PDOException $e) {
    echo json_encode(['status' => 'error', 'message' => $e->getMessage()]);
}
