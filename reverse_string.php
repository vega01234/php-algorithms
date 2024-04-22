<?php

    function reverse_string ($word) {
        echo 'Reverse String: ' . strrev($word);
    }

    $word = 'Hello World!';
    echo 'Original String: ' . $word . '<br>';
    reverse_string($word);