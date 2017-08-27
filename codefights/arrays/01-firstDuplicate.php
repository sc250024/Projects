<?php

    $a = [2, 3, 4, 5, 3, 4, 6, 7, 8, 1, 2, 3, 4];

    foreach (array_count_values($a) as $value => $c) {
        if ($c > 1) {
            $test = array_keys($a, $value);
            if ($test[1] < $lower || !isset($lower)) {
                $lower = $test[1];
                $output = $value;
            }
        }
    }

    if (!isset($output)) {
        // return -1;
        printf("-1\n");
    }
    else {
        // return $output;
        printf("$output\n");
    }
