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
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
    <title>header</title>
</head>
 
<body>
    <header>
        <div class="bovenkant">
            <div>
                <img src="images/filipijnsevlag.png">
            </div>
            <div class="filipijnen">
                <h1 style="font-size: 60px;">   filipijnse recepten   </h1>
            </div>
            <div>
                <img src="images/filipijnsevlag.png">
            </div>
        </div>


    </header>

</body>

</html>