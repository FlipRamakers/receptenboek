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
dadadad
</body>

</html>