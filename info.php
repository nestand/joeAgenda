<?php
require_once 'libs/Autoloader.php';
Smarty_Autoloader::register();
require_once 'include/autoloader.php';
Autoloader::register();
require_once("include/agenda.class.php");


$smarty = new Smarty; 
$db = getConnected();
$res = $db->prepare("select * from agenda"); 
$res->execute(); 
$res->setFetchMode(PDO::FETCH_LAZY); 

  // assign to smarty 
  $smarty->assign('res',$res); 

  $smarty->display('index.tpl');





