<?php
    echo 'ZSL<br>';
    echo 'ZSL<hr>';

    $name='Janusz';
    echo 'Imię: $name<br>'; //Imię: name
    echo 'Imię: $name<br>'; //Imię: Janusz

//konkatenacja
    echo "Janusz"."Kowalski<br>";
//typ danych
//całkowity
    $calkowita=10;
    $bin=101; //5
    $oct=011; //9
    $hex=0x11; //17
    echo $hex;

// zmiennoprzecinkowy
    $x=10.5;

//logiczny
    $prawda=true;
    $fałsz=false; //w nazwach zmiennych nie należy używać polskich znaków
    echo $prawda; //1
    echo $fałsz; //nic nie wyświetli

// składnia heredoc
    $text= <<< E
    <hr>Twoje imię: $name<br>
    Poznań<br>
    ZSŁ<br>
E;
    echo $text;

// składnia nowdoc
    $text = <<< E
    <hr>Twoje imię: $name<br>
    Poznań<br>
    ZSŁ<br>
E;

    $surname="Nowak";
    echo "\$name $surname"; //$name Nowak

?>
