<?php 

function url_is() {
    return parse_url($_SERVER['REQUEST_URI'])['path'];
}

function dd($value) {
    var_dump($value);
    die();
}