<?php
echo "Для просмотра списка Покемонов наберите - view all,
для вывода конкретного покемона введите его имя, для введения нового покемона
наберите - new: ";
$order = readline();

switch ($order) {
  case 'new':
      echo "Введите имя покемона: ";
        $name = readline();
      echo "Введите тип покемона: ";
        $type = readline();
      echo "Введите вид покемона: ";
        $view = readline();
      echo "Введите рост покемона: ";
        $height = readline();
      echo "Введите вес покемона: ";
        $weight = readline();
      echo "Из кого эволюционировал: ";
        $evolution_from = readline();
      echo "В кого эволюционирует: ";
        $evolution_in = readline();

$Str ="                             id$name
===================================================================================================\n
                                                  $name                                            \n
  Тип     Вид      Рост      Вес             Из кого эволюционировал   В кого эволюционирует       \n
$type  $view   $height   $weight                   $evolution_from             $evolution_in       \n
===================================================================================================\n
";

    $file = fopen("pokemon.txt", "a+t");
    if ($file){
        fwrite($file, $Str);
        fclose($file);
    }
break;

case 'view all':
  echo file_get_contents("pokemon.txt");
break;

default:
$char2="";
$char3="";
$n=0;
$flag = FALSE;
$file = fopen("pokemon.txt", "r+t");

if ($file){
  while (!feof($file)) {
   $char = fread($file, 1);
   if($char!=" ") {$char2=$char2.$char;}
   if($char2=="id".$order) {$flag = TRUE;}
   if(($flag == TRUE) and ($n < 581)) {$char3=$char3.$char; $n++;}
   if($n > 580){echo $char3; $n=0; $flag = FALSE;}
   if($char==" ") {$char2="";}
  }
  fclose($file);
}
}
?>
