<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../style/SecondPage_2.2.css">
	<title>Вывод данных пользователя</title>
</head>
<body>
	<div>
	<span>Данные пользователя:</span>

	<?php

	session_start();

	if (isset($_SESSION)) {
		echo "<p><strong>Фамилия:</strong> " . $_SESSION["surname"] . "</p>";
		echo "<p><strong>Имя:</strong> " . $_SESSION["name"] . "</p>";
		echo "<p><strong>Возраст:</strong> " . $_SESSION["age"] . "</p>";
	} else {
		echo "<p style='color: red'>Данные не найдены</p>";
	}
	?>
		<img src="https://ew.com/thmb/1PEvCgleurL4ToG5kYg38maEl3w=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/10361__layne_l-7548015a9b794c53ac78b7f15773d2d0.jpg" alt="Layne Staley">
	</div>
</body>
</html>