<?php

    $n = $argv[1];
    $debug = 1;

    $prime_factors = "";

    // Find the number of 2's that go into this number
    // Keep going until the number is odd
    if ($debug == 1) {
        echo "Checking prime factors for $n...\n";
        echo "=> Checking for multiples of 2 in $n...\n";
        $count = 0;
    }

    while ($n % 2 == 0) {
        if ($debug == 1) {
            echo "==> 2 found in $n!\n";
            $count++;
        }
        $prime_factors .= "2 ";
        $n = $n / 2;
    }

    if ($debug == 1) {
        echo "=> N is $n after 2 reduction...\n";
    }

    // Number is odd at this point
    for ($i = 3; $i <= sqrt($n); $i += 2) {

        if ($debug == 1) {
            echo "=> Checking for multiples of $i in $n...\n";
            $count++;
        }

        while ($n % $i == 0) {
            if ($debug == 1) {
                echo "==> $i found in $n!\n";
                $count++;
            }
            $prime_factors .= "$i ";
            $n = $n / $i;
        }
    }

    if($n > 2) {
        if ($debug == 1) {
            echo "=> $n is the last remainder, and should be prime...\n";
        }
        $prime_factors .= "$n";
    }

    echo $prime_factors . "\n";

    if ($debug == 1) {
        echo "$count total steps performed!\n";
    }
