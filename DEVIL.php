<?php
	header('Content-Type: text/html; charset=utf-8');
	$name = $_POST['n'];
	$surname = $_POST['s'];
	echo 'Привет '.$name. ' '.$surname. '<br>';
	echo '<a href="DEVI.html">Вернуться назад</a>'
?>