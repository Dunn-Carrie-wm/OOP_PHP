<?php
class people{
    public $person1 = "Calvin";
    public $person2 ="Markus";
    public $person3 ="Daucen";
    public $person4 ="Dalton";
    public $person5 = "Ben";
    function interateObject(){
    foreach($this as $key => $value){
        print "$key => $value<br>";
    }
}
}




$people = new people();
$people->interateObject();