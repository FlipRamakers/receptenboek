<?php

require 'databse.php';

$sql = "SELECT * FROM Filipijnen";

$result = mysqli_query($conn, $sql);

$all_products = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <title>receptboek</title>
</head>

<body>
    <?php require "header.php" ?>
    <?php require "nav.php" ?>
    <main>


    </main>
    <?php require "footer.php" ?>


</body>
</html>