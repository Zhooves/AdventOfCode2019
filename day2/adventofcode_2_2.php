<?php
//get array from file
$inputString = file("input.txt");
$inputArray = array_map('intval', explode(',', $inputString[0]));
$defaultArray = $inputArray;

$expectedOutput = 19690720; //the final output we're after for part 2

//iterates through the array with the set rules of the task, replacing index 1 and 2 with noun and verb
function iterateThrough($array, $noun, $verb) {
	$array[1] = $noun;
	$array[2] = $verb;
	
	for ($i = 0; $i < count($array); $i += 4) {
		//check if first number is 1, 2, 99, or an error -> End if 99
		switch ($array[$i]) {
			case 1: //addition
				$array[$array[$i+3]] = $array[$array[$i+1]] + $array[$array[$i+2]];
				break;
			case 2: //multiplication
				$array[$array[$i+3]] = $array[$array[$i+1]] * $array[$array[$i+2]];
				break;
			case 99: //end loop
				$i = count($array);
				break;
			default: //print error if something's off
				echo "Error at index " . $i . ".<br />";
				break;
		}
	}
	return $array[0];  //final output located at index 0
}

//runs iterateThrough() with every noun and verb combo from 0 to 99 until the end output is what we expeted (if not, it will kill the script)
function findCombo($array, $endOutput) {
	for ($n = 0; $n < 100; $n++) {
		for ($v = 0; $v < 100; $v++) {
			if (iterateThrough($array, $n, $v) == $endOutput) {
				return array($n, $v);
			}
		}
	}
	die("Could not find a combination that lines up with the expected output.");
}

$result = findCombo($inputArray, $expectedOutput);
$resultCode = ($result[0]*100)+$result[1];
echo "Noun: " . $result[0] . ", Verb: " . $result[1] . ", code: " . $resultCode . "<br />";

?>









