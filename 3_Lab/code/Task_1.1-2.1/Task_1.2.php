<?php

$str = "a1b2c3";
$param = '/[0-9]+/';

$str = preg_replace_callback($param, function($matches) {
	$num = intval($matches[0]);
	return $num ** 3;
	}, $str);

echo "<span style='color: #aa00ff'> $str</span><br>";