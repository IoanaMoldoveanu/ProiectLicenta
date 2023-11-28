<?php
// Include fișierul de conexiune la baza de date
include('conexiune.php');

// Prelucrarea datelor de la formular
$nume = $_POST['nume'];
$prenume = $_POST['prenume'];
$data = $_POST['data_preferinta'];
$ora = $_POST['ora_preferinta'];
// $servicii = $_POST['servicii']; // Asigură-te că este corespunzător numit în formular
// $stilist = $_POST['favStylistName']; // Asigură-te că este corespunzător numit în formular
$telefon = $_POST['telefon'];
$email = $_POST['mail'];

// Construiește interogarea SQL și execut-o

$sql = "INSERT INTO programari2 (nume, prenume, data_preferinta, ora_preferinta, telefon, email) VALUES ('$nume', '$prenume', '$data', '$ora', '$telefon', '$mail')";

if ($conn->query($sql) === TRUE) {
    // Înregistrarea a avut succes
    header('Location: confirmare.html'); // Redirecționează utilizatorii la o pagină de confirmare
} else {
    // Înregistrarea a eșuat
    echo "Eroare: " . $sql . "<br>" . $conn->error;
}

// Închide conexiunea la baza de date
$conn->close();
?>
