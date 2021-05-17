<?php

require 'libs/Smarty.class.php';
require 'include/class/db.class.php';
require 'include/class/agenda.class.php';
require 'include/autoloader.php';

$smarty = new Smarty;
$smarty->assign("Name", "Mod", true);
$smarty->assign("FirstName", array("John", "Mary", "James", "“Henry"));
$smarty->assign("LastName", array("Doe", "Smith", "Johnson", "Case"));
$smarty->assign("Class", array(array("A", "B", "C", "D"), array("E", "F", "G", "H"), array("I", "J", "K", "L"),
array("M", "N", "O", "P")));
$smarty->assign("contacts", array(array("phone" => "555-4444", "fax" => "555-3333", "cell" => "760-1234")));
$smarty->assign("option_output", array("New York", "Nebraska", "Kansas", "Iowa", "Oklahoma", "Texas"));


// display the output

if(isset($_POST['action'])){
    if($_POST['action'] == "add"){
        $newTask = agenda::build($_POST['date'], $_POST['time'], $_POST['task']);
    }

    if($_POST['action'] == "update"){
        $newTask = agenda::build($_POST['date'], $_POST['time'], $_POST['task'], $_POST['id']);
    }
    
    if(!empty($newTask)){
        $newTask->create();
    }
   header("Location: templates/index.tpl");
   exit;
}

switch($_GET['templates']){
    case "create":
        $smarty->display('templates/create.tpl');
        break;
    case "modif":
        $task = agenda::getById($_GET["id"]);
        $smarty->assign("task", $task);
        $smarty->display('templates/modif.tpl');
        break;
    case "delete":
        agenda::delete($_GET["id"]);
        header("templates/delete.tpl");
        break;
    default:
        $tasks = agenda::showAll();
        $smarty->assign("tasks", $tasks);
        $smarty->display('index.tpl');
        break;
}
