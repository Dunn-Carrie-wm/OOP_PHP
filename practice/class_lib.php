<?php

class Person{
    var $name;
    public $height;
    public $weight;
    protected $age;
    private $gender;

    function __construct($persons_name)
    {
        $this-> name= $persons_name;

    }
    private function gender(){
        return $this->gender();
    }
//    function set_name($new_name){
//        $this->name = $new_name;
//    }
    public function get_name(){
        return $this->name;
    }
//    function get_name(){
//        return $this->name;
//    }
protected function set_name($new_name){
    if ($this->name!= "Calvins")
        $this->name =strtoupper($new_name);
}
}

class employee extends Person{
    protected function set_name($new_name){
        if ($new_name == "Calvin"){
            $this->name =$new_name;
        }
        else if ($new_name == "Calvin"){
            Person::set_name($employee_name);
        }
    }

    function __construct($employee_name)
    {
        parent::__construct($employee_name);
    }
}


