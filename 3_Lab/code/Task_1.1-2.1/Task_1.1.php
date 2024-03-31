<?php
function seacrhSubstr(string $text) {
	$pattern = "/a..b/";
	$coincidences = '';
	if (preg_match_all($pattern, $text, $matches)) {
		foreach ($matches[0] as $match) {
			$coincidences .= $match." ";
		}
		echo ($coincidences);
	}elseif ($text == ''){
		echo  "Строка пуста.";
	}
	else {
		echo "Совпадения не найдены.";
	}
}

$message = $_POST['message'];
seacrhSubstr($message);
