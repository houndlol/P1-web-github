<?php
require_once("db.php");

$id = $_GET['id'];

$conn->query("DELETE FROM gebruikers WHERE gebruiker_id = $id");

header("Location: antwoorden.php");
exit;