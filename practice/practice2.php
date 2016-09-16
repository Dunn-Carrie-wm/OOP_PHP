<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>OOP In PHP</title>
    <?php include("class_lib.php"); ?>
</head>
<body>

</body>
<?php
    $carrie = new Person("Carrie Dunn");
        echo "Carrie's full name ". $carrie-> get_name();

    echo "<br/>";

    $McMuffin = new employee("McMuffin");
    echo "Calvin is a " . $McMuffin->get_name();

//    $calvin = new Person();
//    $carrie->set_name("Carrie Dunn");
//    $calvin->set_name("Calvin McClure");
//
//    echo "Calvin's name is: " . $calvin->get_name();
//    echo '<br/>';
//    echo "Carrie's full name is " . $carrie->get_name();
?>
</html>
