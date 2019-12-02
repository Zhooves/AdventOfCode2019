<?php
	echo "Advent of Code day 1, task 1<br />\n";
	
	//file input, declaring output variable
	$input = file("input.txt");
	$output = 0;
	
	//calculates fuel for intividual entries
	function calcFuel(&$o,$i) {
		$r = floor((int)$i/3) - 2;
		if ($r <= 0)     //if 0, stop recursion
			return;
			
		$o += $r;        //increment output by new fuel value
		
		calcFuel($o,$r); //repeat process for the new fuel amount
	}
	
	//grab each line as individual array entries
	//calculate total output for each entry
	foreach ($input as $number) {
		calcFuel($output,$number);
	}
	
	echo "Final output: " . $output . "<br />\n";
?>