<?php
class car{
    var $model;
    public $year;
    protected $make;



    function __construct($old_model, $year, $make)
    {
        $this-> model= $old_model;
        $this-> year = $year;
        $this-> make = $make;

    }
    private function year(){
        return $this->year();
    }

    public function get_model(){
        return $this->model;
    }

    protected function set_model($new_model){
        if ($this->model!= "Camry")
            $this->model =strtoupper($new_model);
    }
    public $car1 = "Jetta";
    public $car2 ="Toyta";
    public $car3 ="Ford";
    public $car4 ="Ferri";
    public $car5 = "Corvet";
    function interateObject()
    {
        foreach ($this as $key => $value) {
            print "$key => $value<br>";
        }
    }
}

class dealer extends car{
    protected function set_model($new_model){
        if ($new_model == "GTO"){
            $this->model =$new_model;
        }
        else if ($new_model == "Toyta"){
            car::set_model($dealer_model);
        }
    }

    function __construct($dealer_model, $year, $make)
    {
        parent::__construct($dealer_model, $year , $make);
    }
}

class model{
    public $modelname;
    public static $minModellength= 2;
    public static function validateModel($model){
        if(strlen($model) >= self::$minModellength){
            return true;
        }
        else {
            return false;
        }
    }
}

$model = "model";

if(model::validateModel($model)){
    echo "Model is a real model";
    echo "<br/>";
}
abstract class speed{
    public $mpg;
    public $maxSpeed;

    public function describe()
    {
        return "This car gets " .$this->mpg . " and " . $this->maxSpeed;
    }

    abstract public function torque();
}

class camero extends speed{
    public function describe()
    {
        return parent::describe();
    }
    public function torque()
    {
        return "12000";
    }
}

class mustang extends speed{
    public function describe()
    {
        return parent::describe();
    }
    public function torque()
    {
        return "15000";
    }

}
class gte extends speed{
    public function describe()
    {
        return parent::describe();
    }
    public function torque()
    {
        return "500";
    }
}

$speed = new camero();
$speed->mpg ="35 Miles Per Gallon ";
$speed->maxSpeed ="150 is the max speed";

echo $speed-> torque();

echo "<br/>";

$speed = new mustang();
$speed->mpg ="40 Miles per gallon";
$speed->maxSpeed ="200 is the max speed.";
echo $speed->describe();

echo "<br/>";
$car = new car("GTO", "1999", "Ford");
$car->interateObject();