<?php 

function url_is($value) {
    return parse_url($_SERVER['REQUEST_URI'])['path'] === $value;
}

function dd($value) {
    echo '<prev>';
    var_dump($value);
    echo '</prev>';
    die();
}