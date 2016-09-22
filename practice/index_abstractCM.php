<?php
abstract class animals{
    public $name;
    public $color;

    public function describe()
    {
        return $this->name . " is " . $this->color;
    }

    abstract public function makeSound();
}

class duck extends animals{
    public function describe()
    {
        return parent::describe();
    }
    public function makeSound()
    {
        return "what";
    }
}

class dog extends animals{
    public function describe()
    {
        return parent::describe();
    }
    public function makeSound()
    {
        return "Bark";
    }
}
class cat extends animals{
    public function describe()
    {
        return parent::describe();
    }
    public function makeSound()
    {
        return "Meow";
    }
}


$animals = new duck();
$animals->name ="George";
$animals->color ="White";
//echo $animals ->describe();
echo $animals-> makeSound();

 echo "<br/>";

$animals = new dog();
$animals->name ="Weston";
$animals->color ="Black";
echo $animals->describe();
//echo $animals->makeSound();

echo "<br/>";

$animals = new cat();
$animals->name ="Cyber";
$animals->color ="Gray";
echo $animals->describe();
//echo $animals->makeSound();