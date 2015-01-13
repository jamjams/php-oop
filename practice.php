<?php
	class Celebrity{
		public $firstname = "Benedict";
		public $lastname = "Cumberbatch";
		public $gender = "male";
		public $age= 38;

		function _construct($firstname, $lastname, $gender, $age){
			$this->firstname = $firstname;
			$this->lastname = $lastname;
			$this->gender = $gender;
			$this->age = $age;

		}
		// first method
		function hiCelebrity(){
			return $this->firstname . " " . $this->lastname . " is " . $this->gender . " and is " . $this->age . " years old. ";
		}
		// second method
		function intro(){
			return "<br> <br>Hello, my name is " . $this->firstname . " " . $this->lastname . " and I am " . $this->age . " years old.";
		}
	}

	$benny = new Celebrity('Benedict', 'Cumberbatch', 'male', 38);
	echo $benny->hiCelebrity();

	$hello = new Celebrity('Benedict', 'Cumberbatch', 38);
	echo $hello->intro();
?>