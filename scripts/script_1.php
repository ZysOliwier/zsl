<?php
if(!empty($_POST['name'])){
    require_once '../functions/function_1.php';
    echo name('Krystyna').'<hr>';
    echo 'Imię: '.name($_POST['name']).'<hr>';
    echo validateString($_POST['name'], 10);
}
?>