<?php 

class Validator {
    public static function str($str) {
        return strlen(trim($str)) > 0;
    }
}