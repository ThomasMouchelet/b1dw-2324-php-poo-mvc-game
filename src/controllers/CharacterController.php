<?php

require_once "./controllers/Controller.php";
require_once "./models/CharacterManager.php";

class CharacterController extends Controller {
    public function showList(){
        $characterManager = new CharacterManager();
        $playerList = $characterManager->findAll();
        var_dump($playerList);

        $this->render('list');
    }
    
    public function showForm(){
        $this->render('form');
    }

    public function create(){
        $username = $_POST['username'];

        $characterManager = new CharacterManager();
        $characterManager->create($username);

        $this->render('list');
    }
}