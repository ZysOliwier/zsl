<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Dane z formularza</h3>
    <?php
    require_once 'function.php';
    show();
    echo "<hr>";
    if(!empty($_POST['name']) && !empty($_POST['color'])){
        echo "Imię bez poprawy: " . $_POST['name'] . ", długość: " . strlen($_POST['name']) ."<br>";
        echo "Narodowość bez poprawy: " . $_POST['nationality'] . ", długość: " . strlen($_POST['nationality']) . "<br>";
        $color = $_POST['color'];
        echo "<div style=\"color: $color\">";
        echo "Imię po poprawie: " . validateName($_POST['name'], 4, $_POST['color']) . ", długość: " . strlen(validateName($_POST['name'], 4,
        $_POST['color'])) . "<br>";
        echo "Narodowość po poprawie: " . validateNationality($_POST['nationality'], $_POST['color']) . ", długość: " . strlen(validateNationality($_POST['nationality'], $_POST['color'])) . "</div>";
    }
    ?>
    
</body>
</html>