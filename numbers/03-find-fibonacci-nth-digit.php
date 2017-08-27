<?php

    $digits = $argv[1];

    if (!$digits) {
        echo "You must input the nth digits of the Fibonacci sequence you would like to output!";
        exit(1);
    }

    function nth_fibonacci($n) {

        $first_seed = 0;
        $second_seed = 1;

        if ($n == 0) {
            return $first_seed;
        } elseif ($n == 1) {
            return $second_seed;
        } else {
            return nth_fibonacci($n - 1) + nth_fibonacci($n - 2);
        }
    }

    for ($i = 0; $i <= $digits; $i++) { 
        echo nth_fibonacci($i) . "\n";
    }
