<?php
//Работа с комбинацией функций
$arr= [1,10,5,9,4,9,5,10];

$result = array_sum($arr)/ count($arr);
echo "Среднее арифметическое: ".$result."\n";

$result = (1 + 100) * 100 /2;
echo  $result."\n";

$arr = [1, 4, 9, 16, 25, 36, 49, 64, 81, 100];
$arrSqrt = array_map('sqrt', $arr);
print_r($arrSqrt);
echo "\n";

$values = range(1, 26);
$keys = range('a', 'z');
$array = array_combine($keys, $values);
print_r($array);
echo "\n";

$string = '1234567890';
$numbers = str_split($string, 2);
$sum = array_sum($numbers);
echo $sum;