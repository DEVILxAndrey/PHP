<?php 
header('Content-Type:text/html; charset=utf-8');
require_once 'programmer.php';

$p1 = new Programmer('Андрей','Твердохлеб','Сергеевич');
$p1->addLang('C++');
$p1->addLang('PHP');
$p1->addLang('Pascal');
$p1->display();
