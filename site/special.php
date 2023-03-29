<?php
require 'databse.php';

$sql1 = "SELECT * FROM Gerecht WHERE aantal_ingredienten = (SELECT MAX(aantal_ingredienten) FROM Gerecht);";
$result1 = mysqli_query($conn, $sql1);
$recept1 = mysqli_fetch_assoc($result1);

$sql2 = "SELECT * FROM Gerecht WHERE duur = (SELECT MAX(duur) FROM Gerecht);";
$result2 = mysqli_query($conn, $sql2);
$recept2 = mysqli_fetch_assoc($result2);

$sql3 = "SELECT * FROM Gerecht  WHERE moeilijkheidsgraad = (SELECT MIN(moeilijkheidsgraad) FROM Gerecht);";
$result3 = mysqli_query($conn, $sql3);
$recept3 = mysqli_fetch_assoc($result3);


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
        <div class="container">
            <div>
                <div class="lijst_onderelkaar">
                    <h1>recept met de meeste ingrediënten</h1>
                    <div class="row">
                        <div class="niks">
                            <div>
                                <ul>
                                    <li> <?php echo $recept1["titel"] ?></li>
                                    <li>  , aantal ingrediënten <?php echo $recept1["aantal_ingredienten"] ?> </li>
                                </ul>
                            </div>
                        </div>
                        <div class="naareind">
                            <div class="img_specials">
                                <img src="images<?php echo $recept1["foto"] ?>">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lijst_onderelkaar">
                    <h1>Welke recept duurt het langst:</h1>
                    <div class="row">
                        <div class="niks">
                            <div>
                                <ul>
                                    <li> <?php echo $recept2["titel"] ?></li>
                                    <li> , <?php echo $recept2["duur"] ?> minuten</li>
                                </ul>
                            </div>
                        </div>
                        <div class="naareind">
                            <div class="img_specials">
                                <img src="images<?php echo $recept2["foto"] ?>">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lijst_onderelkaar">
                    <h1>Welke recept heeft het makkelijkste moeilijkheidsgraad</h1>
                    <div class="row">
                        <div class="niks">
                            <ul>
                                <li> <?php echo $recept3["titel"] ?></li>
                                <li> , moeilijkheidsgraad<?php echo $recept3["moeilijkheidsgraad"] ?> </li>
                            </ul>
                        </div>
                        <div class="naareind">
                            <div class="img_specials">
                                <img src="images<?php echo $recept3["foto"] ?>">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            
    </main>
    <?php require "footer.php" ?>
</body>

</html>