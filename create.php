<?php
require_once 'libs/Autoloader.php';
Smarty_Autoloader::register();
require_once 'include/autoloader.php';
Autoloader::register();

$id=$_POST['id'];

$task= Agenda::create($id);
header ("Location: agenda.php?agenda=createOk");
exit;