<?php
require_once 'libs/Autoloader.php';
Smarty_Autoloader::register();
require_once 'include/autoloader.php';
Autoloader::register();

//delete the task
$delete = Agenda::delete();
$smarty -> assign('delete', $delete); 

$task= Agenda::delete($id);
$smarty->display('delete.tpl');
header ("Location: agenda.php?agenda=delOk");
exit;