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

// Pobierz dane z formularza rejestracji
$username = $_POST['username'];
$password = $_POST['password'];

// Zabezpiecz dane przed atakami SQL Injection
$username = mysqli_real_escape_string($conn, $username);
$password = mysqli_real_escape_string($conn, $password);

// Sprawdź, czy użytkownik o podanym nicku już istnieje
$sql_check = "SELECT id FROM player WHERE nickname = '$username'";
$result_check = $conn->query($sql_check);

if ($result_check->num_rows > 0) {
    // Użytkownik o takim nicku już istnieje
    echo "Użytkownik o podanym nicku już istnieje!";
} else {
    // Dodaj użytkownika do bazy danych
    $sql_insert = "INSERT INTO player (nickname, password) VALUES ('$username', '$password')";

    if ($conn->query($sql_insert) === TRUE) {
        // Pomyślnie dodano użytkownika
        echo "Zarejestrowano pomyślnie!";
    } else {
        // Błąd podczas dodawania użytkownika
        echo "Błąd podczas rejestracji użytkownika: " . $conn->error;
    }
}

$conn->close();
?>