<?php
abstract class Animal{
	public $name;
	public $color;
	
	public function describe(){
		return $this-> name." is ".$this->color."<br>";
		
	}
	abstract public function makesound();
}
	
class Duck extends Animal{
	public function describe(){
		return parent::describe();
	}
	public function makesound(){
		return "Quack<br>";
	}
}

class Dog extends Animal{
	public function describe(){
		return parent::describe();
	}
	public function makesound(){
		return "Bark<br>";
	}
}

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