<?php

    $input = [234208,765869];
    $output = 0;
    echo "Start: " . $input[0] . ", end: " . $input[1] . "<br /><br />";
    $test = $input[0];
    echo strval($test)[1] . "<br />";

    for ($i = $input[0]; $i <= $input[1]; $i++) {
        $isValid = false;
        for ($n = 0; $n < 5; $n++) {
            if (strval($i)[$n] > strval($i)[$n + 1]) {
                $isValid = false;
                break;
            }
            else if (strval($i)[$n] == strval($i)[$n + 1]) {
                for ($p = 0; $p < 5 - $n; $p++) { //<-- stuck about here
                    return;
                }
            }
        }
        if ($isValid) {
            $output++;
        }
    }

    echo "Output: " . $output . ".<br/>";

?>