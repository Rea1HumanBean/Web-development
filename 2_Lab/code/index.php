<?php
//Task - 1

/* Imagine a lot of code here */
$very_bad_unclear_name = "15 chicken wings";

// Write your code here:

$order =& $very_bad_unclear_name;
$order .= ' & Ice Cube';

// Don't change the line below
echo "\nYour order is: $very_bad_unclear_name."; // В данном случае будет выведена строка "15 chicken wings & Ice Cube" ,т.к. переменные указывают на одну и ту же область в памяти

