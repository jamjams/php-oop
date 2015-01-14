<?php 
	class Track {
		public $hurdling;
		public $jumping;
		public $running;
		public $throwing;
		//public $fun;
		//public $tough;
		//public $fast;

		function __construct($hurdling, $jumping, $running, $throwing){
			$this->hurdle=$hurdling;
			$this->jump=$jumping;
			$this->run=$running;
			$this->throw=$throwing;
			//$this->fun=$fun;
			//$this->tough=$tough;
			//$this->fast=$fast;
		}

		function getSport(){
			return "In track and field you can do many types of events such as " . $this->hurdle . " and" . $this->jump . " and" . $this->run . " .";
		}
	}

	class Hurdler extends Track{
		function __construct($hurdling, $jumping, $running, $throwing, $fun){
			parent::_construct($hurdling, $jumping, $running, $throwing);
			$this->fun=$fun;
		}
		function intro(){
			return $this->fun;
		}
	}

	class Jumper extends Track{
		function __construct($hurdling, $jumping, $running, $throwing, $tough){
			parent::_construct($hurdling, $jumping, $running, $throwing);
			$this->tough=$tough;
		}

		function high(){
			return $this->tough;
		}
	}

	class Runner extends Track{
		function __construct($hurdling, $jumping, $running, $throwing, $fast){
			parent::_construct($hurdling, $jumping, $running, $throwing);
			$this->fast=$fast;
		}

		function quick(){
			return $this->fast;
		}
	}

	$track = new Track("Hurdles ", " high ", " hard ", " hurt ");
	print "Track events: " .  $track->getSport();
?>