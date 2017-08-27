<?php

    $maxdigits = 100;

    ini_set('precision', $maxdigits);

    $digits = $argv[1];

    if (!$digits || $digits == 0) {
        echo "You must input the nth digits of e you would like to output!";
        exit(1);
    } elseif($digits > $maxdigits) {
        echo "The limit is ".$maxdigits."digits!";
        exit(1);
    }

    echo "2." . substr(exp(1),2,(int)$digits);
