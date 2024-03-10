<?php
//Task - 1

/* Imagine a lot of code here */
$very_bad_unclear_name = "15 chicken wings";

// Write your code here:

$order =& $very_bad_unclear_name;
$order .= ' & Ice Cube';

// Don't change the line below
echo "\nYour order is: $very_bad_unclear_name."; // В данном случае будет выведена строка "15 chicken wings & Ice Cube" ,т.к. переменные указывают на одну и ту же область в памяти

//Task - 2
$week_day = 7;
echo "\n" . $week_day;
echo ("\n");
$half_week_day = 3.5;
echo ($half_week_day);
echo ("\n".(6 + 6));

$last_month = 1187.23;
$this_month = 1089.98;

echo ("\n"."Difference: ".($last_month - $this_month));

//Task - 3
$num_languages = 4;
$months = 11;
$days = $months * 16;

$days_per_language = $days / $num_languages;
echo "\n"."The average number of days of the study: ".($days_per_language);

//Task - 4
echo "\n".(8**2)."\n";

//Task - 5
$my_num = PHP_INT_MAX;
$answer = $my_num;
var_dump($answer); // Первоначально тип у переменной int
$answer += 2;      // При переполнении она превращается в float
$answer *= 2;
$answer -= 2;
$answer /= 2;
$answer -= $my_num; //Значение должно быть равно 1, однако из-за точности представления чисел с плавающей точкой значение будет равно нулю)0)
echo $answer."\n";
var_dump($answer);
