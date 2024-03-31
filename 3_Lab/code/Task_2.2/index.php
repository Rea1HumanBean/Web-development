<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Задача 2.2</title>
	<link rel="stylesheet" href="../style/Task_2.2.css">
</head>
<body>
	<form method="POST" action="InfoPerson.php">
		<span style="color: blue">Введите данные</span><br>

		<label for="surname">Фамилия:</label>
		<input type="text" id="surname" name="surname" required><br>

		<label for="name">Имя:</label>
		<input type="text" id="name" name="name" required><br>

		<label for="age">Возраст:</label>
		<input type="number" id="age" name="age" required><br>

		<button type="submit" formaction="secondPage.php">Отправить</button>
</form>
</body>
</html>