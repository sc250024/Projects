<?php

    $string = $argv[1];

    $reversed_array = array_reverse(str_split($string));

    foreach ($reversed_array as $letter) {
        $output .= "$letter";
    }

    printf($output);
