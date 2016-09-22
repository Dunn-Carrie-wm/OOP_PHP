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
spl_autoload_register(function($name){
    include $name . ".php";
});
$goodbye =new goodbye();
$goodbye->saygoodbye();
$hello =new hello();
$hello->sayHello();

$carrie = new car("Toyta","1990","Ford");
echo "Carrie's model of her car is ". $carrie-> get_model();

echo "<br/>";

$carrie2 = new dealer("GTO","1999",'Ford');
echo "The Dealers model of cars is " . $carrie2->get_model();

?>
</html>