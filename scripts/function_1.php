<?php
function text(){
    return "text";
}
function name($name){
    return $name;
}
//zamienie pierwszą litere na dużą, pozostałem małe, usunie białe znaki
function validateString($string, $length){
    return substr(ucfirst(strtolower(trim($string))), 0, $length);
}
?>