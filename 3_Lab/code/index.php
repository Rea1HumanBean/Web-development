<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Лабораторная №3</title>
</head>
<body>
<p><b style="color: blue;">Задание 1.1. Регулярные выражения</b></p>

	<form method="POST">
		<label>
			<textarea id="message" name="message" rows="5" cols="30" placeholder="Введите текст"></textarea><br>
		</label>
		<button type="submit" id="submitButton">Отправить</button><br>
		<label for="outputField">Поиск подстроки по шаблону :<u> буква 'a', два любых символа, буква 'b: </u> <br></label>
		<output name="outputFieldTask_1" id="outputField"></output><br>
	</form>

<p><b style="color: blue;">Задание 1.2  Регулярные выражения</b></p>

	<form>
		<label for="outputField">Дана строка с целыми числами 'a1b2c3'. С помощью регулярки преобразуйте строку так, чтобы вместо этих чисел стояли их кубы. <br></label>
		<?php include 'Task_1.2.php'; ?>
	</form>

<p><b style="color: blue;">Задание 2.1. Форма. Сессии и Куки</b></p>

	<form>
		<label>
		<textarea id="message_2" name="message_2" rows="2.5" cols="30" placeholder="Введите текст"></textarea><br>
		</label>
		<button type="submit" id="submitButton_2">Отправить</button><br>
		<label for="outputField_2">Количество слов и количество символов в тексте: </label>
		<output name="outputFieldTask_2" id="outputField_2"></output><br>
	</form>

<script src="scripts/appOutputTask_1.js"></script>
<script src="scripts/appOutputTask_2.js"></script>

<script>
	document.getElementById("submitButton").addEventListener("click", function(event) {
		event.preventDefault();
		updateOutput();
	});
</script>

<script>
	document.getElementById("submitButton_2").addEventListener("click",function (event){
		event.preventDefault();
		quantityeStr();
	})
</script>

</body>
</html>