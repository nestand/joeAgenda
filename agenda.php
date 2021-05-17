<?php

require_once 'libs/Autoloader.php';
Smarty_Autoloader::register();
require_once 'include/autoloader.php';
Autoloader::register();

 

require_once 'include/class/agenda.class.php';     
$smarty = new Smarty;
$getTasks = Agenda::ShowAll();     
$smarty->assign('getTasks', $getTasks);     
$smarty->display('index.tpl');
