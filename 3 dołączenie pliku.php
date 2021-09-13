<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Poczatek Strony</h3>
    <?php
    include './3_1.php';
    include_once './3_1.php'; //wyswietli tylko raz
    //include './3_111.php'; wyświetli ostrzeżenie ale wykona kod
    require './3_1.php';
    require_once './3_1.php';
    ?>
    <h3>koniec Strony</h3>
</body>
</html>