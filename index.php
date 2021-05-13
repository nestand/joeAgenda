<?php

require 'libs/Smarty.class.php';
require 'include/class/agenda.class.php';
require 'include/autoloader.php';

/*
// show events in index tpl function
{if(empty($_GET['id'])){
    header("location: index.php");
    exit;
}

require 'include/agenda.class.php';
$event = Agenda::getById($_GET['id']);

{if($event === false){
    header("location: index.php");
    exit;
}
}
}
*/

$smarty = new Smarty;
//$smarty->force_compile = true;
$smarty->assign("Name", "Mod", true);
$smarty->assign("FirstName", array("John", "Mary", "James", "“Henry"));
$smarty->assign("LastName", array("Doe", "Smith", "Johnson", "Case"));
$smarty->assign("Class", array(array("A", "B", "C", "D"), array("E", "F", "G", "H"), array("I", "J", "K", "L"),
array("M", "N", "O", "P")));
$smarty->assign("contacts", array(array("phone" => "555-4444", "fax" => "555-3333", "cell" => "760-1234")));
$smarty->assign("option_output", array("New York", "Nebraska", "Kansas", "Iowa", "Oklahoma", "Texas"));
$smarty->assign("agenda", Agenda::getById($_GET['id']));

$smarty->display('index.tpl');



