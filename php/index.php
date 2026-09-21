<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
<?php
session_start();

error_reporting(E_ALL);
ini_set("display_errors", 1);

// HEADER
include_once("../includes/inc_header.php");


echo "<main>";

echo "<div class='logo'>";
echo "🎵";
echo "</div>";

echo "<section class='intro'>";

echo "<h1>Ontdek de muziek!</h1>";

echo "<p>";
echo "Vul de korte muziek enquête in en laat weten wat jouw favoriete muziek is.";
echo "</p>";

echo "<a class='button' href='enquete.php'>";
echo "Start enquête";
echo "</a>";

echo "</section>";

echo "</main>";


// FOOTER
include_once("../includes/inc_footer.php");

?>
</body>