<?php
require_once '../../core/Menu.core';
function print_a(...$value){
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
}
function debug(...$value){
    die(print_a($value));
}

function root($link) : string{
    return '';
}
debug(Menu::setMenu('0:F:A:E0'));