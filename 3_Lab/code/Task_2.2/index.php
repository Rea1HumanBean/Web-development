<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Регулярка</title>
</head>
<body>
<?php
echo "Task 1.a <br>";
// Пример строки
$str = 'ahb acb aeb aeeb adcb axeb';

// Регулярное выражение
$pattern = '/a..b/';

// Находим все совпадения
preg_match_all($pattern, $str, $matches);

// Выводим найденные строки
print_r($matches[0]);

echo "<br>Task 1.b<br>";
// Исходная строка
$str = 'a1b2c3';

// Регулярное выражение для поиска чисел
$pattern = '/(\d+)/';

// Функция обратного вызова для замены чисел на их кубы
function replaceCallback($matches) {
	return $matches[1] * $matches[1] * $matches[1];
}

// Заменяем числа на их кубы
$newStr = preg_replace_callback($pattern, 'replaceCallback', $str);

// Выводим преобразованную строку
echo $newStr;
?>
</body>
</html>