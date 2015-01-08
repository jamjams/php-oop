<!-- Lesson 3: Example 1 -->
<?php
	$bakerstreet = true;
	$sherlocked = 221;

	// Since $backerstreet is a boolean, it will return true
	if (is_bool($bakerstreet) === true) {
	    echo "Bakerstreet is a boolean!";
	}

	// Since $sherlocked is not a boolean, it will return false
	if (is_bool($sherlocked) === false) {
	    echo " Sherlocked is not a boolean!";
	}

// end of Lesson 3: Example 1 

// Lesson 3: Example 2 

	$yes = array('Come at', 'once if', 'convenient -SH');

	echo is_array($yes) ? '<br> <br> This is an array.' : 'This is not an array.';
	echo "\n";

	$no = 'Hello I am a string.';

	echo is_array($no) ? 'This is an array' : 'This is not an array';

//end of Lesson 3: Example 2
 // Lesson 3: Example 3 
	$values = array(10, "10", 10.5, "10.5", null, true, false);

	foreach ($values as $value) {
	    echo "<br> <br> is_int(";
	    var_export($value);
	    echo ") = ";
	    var_dump(is_int($value));
	}
// end of Lesson 3: Example 3 

?>

