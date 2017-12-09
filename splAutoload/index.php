<?php
spl_autoload_register(function($class_name){
	
	include $class_name . ".php";
});
	




$animal1 = new Dog();
$animal1->name = "tommy";
$animal1->color = "black";
echo $animal1->describe();
echo $animal1->makesound();

$animal2 = new Duck();
$animal2->name = "Howard";
$animal2->color = "white";
echo $animal2->describe();
echo $animal2->makesound();

?>