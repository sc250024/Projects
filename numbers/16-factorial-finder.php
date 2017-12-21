<?php

    $factorial = $argv[1];

    // Using loops
    // function factorial($n) {
    //     if ($n == 0) {
    //         return 1;
    //     }
    //     else {
    //         $output = 1;
    //         for ($i = 1; $i <= $n ; $i++) { 
    //             $output = $output * $i;
    //         }
    //         return $output;
    //     }
    // }

    // Using recursion
    function factorial($n) {
        if ($n == 0) {
            return 1;
        }
        else {
            return $n * factorial($n - 1);
        }
    }

    echo $output = factorial($factorial) . "\n";
