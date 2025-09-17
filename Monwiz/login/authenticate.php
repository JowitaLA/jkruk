<?php
header("Access-Control-Allow-Origin: *");

// Połącz się z bazą danych MySQL
$servername = "localhost";
$username = "root"; // Nazwa użytkownika bazy danych
$password = ""; // Hasło do bazy danych
$dbname = "monwiz"; // Nazwa bazy danych

// Utwórz połączenie
$conn = new mysqli($servername, $username, $password, $dbname);

// Sprawdź połączenie
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Pobierz dane z formularza logowania
$username = $_POST['username'];
$password = $_POST['password'];

// Zabezpiecz dane przed atakami SQL Injection
$username = mysqli_real_escape_string($conn, $username);
$password = mysqli_real_escape_string($conn, $password);

// Sprawdź, czy użytkownik istnieje w bazie danych
$sql = "SELECT * FROM player WHERE nickname='$username' AND password='$password'";
$result = $conn->query($sql);

if ($result !== false && $result->num_rows > 0) {
    // Użytkownik istnieje, zaloguj
    $row = $result->fetch_assoc(); // Pobierz dane użytkownika
    session_start();  // Rozpocznij sesję
    $_SESSION['player_id'] = $row['id'];  // Zapisz id gracza w sesji
    echo "Zalogowano pomyslnie!";
} else {
    // Użytkownik nie istnieje, wyświetl komunikat o błędzie
    echo "Nieprawidlowa nazwa uzytkownika lub haslo!";
}

$conn->close();
?>
