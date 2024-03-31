<?php
function redirectToHome(): void {
	header('Location: /');
	exit();
}

if (false === isset($_POST['surname'], $_POST['name'], $_POST['age'])) {
	redirectToHome();
}

session_start();
$_SESSION["user_data"] = [ $_POST['surname'], $_POST['name'], $_POST['age'] ];

redirectToHome();