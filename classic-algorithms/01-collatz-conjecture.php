<?php

    $n = $argv[1];
    $i = 0;
    $sequence = "$n ";

    if ($n <= 1) {
        exit(1);
    }

    while ($n !== 1) {
        if ($n % 2 == 0) {
            // printf("$n is even; diving by 2..." . "\n");
            $n = $n / 2;
            $sequence .= "$n ";
        }
        else {
            // printf("$n is odd; multiplying by 3, and adding 1..." . "\n");
            $n = ($n * 3) + 1;
            $sequence .= "$n ";
        }
        $i++;
    }

    printf("It took " . $i . " step(s) to reach 1." . "\n");
    printf("The sequence was: " . $sequence . "\n");
