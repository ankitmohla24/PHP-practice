<?php
class Dog extends Animal{
	public function describe(){
		return parent::describe();
	}
	public function makesound(){
		return "Bark<br>";
	}
}
?>