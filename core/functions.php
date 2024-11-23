<?php 

function url_is($value) {
    return parse_url($_SERVER['REQUEST_URI'])['path'] === $value;
}

function url() {
    return parse_url($_SERVER['REQUEST_URI'])['path'];
}

function dd($value) {
    echo '<prev>';
    var_dump($value);
    echo '</prev>';
    die();
}

function base_dir($value) {
    return __DIR__ . '/../' . $value;
}

function view($value, $attributes=[]) {
    extract($attributes);
    require base_dir("views/{$value}");
}