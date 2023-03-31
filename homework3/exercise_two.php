<?php

$name = readline('Как ваше имя? ');

$wishes = [
'Счастья',
'Здоровья',
'Добра',
'Воображения',
'Настроения'
];

$epithets = [
'Крепкого',
'Долгого',
'Бесконечного',
'Космического',
'Безудержного'
];

$congratulations = [];
for($i = 1; $i <= 3; $i++){
$randWishes = array_rand($wishes);
$randEpithets = array_rand($epithets);
while($randWishes == $randEpithets){
  $randWishes = array_rand($wishes);
};
$array = [];
$wishesIndex = $wishes[$randWishes];
$epithetsIndex = $epithets[$randEpithets];
$array[] = $wishesIndex;
$array[] = $epithetsIndex;
$congratulations[] = implode(' ', $array);
};

$stringCongratulations = implode(', ', $congratulations);
$stringCongratulations = substr_replace($stringCongratulations, " и", strripos($stringCongratulations, ", "), 1);
echo "Дорогой {$name}, от всего сердца поздравляю тебя с Днём Рождения, желаю {$stringCongratulations}!\n";
