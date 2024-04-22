<?php

    function merge ($nums1, $nums2) {

        for ($i = 0; $i < count($nums1); $i++){
            array_pop($nums1);
        }

        $nums1 = array_merge($nums1, $nums2);
        asort($nums1);

        print_r($nums1);

    }

    $nums1 = [1, 2, 3, 0, 0, 0];
    $nums2 = [2, 5, 6];

    merge($nums1, $nums2);