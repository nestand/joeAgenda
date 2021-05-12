<?php
/**
 * Example Application
 *
 * @package Example-application
 */
require 'libs/Smarty.class.php';
$smarty = new Smarty;
//$smarty->force_compile = true;
$smarty->assign("Name", "Mod", true);
$smarty->assign("FirstName", array("John", "Mary", "James", "“Henry"));
$smarty->assign("LastName", array("Doe", "Smith", "Johnson", "Case"));
$smarty->assign("Class", array(array("A", "B", "C", "D"), array("E", "F", "G", "H"), array("I", "J", "K", "L"),
array("M", "N", "O", "P")));
$smarty->assign("contacts", array(array("phone" => "555-4444", "fax" => "555-3333", "cell" => "760-1234")));
$smarty->assign("option values", array("NY", "NE", "KS", "IA", "OK", "TX"));
$smarty->assign("option_output", array("New York", "Nebraska", "Kansas", "Iowa", "Oklahoma", "Texas"));
$smarty->assign("option selected", "NE");

$smarty->display('index.tpl');



