<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nume = $_POST["nume"];
    $prenume = $_POST["prenume"];
    $dataPreferinta = $_POST["data_preferinta"];
    $oraPreferinta = $_POST["ora_preferinta"];
    $stilistFavorit = $_POST["stilist_favorit"];
    $numeStilist = $_POST["nume_stilist"];
    $metodeContact = isset($_POST["contact"]) ? $_POST["contact"] : [];
    $telefon = isset($_POST["telefon"]) ? $_POST["telefon"] : "";
    $email = isset($_POST["mail"]) ? $_POST["mail"] : "";

    // Aici poți adăuga codul pentru a procesa și stoca datele în baza de date sau pentru a trimite e-mail-uri, etc.

    // Exemplu de afișare a datelor introduse:
    echo "Nume: " . $nume . "<br>";
    echo "Prenume: " . $prenume . "<br>";
    echo "Data preferință: " . $dataPreferinta . "<br>";
    echo "Ora preferință: " . $oraPreferinta . "<br>";
    echo "Ai un stilist favorit? " . $stilistFavorit . "<br>";
    if ($stilistFavorit == "da") {
        echo "Nume stilist favorit: " . $numeStilist . "<br>";
    }
    echo "Metode de contact: " . implode(", ", $metodeContact) . "<br>";
    if (in_array("telefon", $metodeContact)) {
        echo "Telefon: " . $telefon . "<br>";
    }
    if (in_array("mail", $metodeContact)) {
        echo "Email: " . $email . "<br>";
    }
}

// Verifică dacă nu a fost selectată nicio metodă de contact
if (empty($metodeContact)) {
    $errors[] = "Trebuie să alegi cel puțin o metodă de contact.";
}
if (!empty($metodeContact)) {
    echo "Metode de contact: " . implode(", ", $metodeContact) . "<br>";
    if (in_array("telefon", $metodeContact) && !empty($telefon)) {
        echo "Telefon: " . $telefon . "<br>";
    }
    if (in_array("mail", $metodeContact) && !empty($email)) {
        echo "Email: " . $email . "<br>";
    }
}
?>
