<?php

require 'databse.php';

$sql = "SELECT * FROM Gerecht";

$result = mysqli_query($conn, $sql);

$recepten = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
    <title>Document</title>
</head>

<body>
    <!--naviagtiebalk waarin je kan wisselen tussen verschillende paginas -->
    <?php require "header.php" ?>
    <?php require "nav.php" ?>
    <main>

        <div class="productfotos">
            <?php foreach ($recepten as $recept) : ?>
                <div class="blokinfo">
                    <a href="recept.php?id=<?php echo $recept["recept_nummer"]; ?>">
                        <img src="images/<?php echo $recept["foto"] ?>" class="fotovaneten">
                    </a>
                        <p>
                            <?php echo $recept["titel"] ?>
                        </p>
                </div>
            <?php endforeach  ?>
        </div>
    </main>



</body>

</html>