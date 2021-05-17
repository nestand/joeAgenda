<?php
require_once 'libs/Autoloader.php';
Smarty_Autoloader::register();
require_once 'include/autoloader.php';
Autoloader::register();

$task= Agenda::create();
$smarty->assign('getTasks', $getTasks);
$smarty->display('create.tpl');

header ("Location: agenda.php?agenda=createOk");
exit;