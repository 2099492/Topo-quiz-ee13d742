<?php
// Japan, Tokyo
// Mexico, Mexico City
// USA, Washington D.C.
// India, New Delhi
// Zuid-Korea, Seoul
// China, Peking
// Nigeria, Abuja
// Argentina, Buenos Aires
// Egypt, Cairo
// UK, London

$data = array("Japan"=>"Tokyo", "Mexico"=>"Mexico City");
$tekst = 0;

foreach ($data as $key => $value) {
  echo $key . PHP_EOL;
  $input = readline();
  if ($input == $value) {
   echo "Correct!" . PHP_EOL;
   $tekst += 1;
  }else {
    echo "Incorrect!" . PHP_EOL;
  }
}
echo $tekst;
echo " goed van de 2";

 ?>
