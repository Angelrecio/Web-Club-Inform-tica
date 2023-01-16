<?php
    function capitalizeFirstLetter($string) {
        $string = ucfirst(strtolower($string));
        $string = preg_replace_callback('/[.!?]\s*(\w)/', function ($matches) {
            return strtoupper($matches[0]);
        }, $string);
        return $string;
    }
?>