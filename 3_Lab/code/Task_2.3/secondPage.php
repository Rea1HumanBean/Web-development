<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../style/SecondPage_2.2.css">
	<title>Вывод данных пользователя</title>
</head>
<body>
	<div id="info">
	<span>Данные пользователя:</span>

	<ul>
	<?php

	session_start();

	if (isset($_SESSION)) {
		 foreach ($_SESSION as $key => $info) {
			 echo "<li><strong>$key:</strong> $info</li>";
		 }
	} else {
			redirectToHome();
	}
	?>
	</ul>

	<img src="https://static.printler.com/cache/2/a/c/6/d/9/2ac6d9cf6cee3eb8284b0a53f6d145d39b319fa0.jpg" alt="Kurt Cobain" width="190" height="175">
	</div>
</body>
</html>