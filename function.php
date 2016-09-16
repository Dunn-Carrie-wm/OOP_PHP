<?php
class car{
    var $model;
    public $year;
    protected $make;

    

    function __construct($old_model)
    {
        $this-> model= $old_model;

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

    function __construct($dealer_model)
    {
        parent::__construct($dealer_model);
    }
}

