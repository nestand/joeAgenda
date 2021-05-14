<?php

require_once 'libs/Autoloader.php';
Smarty_Autoloader::register();
require_once 'include/autoloader.php';
Autoloader::register();

$task = $_GET['task'];
if(empty($task)){
	header("location: index.php");
	exit;
}
$task = Agenda::getById($task);


$smarty->assign("task", $task);

$smarty->display('template/index.tpl');