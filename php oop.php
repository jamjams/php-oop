<?php
	//class Sherlock{
		//class body
		//class body
		//class body
	//}

	//class John{
		//class body
		//class body
		//class body
	//}

	//class Moriarty{
		//class body
		//class body
		//class body
	//}

	$detective1 = new Detective();
	$detective2 = new Detective();

	class Detective {
		public $name = "default name";
		public $occupation = "default occupation";
		public $gender = "male";
		public $address = 221;
		
		function Nameofperson(){
			return $this->firstName . " " . $this->lastName;
		}
	}

	$detective1 = new Detective();
	$detective1->firstName = "Sherlock";
	$detective1->lastName = "Holmes";
	print "The detective's name is " . $detective1->Nameofperson() . ".";
	//default name

	$doctor1 = new Doctor();
	$doctor2 = new Doctor();

	class  Doctor{
		public $name = "default name";
		public $occupation = "default occupation";
		public $gender = "male";
		public $address = 221;
	
		function Nameofperson(){
			return $this->firstName . " " . $this->lastName;
		}
	}

	$doctor1 = new Doctor();
	$doctor1->firstName = "John";
	$doctor1->lastName = "Watson";
	print "The doctor's name is " . $doctor1->Nameofperson() . ".";
	//default name

	$villan1 = new Villan();
	$villan2 = new Villan();

	class  Villan{
		public $name = "default name";
		public $occupation = "default occupation";
		public $gender = "male";
		public $address = 0000;
	
		function Nameofperson(){
			return $this->firstName . " " . $this->lastName;
		}
	}

	$villan1 = new Villan();
	$villan1->firstName = "Jim";
	$villan1->lastName = "Moriarty";
	print "The villan's name is " . $villan1->Nameofperson() . ".";
	
	//default name

	/*public function myMethod( $argument, $another){
		//stuff
	}*/

?>