<?php

require 'databse.php';

$sql = "SELECT * FROM Filipijnen";

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
    <?php require "header.php" ?>
    <?php require "nav.php" ?>
    <main>

        <ul class="productfotos">
            <?php foreach ($recepten as $recept) : ?>
                <div class="blokinfo">
                    <a href="recept.php?id=<?php echo $recept["recept_nummer"]; ?>">
                        <div class="fotovaneten">
                            <li><img src="images/<?php echo $recept["foto"] ?>">
                        </div>
                        <p><?php echo $recept["titel"] ?></p>
                        <p><?php echo $recept["duur"] ?></p>
                        </li>
                </div>
            <?php endforeach  ?>
        </ul>


    </main>
    <?php require "footer.php" ?>


</body>

</html>