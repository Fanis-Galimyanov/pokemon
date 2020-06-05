<?php
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

$Str ="
===================================================================================================\n
                                $name                                                              \n
  Тип     Вид      Рост      Вес             Из кого эволюционировал   В кого эволюционирует       \n
$type  $view   $height   $weight                   $evolution_from             $evolution_in       \n
===================================================================================================\n
";

$file = fopen("pokemon.txt", "a+t");
if ($file){
    fwrite($file, $Str);
    fclose($file);
}

echo file_get_contents("pokemon.txt");

?>
