<?php
	class Sherlock{
		//class body
		//class body
		//class body
	}

	class John{
		//class body
		//class body
		//class body
	}

	class Moriarty{
		//class body
		//class body
		//class body
	}

	/* lesson 1: Example 1 */
	$detective1 = new Detective();
	$detective2 = new Detective();

	class Detective {
		public $firstName = "default name";
		public $lastName = "default last name";
		public $occupation = "consulting detective";
		public $address = 221;
		/*  end lesson 1: Example 1 */

		/* Lesson 2: Example 1 */
		function _construct($firstName, $lastName, $occupation){
			$this->firstName = $firstName;
			$this->lastName = $lastName;
			$this->occupation = $occupation;
		} /* end of Lesson 2: Example 1 */

		function Nameofperson(){
			return $this->firstName . " " . $this->lastName;
		}
	}
	/* Lesson 2: Example 2 */
	$detective1 = new Detective("Sherlock", "Holmes", "detective");
	print "Detective1:" . $detective1->getName;
	/* end of Lesson 2: Example 2 */

	/* lesson 1: Example 2 */
	$detective1->firstName = "Sherlock";
	$detective1->lastName = "Holmes";
	print "The detective's name is " . $detective1->Nameofperson() . ".";
	/* end lesson 1: Example 2 */

	//default name

	/* lesson 1: Example 1 */
	$doctor1 = new Doctor();
	$doctor2 = new Doctor();

	class  Doctor{
		public $firstName = "default name";
		public $lastName = "default last name";
		public $occupation= "doctor";
		public $address = 221;
		/* end lesson 1: Example 1 */

		/* Lesson 2: Example 1 */
		function _construct($firstName, $lastName, $gender){
			$this->firstName = $firstName;
			$this->lastName = $lastName;
			$this->occupation= $occupation;
		} /* end of Lesson 2: Example 1 */

		function Nameofperson(){
			return $this->firstName . " " . $this->lastName;
		}
	}

	/* Lesson 2: Example 2 */
	$doctor1 = new Doctor("John", "Watson", "doctor");
	print "doctor1:" . $doctor1->getName;
	/* end of Lesson 2: Example 2 */

	/* lesson 1: Example 2 */
	$doctor1->firstName = "John";
	$doctor1->lastName = "Watson";
	print "The doctor's name is " . $doctor1->Nameofperson() . ".";
	/* end of lesson 2: Example 2 */
	
	//default name

	$villan1 = new Villan();
	$villan2 = new Villan();

	class  Villan{
		public $firstName = "default name";
		public $lastName = "default last name";
		public $occupation = " consulting criminal";
		public $address = 0000;
	
		/* Lesson 2: Example 1 */
		function _construct($firstName, $lastName, $occupation){
			$this->firstName = $firstName;
			$this->lastName = $lastName;
			$this->occupation = $occupation;
		} /* end of Lesson 2: Example 1 */

		function Nameofperson(){
			return $this->firstName . " " . $this->lastName;
		}
	}

	/* Lesson 2: Example 2 */
	$villan1 = new Villan("Jim", "Moriarty", "consulting criminal");
	print "Villan1:" . $villan1->getName;
	/* end of Lesson 2: Example 2 */

	/* lesson 1: Example 2 */
	$villan1->firstName = "Jim";
	$villan1->lastName = "Moriarty";
	print "The villan's name is " . $villan1->Nameofperson() . ".";
	/* end of lesson 1: Example 2 */

	//default name

	public function myMethod( $argument, $another){
		//stuff
	}

?>