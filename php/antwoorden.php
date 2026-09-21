<?php
session_start();

error_reporting(E_ALL);
ini_set("display_errors", 1);

require_once("db.php");
include_once("../includes/inc_header.php");

$sql = "SELECT * FROM gebruikers";
$result = $conn->query($sql);

echo "<main>";

echo "<h1>Muziek enquête antwoorden</h1>";
echo "<p>Bekijk wat anderen hebben ingevuld.</p>";

echo "<div class='form-blok'>";

echo "<a class='knop' href='enquete.php'>➕ Nieuw antwoord toevoegen</a>";

echo "<table class='db_table'>";
echo "<tr><th>Naam</th><th>Leeftijd</th><th>Genre</th><th>Artiest</th><th colspan='2'>Acties</th></tr>";

while ($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>{$row['naam']}</td>";
    echo "<td>{$row['leeftijd']}</td>";
    echo "<td>{$row['genre']}</td>";
    echo "<td>{$row['artiest']}</td>";
    echo "<td><a href='edit.php?id={$row['gebruiker_id']}'>✏️ Bewerken</a></td>";
    echo "<td><a href='delete.php?id={$row['gebruiker_id']}'>🗑️ Verwijderen</a></td>";
    echo "</tr>";
}

echo "</table>";
echo "</div>";
echo "</main>";

include_once("../includes/inc_footer.php");

$conn->close();