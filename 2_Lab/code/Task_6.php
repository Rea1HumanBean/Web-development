<?php
echo ("\nTask - 6 ____________\n");

function isDivide(int $a,int $b){
	$result = $a % $b;
	if($result == 0)
		echo ("Делится"."\n");
	else
		echo ('Делится с остатком: '. $result."\n");
}

//Работа с %
$a = 10;
$b = 3;
echo ("Remains of 3 from 10: ".($a % $b))."\n";

isDivide(11,4);

//	Работа со степенью и корнем
$st = pow(2,10);
$st = sqrt(245);

$arr_num = [4, 2, 5, 19, 13, 0, 10];
$result = 0;

foreach ($arr_num as $numb){
	$result += pow($numb,2);
}
echo sqrt($result);

//Работа с функциями округления

echo round(sqrt(379)) . "\n";
echo round(sqrt(379), 1) . "\n";
echo round(sqrt(379), 2) . "\n";

$arr_round = [
	"ceil" => NULL,
	"floor" => NULL
];

$arr_round["ceil"] = ceil(sqrt(587));
$arr_round["floor"] = floor(sqrt(587));

//Работа с min и max
$arr_num = [4, -2, 5, 19, -130, 0, 10];

echo "Максимальный: ".(max($arr_num)) . "\n";
echo "Минимальный: ".(min($arr_num)) . "\n";

//Работа с рандомом

echo 'Случайное число: ' . rand(1, 100) . "\n";

$arr_fill=[];
for ($i = 0; $i < 10; $i++ ){
	$arr_fill[] = random_int(1, 100);
}

foreach ($arr_fill as $elem){
	echo $elem .' ';
}
echo "\n";

//Работа с модулем
$a = 10;
$b = 101;

echo "Модуль разности $a и  $b: ". abs($a - $b);

//Общее
$a = 16;

$arr_divisors  = [];

for ($i = 1; $i ** 2 <= $a; $i++ ){
	if ($a % $i == 0) {
		$arr_divisors[] = $i;
		if ($i != $a / $i) {
			$arr_divisors[] = $a / $i;
		}
	}
};

print_r($arr_divisors);