<?php
$text = <<< T
zsl - Zespół
Szkoł
Łączności
T;

echo "$text<br>";
echo nl2br($text),'<hr>'; //dodaje do każdej lini <br>
$name="JaNuSz";
echo strtolower($name),"<br>"; //zmiana liter na małe
echo strtoupper($name),"<br>"; //zmiana liter na duże

$data="januSZ koWaLsKi";

echo ucfirst($data); //zmiaa pierwszej litery na dużą 
echo ucwords($data); //zmiana wszystkich pierwszych liter na duże

$lorem="Lorem ipsum dolor sit amet consectetur adipisicing elit.
 Blanditiis repudiandae quas ipsa, laudantium necessitatibus rerum
  eum ea molestiae ipsam delectus quo quibusdam, labore optio cupiditate 
  praesentium iure minus quia recusandae.";

  echo "<hr>$lorem<hr>";
  //$col=wordwrap($lorem, 30, "text");
  $col=wordwrap($lorem, 30, "<br>");
  //$col=wordwrap($lorem, 30, "hr");
  echo $col;
  ob_clean(); //czyszczenie zawartości bufora
  
    //usuwanie białych znaków SPACE, TAB itp.
  $name="Janusz";
  $name1=" Janusz  ";
  echo "Długość \$name: ".strlen($name)."<br>"; //6
  echo "Długość \$name1: ".strlen($name1)."<br>"; //9

  echo "Długość \$name1: ".strlen(ltrim($name1))."<br>"; //8
  echo "Długość \$name1: ".strlen(rtrim($name1))."<br>"; //7
  echo "Długość \$name1: ".strlen(trim($name1))."<br>"; //6

  //Przeszukiwanie ciągów znaków
  echo strstr("Janusz@gmail.com","@"); //@gmail.com
  echo strstr("Janusz@gmail.com","G"); //
  echo stristr("Janusz@gmail.com","G"); //@gmail.com
    //substr
    $name="Jnausz";
    echo substr($name, 2); //nusz
    echo substr($name, 2,3); //nus
    echo substr($name, -2); //sz
    echo substr($name, -2,1); //s
    echo substr(strstr("Janusz@gmail.com","@"),1); //@gmail.com
?>