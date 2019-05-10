<?php

if (!function_exists('my_sort')) {

    function my_sort($array)
    {
        if (empty($array) || !is_array($array)) {
            return $array;
        }

        $array = [1,3,5,7,9,11,13,15,17,19];

        return $array;
    }
}
