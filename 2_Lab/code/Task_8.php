<?php
echo ("\nTask - 8 ____________\n");
//Работа с массивами
function arrayFill(string $str, int $quantity = 0): array{
	$arr = [];
	for($i = 0; $i < $quantity; $i++){
		$arr[] = str_repeat($str,$i + 1);
	}
	return $arr;
}

$arr_x= arrayFill('x',3);
print_r(($arr_x));

$arr = [
	[1,3,4],
	[5,1],
	[9]
];

$sum = 0;
foreach ($arr as $dim_arr){
	foreach ($dim_arr as $value){
		$sum+=$value;
	}
}
echo "Сумма проивольного 2-мерного массива: $sum\n";

$array = [];
$count = 1;

for ($i = 0; $i < 3; $i++) {
	$row = [];
	for ($j = 0; $j < 3; $j++) {
		$row[] = $count;
		$count++;
	}
	$array[] = $row;
}
print_r($array);

$array = [2, 5, 3, 9];

$result = ($array[0] * $array[1]) + ($array[2] * $array[3]);
echo $result."\n";

$user = [
	'name' => "Ryan",
	'surname' => "Gosling",
	'patronimyc' => "Thomas"
];
echo "$user[surname] $user[name] $user[patronimyc]\n";

$date = [
	'year' => date('Y'),
	'month' => date('m'),
	'day' => date('d')
];
echo "$date[year] - $date[month] - $date[day]\n";

$arr = ['a', 'b', 'c', 'd', 'e'];
echo "Длинна массива: ".count($arr)."\n";

echo "Последний элемент массива: ".$arr[count($arr)- 1]."\n";
echo "Предпоследний элемент массива: ".$arr[count($arr)- 2]."\n";