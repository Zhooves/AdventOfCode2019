<?php
	echo "Advent of Code day 1, task 1<br />\n";
	
	//file input, declaring output variable
	$input = file("input.txt");
	$output = 0;
	
	//calculates fuel for intividual entries
	function calcFuel($i) {
		return floor((float)$i/3) - 2;
	}
	
	//grab each line as individual array entries
	//calculate total output for each entry
	foreach ($input as $number) {
		$output += calcFuel($number);
	}
	
	echo "Final output: " . $output . "<br />\n";
?>