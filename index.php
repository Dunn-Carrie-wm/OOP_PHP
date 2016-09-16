<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Object Practice</title>
    <?php include("function.php"); ?>
</head>
<body>

</body>

<?php
$carrie = new car("Toyta");
echo "Carrie's model of her car is ". $carrie-> get_model();

echo "<br/>";

$carrie2 = new dealer("GTO");
echo "The Dealers model of cars is " . $carrie2->get_model();

?>
</html>