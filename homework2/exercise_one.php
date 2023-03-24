<?php
$question = readline("В каком году произошло крещение руси? ");

while($question != 990 && $question != 810 && $question != 740){
  $question = readline("В каком году произошло крещение руси? ");
  break;
}

if($question == 810){
      echo "Ответ не верный!";
    }

  if($question == 740){
    echo "Ответ не верный!";
  }
    
  if($question == 990){
    echo "Молодец, ответ верный!";
}





