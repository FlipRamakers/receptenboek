<?php

require 'databse.php';

$sql = "SELECT * FROM Gerecht";

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
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
</head>

<body>
    <!--naviagtiebalk waarin je kan wisselen tussen verschillende paginas -->
    <?php require "header.php" ?>
    <?php require "nav.php" ?>
    <main>

        <p>
        <h1><strong> Filippijnse keuken</strong></h1>
        </p>
        <p> De Filipijnse keuken is, net als de Filipijnen zelf, door de eeuwen heen onder invloed van verschillende culturen geëvolueerd.
            Ze is beïnvloed door de Chinese, Maleisische, de Spaanse, en in mindere mate door de Amerikaanse en Indiase cultuur,
            wat geresulteerd heeft in een unieke, multiculturele combinatie van ingrediënten en gerechten.
            De schotels variëren van een eenvoudige maaltijd van vis en rijst tot rijkgevulde paella's en cocidos.
            Enkele populaire gerechten zijn lechon (een in zijn geheel geroosterd varken), longanisa (inheemse worst);
            tortas (eierwraps), Pan de sal (broodjes), adobo (kip en/of varkensvlees dat in knoflook, sojasaus en azijn wordt gesmoord),
            kalderetang kambing (rijke geitenstoofpot), kare-kare (ossenstaart, rundvleesbrokken en/of pens gekookt in pindasaus),
            sinigang (een tom yam - achtig gerecht), pancit (geroerbakte pasta), lumpia (verse of gebakken loempia's)
            en halo-halo (een koud gemengd fruitdessert). </p>
        <div class="fotomain"><img src="images/keukenfilipijnen.jpeg"></div>
    </main>
    <?php require "footer.php" ?>


</body>

</html>