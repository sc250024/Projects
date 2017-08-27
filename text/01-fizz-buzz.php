<?php

    // Go up to this number
    $n = $argv[1];

    $fizz = 7;
    $buzz = 11;

    for ($i = 1; $i <= $n; $i++) {
        $output = "";
        if ($i % $fizz == 0) { $output .= "Fizz"; }
        if ($i % $buzz == 0) { $output .= "Buzz"; }
        if ($output == "" || empty($output)) { $output = $i . "\n"; }
        else { $output .= "\n"; }
        printf($output);
    }
