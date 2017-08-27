<?php

    $a = [[1, 2, 3], [4, 5, 6], [7, 8, 9]];
    // $a_result = [[7, 4, 1], [8, 5, 2], [9, 6, 3]];
    $a_size = sizeof($a);

    for ($i = 0; $i < $a_size; $i++) {
        for ($j = 0; $j < $a_size; $j++) { 
            $output[$j][$i] = $a[($a_size - 1) - $i][$j];
        }
    }

    return $output;
    // print_r($output);
