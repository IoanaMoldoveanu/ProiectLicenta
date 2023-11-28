<?php
// Parametrii pentru conectarea la baza de date MySQL
$servername = "localhost"; // sau adresa IP a serverului MySQL
$username = "root"; // înlocuiește cu numele tău de utilizator MySQL
$password = "ioana"; // înlocuiește cu parola ta MySQL
$database = "studio_beauty"; // înlocuiește cu numele bazei tale de date

// Conectare la baza de date
$conn = new mysqli($servername, $username, $password, $database);

// Verifică conexiunea
if ($conn->connect_error) {
    die("Conexiune eșuată: " . $conn->connect_error);
}
?>
