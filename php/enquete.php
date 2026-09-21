<?php
session_start();

error_reporting(E_ALL);
ini_set("display_errors", 1);

require_once("db.php");
include_once("../includes/inc_header.php");

// Als het formulier is verstuurd
if (isset($_POST['versturen'])) {

    $naam = $_POST['naam'];
    $leeftijd = $_POST['leeftijd'];
    $genre = $_POST['genre'];
    $artiest = $_POST['artiest'];

    $stmt = mysqli_prepare($conn, "INSERT INTO gebruikers (naam, leeftijd, genre, artiest) VALUES (?, ?, ?, ?)");
    mysqli_stmt_bind_param($stmt, "siss", $naam, $leeftijd, $genre, $artiest);
    mysqli_stmt_execute($stmt);

    echo "<main>";
    echo "<p>Bedankt! Je antwoorden zijn opgeslagen.</p>";
    echo "</main>";

    echo "<script src='https://cdn.jsdelivr.net/npm/canvas-confetti@1.9.3/dist/confetti.browser.min.js'></script>";
    echo "<script>confetti({ particleCount: 150, spread: 90, origin: { y: 0.6 } });</script>";

    include_once("../includes/inc_footer.php");
    exit;
}

echo "<main>";

echo "<h1>Enquête invullen</h1>";
echo "<p>Het invullen duurt slechts 2 minuten.</p>";

echo "<div class='form-blok'>";

echo "<form method='POST' action='enquete.php'>";

echo "<div class='veld-groep'>";
echo "<label>1. Wat is je naam?</label>";
echo "<input class='veld' type='text' name='naam' required>";
echo "</div>";

echo "<div class='veld-groep'>";
echo "<label>2. Wat is je leeftijd?</label>";
echo "<input class='veld' type='number' name='leeftijd' required>";
echo "</div>";

echo "<div class='veld-groep'>";
echo "<label>3. Wat is je favoriete muziekgenre?</label>";
echo "<input class='veld' type='text' name='genre' required>";
echo "</div>";

echo "<div class='veld-groep'>";
echo "<label>4. Wie is je favoriete artiest of band?</label>";
echo "<input class='veld' type='text' name='artiest' required>";
echo "</div>";

echo "<input class='knop' type='submit' name='versturen' value='Verstuur mijn antwoorden'>";

echo "</form>";

echo "</div>";
echo "</main>";

include_once("../includes/inc_footer.php");