<?php 
	class Track {
		public $hurdling;
		public $jumping;
		public $running;
		public $throwing;

		function _construct($hurdling, $jumping, $running, $throwing){
			$this->hurdle=$hurdling;
			$this->jump=$jumping;
			$this->run=$running;
			$this->throw=$throwing;
		}

		function sport(){
			return "In track and field you can do many types of events such as " . $this->hurdle . "" . $this->jump . "" . $this->run . "" . $this->throw ;
		}
	}

	class Hurdler extends Track{
		function jump(){
		
			return $this->hurdle;
		}
	}

	class Jumper extends Track{
		function high(){
			return $this->jump;
		}
	}

	class Runner extends Track{
		function running(){
			return $this->run;
		}
	}

	$trackisawesome = new Track("Hurdles", "high", "hard", "hurt");
	print "track events" .  $trackisawesome->sport();
?>