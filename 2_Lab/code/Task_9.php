<?php
echo ("\nTask - 9 ____________\n");
//Работа с условными операторами
function checkBiggestThanTen(int $a,int $b){
	$result = ($a + $b > 10) ? true : false;
	return $result;
}
$a = 10;
$b = 5;

$result = checkBiggestThanTen($a, $b);
echo "Результат проверки: ".(($result) ? 'true' : 'false')."\n";

function checkEqual(int $a, int $b): bool{
	if($a === $b) {
		return true;
	}
	return false;
}

echo "Результат проверки: ".(checkEqual($a, $b) ? 'true' : 'false')."\n";

$test = 0;
echo ($test == 0) ? 'Верно' : '';

$age = 23;
if ($age < 10 || $age > 99) {
	echo "Число вне диапазона.\n";
} else {
	$sum = array_sum(str_split($age));
	if ($sum <= 9) {
		echo "Сумма цифр однозначна.\n";
	} else {
		echo "Сумма цифр двузначна.\n";
	}
}

$arr = [5, 2, 6];
if (count($arr) == 3) {
	echo array_sum($arr)."\n";
}