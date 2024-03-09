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