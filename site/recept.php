<?php
require 'databse.php';

$nummer = $_GET["id"];

$sql = "SELECT * FROM Gerecht WHERE 	recept_nummer  = $nummer";

$result = mysqli_query($conn, $sql);

$recept = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
    <title><?php echo $recept["titel"] ?></title>
</head>

<body>
    <!--naviagtiebalk waarin je kan wisselen tussen verschillende paginas -->
    <?php require "header.php" ?>
    <?php require "nav.php" ?>

    <div class="productdetails">

        <p>
        <h1><?php echo $recept["titel"] ?></h1>
        </p>
        <img src="images/<?php echo $recept["foto"] ?>" class="fotovaneten">
        <p>
            <?php echo $recept["duur"] ?>
        </p>
        <p>
            moeilijkheidsgraad = <?php echo $recept["moeilijkheidsgraad"] ?>
        </p>
        <p>
            Aantal ingredienten = <?php echo $recept["aantal_ingredienten"] ?>
        </p>
        <p>
            <?php echo $recept["menugang"] ?>
        </p>

    </div>
    <?php require "footer.php" ?>
</body>

</html>