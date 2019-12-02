<?php
//get array from file
$inputString = file("input.txt");
$inputArray = array_map('intval', explode(',', $inputString[0]));

for ($i = 0; $i < count($inputArray); $i += 4) {
	//check if first number is 1, 2, 99, or an error -> End if 99
	echo $inputArray[$i] . " - ";
	switch ($inputArray[$i]) {
		case 1:
			echo "This step is addition.<br />";
			$inputArray[$inputArray[$i+3]] = $inputArray[$inputArray[$i+1]] + $inputArray[$inputArray[$i+2]];
			break;
		case 2:
			echo "This step is multiplication.<br />";
			$inputArray[$inputArray[$i+3]] = $inputArray[$inputArray[$i+1]] * $inputArray[$inputArray[$i+2]];
			break;
		case 99:
			echo "This step is the end.<br />";
			echo "Final index 0: " . $inputArray[0] ."<br />";
			$i = count($inputArray);
			break;
		default:
			echo "Error at index " . $i . ".<br />";
			break;
	}
	//check the next two entries (i+1, i+2), for which entries to use as input
	//check next entry (i+3) for which index to replace (then reassign new value to said entry)
	//redo loop, but skip ahead 4 spots from i (i+=4)
	
}

/* foreach ($inputArray as $n)  {
	echo $n . ", <br />";
} */

?>