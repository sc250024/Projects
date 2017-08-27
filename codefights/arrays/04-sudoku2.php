<?php

    // good grid
    $grid = [['.', '.', '.', '1', '4', '.', '.', '2', '.'],
        ['.', '.', '6', '.', '.', '.', '.', '.', '.'],
        ['.', '.', '.', '.', '.', '.', '.', '.', '.'],
        ['.', '.', '1', '.', '.', '.', '.', '.', '.'],
        ['.', '6', '7', '.', '.', '.', '.', '.', '9'],
        ['.', '.', '.', '.', '.', '.', '8', '1', '.'],
        ['.', '3', '.', '.', '.', '.', '.', '.', '6'],
        ['.', '.', '.', '.', '.', '7', '.', '.', '.'],
        ['.', '.', '.', '5', '.', '.', '.', '7', '.']];

    // bad grid
    // $grid = [['.', '.', '.', '.', '2', '.', '.', '9', '.'],
    //         ['.', '.', '.', '.', '6', '.', '.', '.', '.'],
    //         ['7', '1', '.', '.', '7', '5', '.', '.', '.'],
    //         ['.', '7', '.', '.', '.', '.', '.', '.', '.'],
    //         ['.', '.', '.', '.', '8', '3', '.', '.', '.'],
    //         ['.', '.', '8', '.', '.', '7', '.', '6', '.'],
    //         ['.', '.', '.', '.', '.', '2', '.', '.', '.'],
    //         ['.', '1', '.', '2', '.', '.', '.', '.', '.'],
    //         ['.', '2', '.', '.', '3', '.', '.', '.', '.']];

    print_r($grid);

    // Check horizontal
    foreach ($grid as $index) {
        $test = array_count_values($index);
        unset($test['.']);
        foreach ($test as $number => $count) {
            if ($count > 1) {
                printf("false\n");
                return false;
            }
        }
    }

    // Check vertical
    for ($i = 0; $i < 9; $i++) {
        $test = array();
        for ($j = 0; $j < 9; $j++) {
            $test[] = $grid[$j][$i];
        }
        $test = array_count_values($test);
        unset($test['.']);
        foreach ($test as $number => $count) {
            if ($count > 1) {
                printf("false\n");
                return false;
            }
        }
    }

    // Check 3x3 grids
    for ($i = 0; $i < 9; $i++) { 
        for ($j = 0; $j < 9; $j++) {
            $test[] = $grid[]
            // run a check on the grid
            if (($i + 1) % 3 == 0 && ($j + 1) % 3 == 0) {
                
            }
        }
    }

    // $horizontal = array_count_values($grid[$i]);
    
    // print_r($horizontal);

    printf("true\n");
    return true;

    // print_r($grid);

