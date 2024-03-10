<?php
echo ("\nTask - 5 ____________\n");

$my_num = PHP_INT_MAX;
$answer = $my_num;
var_dump($answer); // Первоначально тип у переменной int
$answer += 2;      // При переполнении превращается в float
var_dump($answer);
$answer *= 2;
$answer -= 2;
$answer /= 2;
$answer -= $my_num; //Значение должно быть равно 1, однако из-за точности представления чисел с плавающей точкой значение будет равно нулю)0)
echo $answer."\n";