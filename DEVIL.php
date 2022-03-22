<?php
	header('Content-Type: text/html; charset=utf-8');
	$x = $_POST['ch1'];
	$y = $_POST['ch2'];
	echo $x.' + '.$y.' = '.$x+$y.'<br>';
	echo '<a href="DEVI.html">Вернуться назад</a>';
?>