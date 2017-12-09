<?php
class People{
	public $person1 = "Mike";
	public $person2 = "Shelly";
	public $person3 = "Jeff";
	public $person4 = "Jen";
	
	protected $person5 = "John";
	private $person6 = "Stuart";
	
	function iterateObject(){
		foreach($this as $key => $value){
			print "$key => $value <br>";
		}
		echo "<br>";
	}
}

$people = new People;
echo $people->iterateObject();
foreach($people as $key => $value){
			print "$key => $value <br>";
		}
?>