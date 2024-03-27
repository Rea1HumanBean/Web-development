<?php
function seacrhQuantityWord(string $text) {
	if ('' == $text) {
		echo "Строка пуста.";
	} else {
		$words = preg_match_all('/\b\p{L}+\b/u', $text, $matches);
		echo "В данном тексте имеется ".count($matches[0])." слов. Также содержится ".mb_strlen($text)."символов.";
	}
}

$message = $_POST['message'];

seacrhQuantityWord($message);
