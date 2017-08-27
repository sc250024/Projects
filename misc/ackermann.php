<?php

function ackermann($m,$n) {
    if ($m == 0) {
        return $n + 1;
    }
    elseif ($m > 0 && $n == 0) {
        return ackermann($m - 1,1);
    }
    return ackermann($m - 1,ackermann($m,$n - 1));
}

for ($m = 0; $m < 6; $m++) { 
    for ($n = 0; $n < 6; $n++) { 
        echo "The value of ackerman($m,$n) is: " . ackermann($m,$n) . "\n";
    }
}

