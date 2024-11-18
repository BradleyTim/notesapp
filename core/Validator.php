<?php 

class Validator {
    public static function string($str, $min, $max) {
        return strlen(trim($str)) > $min && strlen(trim($str)) < $max;
    }

    public static function email($str) {
        return filter_var($str, FILTER_VALIDATE_EMAIL) !== false;
    }
}