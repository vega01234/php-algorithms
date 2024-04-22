<?php

    function rotate ($nums, $k) {

        $len = count($nums);
        $array = array_fill(0, $len, 0);

        for ($i = 0; $i < $len; $i++) {
            $pos = ($i + $k) % $len;
            $array[$pos] = $nums[$i];
        }

        $nums = $array;
        print_r($nums);

    }

    $nums = [1, 2, 3, 4, 5, 6, 7];
    $k = 3;

    rotate($nums, $k);