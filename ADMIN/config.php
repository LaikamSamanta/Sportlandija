<?php
//Datubāzes konfigurācijas
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sportlandija";

// Izveidot savienojumu
$conn = new mysqli($servername, $username, $password, $dbname);
// Pārbaudīt savienojumu
if ($conn->connect_error) {
    die("Savienojums nav izdevies: " . $conn->connect_error);
}
?>