<?php
spl_autoload_register(function($name){
    include $name . ".php";
});
$foo =new foo();
$bar =new bar();
$bar->sayHello();