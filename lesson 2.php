<?php
class Detective {
		public $firstName;
		public $lastName;
		public $occupation; 
		public $address;
		/*  end lesson 1: Example 1 */

		/* Lesson 2: Example 1 */
		function __construct($firstName, $lastName, $occupation){
			$this->firstName = $firstName;
			$this->lastName = $lastName;
			$this->occupation = $occupation;
		} /* end of Lesson 2: Example 1 */

		function Nameofperson(){
			return $this->firstName . "" . $this->lastName;
		}
	}
	/* Lesson 2: Example 2 */
	$detective1 = new Detective("Sherlock", "Holmes", "detective");
	print "Detective1: " . $detective1->Nameofperson();
	/* end of Lesson 2: Example 2 */

	

	//default name

	class  Doctor{
		public $firstName;
		public $lastName;
		public $occupation;
		public $address;

		/* Lesson 2: Example 1 */
		function __construct($firstName, $lastName, $occupation){
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
	/* end of lesson 2: Example 2 */
	print "<br>doctor1 :" . $doctor1->Nameofperson();
	/* end of Lesson 2: Example 2 */

	
	
	//default name

	class  Villan{
		public $firstName;
		public $lastName;
		public $occupation;
		public $address;
	
		/* Lesson 2: Example 1 */
		function __construct($firstName, $lastName, $occupation){
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
	print "<br>Villan1: " . $villan1->Nameofperson();
	/* end of Lesson 2: Example 2 */

	

	//default name

	

?>