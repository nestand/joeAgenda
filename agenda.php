<?php

require_once 'libs/Autoloader.php';
Smarty_Autoloader::register();
require_once 'include/autoloader.php';
Autoloader::register();


$agenda = array(
array(Agenda::getById()));

$agenda = Agenda::showAll();

$smarty -> assign ("agenda", $agenda);
$smarty-> display ('template/index.tpl'); 