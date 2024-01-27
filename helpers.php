<?php 
function hyphenToCamelCase($string) {
    $str = str_replace('-', ' ', $string);
    $str = ucwords($str);
    $str = str_replace(' ', '', $str);
    $str[0] = strtolower($str[0]);
    return $str;
}