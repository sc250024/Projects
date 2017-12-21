<?php

    $flips = $argv[1];

    function coin_flips($n) {

        $heads = 0;
        $tails = 0;

        for ($i = 0; $i < $n; $i++) {

            // '0' is heads, '1' is tails
            $this_flip = rand(0,1);

            if ($this_flip == 0) {
                $heads++;
            }
            else {
                $tails++;
            }
        }

        echo "The number of heads was: " . $heads . " or " . (($heads / $n) * 100) . "% of total\n";
        echo "The number of tails was: " . $tails . " or " . (($tails / $n) * 100) . "% of total\n";

    }

    coin_flips($flips);
