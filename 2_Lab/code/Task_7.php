<?php
echo ("\nTask - 7 ____________\n");
//Работа с функциями

function printStringReturnNumber(string $str): int{
	$sum = 0;
	for ($i = 0; $i < strlen($str); $i++) {
		$elem = $str[$i];
		$sum += ord($elem);
	}
	return $sum;
};

$my_num = printStringReturnNumber("Ouch");
echo $my_num."\n";

function increaseEnthusiasm(string $str): string{
	return ($str.'!');
}
echo increaseEnthusiasm("Ouch")."\n";

function repeatThreeTimes(string $str):string{
	return (str_repeat($str,3));
};

$str = repeatThreeTimes("Ouch!");
echo $str."\n";

echo (increaseEnthusiasm(repeatThreeTimes(increaseEnthusiasm("Hello"))))."\n";

function cat(string $str, int $cutLength = 10): string{
	if ($cutLength < 0) {
		return '';
	}
	if ($cutLength > strlen($str)){
		return $str;
	}

	return substr($str, 0, $cutLength);
}

$str = cat($str, 5);
echo $str."\n";

function printArrayRecursively(array $array,int $index = 0): void {
	if ($index >= count($array)) {
		return;
	}
	echo $array[$index] . " ";

	printArrayRecursively($array, $index + 1);
}
echo("Рекурсивный вывод массива: ");
printArrayRecursively([1,2,3,4,5,6,7,8]);

echo "\n";

function sumDigits($number) {
	while ($number > 9) {
		$sum = 0;
		while ($number != 0) {
			$sum += $number % 10;
			$number = (int)($number / 10);
		}
		$number = $sum;
	}
	return $number;
}

$number = 99;
$result = sumDigits($number);
echo "Сумма числа $number: $result\n";

