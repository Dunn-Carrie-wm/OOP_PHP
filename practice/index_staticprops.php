<?php
class User{
    public $username;
    public static $minPasslength= 5;
    public static function validatePassword($password){
        if(strlen($password) >= self::$minPasslength){
            return true;
        }
        else {
            return false;
        }
    }
}

$password = "Password";

//if(User::validatePassword($password)){
//    echo "Password is Vaild";
//}

echo User::$minPasslength;