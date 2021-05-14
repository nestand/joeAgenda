<?php
require_once 'libs/Autoloader.php';
Smarty_Autoloader::register();
require_once 'include/autoloader.php';
Autoloader::register();

$id=$_GET['id'];

Agenda::delete($id);
header ("Location: agenda.php?agenda=delOk");
exit;