<?php

class car {
    public $name;
    public $age;
    function __construct($name)
    {
        $this->name =$name;
        $this->age =0;
    }
    function update(){
        $this->age++;
    }
}

class User{
    public $id = 33;
    public $username;
    public $email;
    public $password;

    public function __construct($username, $password){
//        echo "choo choo train";
        $this->username = $username;
        $this->password =$password;
    }
    public function register(){
        echo "User Registered";
    }
    public function logIn(){
        $this->auth_user();
}
    public function auth_user(){
        echo $this->username. '<br/>'. $this->password;
    }
    public function __destruct()
    {
//        echo "Boom Boom";
    }
}

$User = new User("Calvin", '12345');
$User->logIn();