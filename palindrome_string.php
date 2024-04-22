<?php

    function reverse_string ($word) {
        
        $word = strtolower($word);

        $reversed_word = strrev($word);

        if ($word == $reversed_word) {
            echo 'IS PALINDROME';
        } else {
            echo 'NOT PALINDROME';
        }

    }

    $word = 'Oso';
    reverse_string($word);
