<?php
class Duck extends Animal{
	public function describe(){
		return parent::describe();
	}
	public function makesound(){
		return "Quack<br>";
	}
}
?>