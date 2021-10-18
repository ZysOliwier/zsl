<?php
if(!empty($_POST['name'])){
    require_once '../functions/function_1.php';
    echo validateString($_POST['name'], 10);
}