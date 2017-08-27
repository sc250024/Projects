<?php

    $grid_size = $argv[1];
    $battleship_size = 3;
    $debug = false;

    if ($grid_size < $battleship_size) {
        exit(1);
    }

    function place_battleship() {

        global $battleship_size, $debug, $grid_size;

        // Let's assume 0 is horizontal, 1 is vertical
        $horizontal_or_vertical = rand(0,1);
        $coordinate_array = array();

        if ($debug) {
            echo 'The battleship is being placed ',($horizontal_or_vertical == 0 ? 'horizontally' : 'vertically');
            echo "\n";
        }

        // Choose a random starting X and Y position
        $start_x = rand(0,$grid_size - 1);
        $start_y = rand(0,$grid_size - 1);

        if ($debug) {
            echo "Initially chosen x-coordinate: " . $start_x . "\n";
            echo "Initially chosen y-coordinate: " . $start_y . "\n";
        }

        if ($horizontal_or_vertical == 0) {

            // Horizontal logic
            // The default case is to treat the chosen point as the left most
            // point but verification is needed to see that the surrounding points
            // don't jutt up against the edges based on the size of the ship

            while (($start_x + $battleship_size) > $grid_size) {
                --$start_x;
            }

            for ($i = 0; $i < $battleship_size; $i++) {
                $coordinate_array[$i]['x'] = $start_x + $i;
                $coordinate_array[$i]['y'] = $start_y;
            }

        }
        elseif ($horizontal_or_vertical == 1) {

            // Vertical logic
            // The default case is to treat the chosen point as the bottom most
            // point but verification is needed to see that the surrounding points
            // don't jutt up against the edges based on the size of the ship

            while (($start_y + $battleship_size) > $grid_size) {
                --$start_y;
            }

            for ($i = 0; $i < $battleship_size; $i++) { 
                $coordinate_array[$i]['x'] = $start_x;
                $coordinate_array[$i]['y'] = $start_y + $i;
            }

        }

        if ($debug) {
            echo "Final x-coordinate: " . $start_x . "\n";
            echo "Final y-coordinate: " . $start_y . "\n";
        }

        return $coordinate_array;

    }

    function is_hit($x, $y, $coordinate_array) {

        global $debug;

        for ($i = 0; $i < sizeof($coordinate_array); $i++) {
            if ($coordinate_array[$i]['x'] == $x && $coordinate_array[$i]['y'] == $y) { return true; break; }
        }
        return false;

    }

    function battleship_map($coordinate_array) {

        global $battleship_size, $debug, $grid_size;

        for ($y_place = ($grid_size - 1); $y_place >= 0; $y_place--) { 

            $output = "";

            for ($x_place = 0; $x_place < $grid_size; $x_place++) {

                if (is_hit($x_place, $y_place, $coordinate_array)) {
                    $output .= "X ";
                }
                else {
                    $output .= ". ";
                }

                if ($x_place == ($grid_size - 1)) {
                    $output = "$y_place " . $output;
                    $output .= "\n";
                }

            }

            echo $output;

        }

        $output = "  ";

        for ($i = 0; $i < $grid_size; $i++) { 
            $output .= "$i ";
        }

        echo "$output\n";

    }






    $coordinate_array = place_battleship();

    if ($debug) {
        var_dump($coordinate_array);
    }

    for ($x = 0; $x < $grid_size; $x++) { 
        for ($y = 0; $y < $grid_size; $y++) { 
            if (is_hit($x, $y, $coordinate_array)) {
                if ($debug) {
                    echo "Hit found at ($x,$y)\n";
                }
                // First case: Either...
                // a.) The y-coordinate found to be a hit is too big given
                // the size of the grid to possibly fit a ship with size $battleship_size,
                // and therefore, the ship must be laying horizontally
                //
                // OR
                // 
                // b.) We do a simple check to see if the next x-coordinate over
                // is a hit, and therefore, must be laying horizontally
                if ($y > ($grid_size - $battleship_size) || is_hit(($x + 1), $y, $coordinate_array)) {
                    for ($shipi = 0; $shipi < $battleship_size; $shipi++) { 
                        echo "(" . ($x + $shipi) . "," . $y . ")\n";
                    }
                }
                // Second case: Ship must be laying vertically since the first
                // two tests failed
                else {
                    for ($shipi = 0; $shipi < $battleship_size; $shipi++) { 
                        echo "(" . $x . "," . ($y + $shipi) . ")\n";
                    }
                }
                battleship_map($coordinate_array);
                break 2;
            }
        }
    }
