<?php
require_once("db.php");
include_once("../includes/inc_header.php");

$id = $_GET['id'];

if (isset($_POST['opslaan'])) {

    $naam = $_POST['naam'];
    $leeftijd = $_POST['leeftijd'];
    $genre = $_POST['genre'];
    $artiest = $_POST['artiest'];

    $conn->query("UPDATE gebruikers SET naam='$naam', leeftijd='$leeftijd', genre='$genre', artiest='$artiest' WHERE gebruiker_id=$id");

    header("Location: antwoorden.php");
    exit;
}

$result = $conn->query("SELECT * FROM gebruikers WHERE gebruiker_id = $id");
$row = $result->fetch_assoc();

echo "<main>";
echo "<div class='form-blok'>";

echo "<form method='POST'>";
echo "<input class='veld' type='text' name='naam' value='{$row['naam']}'>";
echo "<input class='veld' type='number' name='leeftijd' value='{$row['leeftijd']}'>";
echo "<input class='veld' type='text' name='genre' value='{$row['genre']}'>";
echo "<input class='veld' type='text' name='artiest' value='{$row['artiest']}'>";
echo "<input class='knop' type='submit' name='opslaan' value='Opslaan'>";
echo "</form>";

echo "</div>";
echo "</main>";

include_once("../includes/inc_footer.php");