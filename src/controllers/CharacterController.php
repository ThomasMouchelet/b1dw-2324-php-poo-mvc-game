<?php

require_once "./controllers/Controller.php";
require_once "./models/CharacterManager.php";

class CharacterController extends Controller {
    public function showList(){
        $characterManager = new CharacterManager();
        $playerList = $characterManager->findAll();

        $this->render('list', ['playerList' => $playerList]);
    }
    
    public function showForm(){
        $this->render('form');
    }

    public function create(){
        $username = $_POST['username'];

        $characterManager = new CharacterManager();
        $characterManager->save($username);

        header("Location: ?action=list");
    }
}