<?php

require_once "./controllers/CharacterController.php";

$characterController = new CharacterController();

$action = isset($_GET['action']) ? $_GET['action'] : "show_form";

switch($action){
    case 'list':
        $characterController->showList();
        break;
    case 'show_form':
        $characterController->showForm();
        break;
    case 'create':
        $characterController->create();
        break;
    default:
        $characterController->showForm();
        break;
}