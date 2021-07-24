<?php
namespace App;

function reverse(string $string) {
    return implode(array_reverse(str_split($string)));
}
