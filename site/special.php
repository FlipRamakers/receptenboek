<?php
require 'database.php';

$sql1 = "SELECT * FROM Gerecht WHERE aantal_ingredienten = (SELECT MAX(aantal_ingredienten) FROM Gerecht);";
$result1 = mysqli_query($conn, $sql1);
$recept1 = mysqli_fetch_assoc($result1);

$sql2 = "SELECT * FROM Maleisische WHERE tijdsduur = (SELECT MAX(tijdsduur) FROM Maleisische);";

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!--naviagtiebalk waarin je kan wisselen tussen verschillende paginas -->
    <?php require "header.php" ?>
    <?php require "nav.php" ?>
    <main>

    </main>
    <?php require "footer.php" ?>
</body>

</html>