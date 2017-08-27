<?php
    
    // $s = 'bcccccccccccccyb';
    $string_count_array = array_count_values(str_split($s));

    foreach ($string_count_array as $letter => $count) {
        if ($count == 1) {
            $non_duplicate_letter_array[] = $letter;
        }
    }

    if (!empty($non_duplicate_letter_array)) {
        foreach ($non_duplicate_letter_array as $letter) {
            $letter_pos = strpos($s, $letter);
            if ($letter_pos < $lower || !isset($lower)) {
                $lower = $letter_pos;
                $output = $letter;
            }
        }
        // printf("$output\n");
        return $output;
    }
    else {
        // printf("_\n");
        return "_";
    }
