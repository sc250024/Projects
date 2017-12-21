<?php

// good solution
$crypt = ["SEND", "MORE", "MONEY"];
$solution = [
        ['O', '0'],
        ['M', '1'],
        ['Y', '2'],
        ['E', '5'],
        ['N', '6'],
        ['D', '7'],
        ['R', '8'],
        ['S', '9']
    ];

// good solution
$crypt = ["A", "A", "A"];
$solution = [
        ['A', '0']
    ];

// bad solution
// $crypt = ["TEN", "TWO", "ONE"];
// $solution = [
//         ['O', '1'],
//         ['T', '0'],
//         ['W', '9'],
//         ['E', '5'],
//         ['N', '4']
//     ];

function isCryptSolution($crypt, $solution) {

    $wordIntegerArray = array();

    // Create array of numbers from $crypt and $solution arrays
    for ($i = 0; $i < sizeof($crypt); $i++) { 
        $letterArray = str_split($crypt[$i]);
        $numericValue = "";
        foreach ($letterArray as $letter) {
            $letterValueIndex = array_search($letter, array_column($solution, 0));
            $numericValue .= $solution[$letterValueIndex][1];
        }
        $wordIntegerArray[$i] = $numericValue;
    }

    // Check if any numbers begin with '0'
    foreach ($wordIntegerArray as $number) {
        if ($number !== "0" && strpos($number, "0") === 0) {
            printf("The number " . $number . " begins with 0.");
            return false;
        }
    }

    // Check if the addition checks out; return false if it does not
    if ((int)$wordIntegerArray[0] + (int)$wordIntegerArray[1] !== (int)$wordIntegerArray[2]) {
        printf("The addition of the numbers in the \$crypt array did not work.");
        return false;
    }
    else {
        printf("Legitimate cryptarithm :)\n");
        return true;
    }

}

isCryptSolution($crypt, $solution);
