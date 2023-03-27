<?php

do {
  $num = (int)readline("Введите положительное число: ") ;
  if($num <= 0 ){
  echo "Ошибка!! Введено не корректное число!!\n";
}
} while ($num <= 0);

$finger1 = "Большой"; 
$finger2 = "Указательный"; 
$finger3 = "Средний"; 
$finger4= "Безымянный"; 
$finger5 = "Мизинец";


echo "Палец номер {$num} - это ${"finger$num"}\n";
