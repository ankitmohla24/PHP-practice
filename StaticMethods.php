<?php
class User{
	public $username;
	public static $minPassLen = 5;
	
	public static function validatePassword($pass){
		if (strlen($pass) > self::$minPassLen){
			return true;
		}else{
			return false;
		} 
	}
}

$password = "123456";
if(User::validatePassword($password)){
	echo "password length is greater than ".User::$minPassLen." and valid";
}
else{
	echo "password is not valid";
}


?>