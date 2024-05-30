<?php

require_once './models/Database.php';

class CharacterManager {

    public function findAll(){
        $db = Database::getInstance()->getConnection();
        $query = $db->prepare('SELECT * FROM characters');
        $query->execute();

        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function save($username){
        $db = Database::getInstance()->getConnection();
        $query = $db->prepare('INSERT INTO characters (username, strength, hp, xp, lvl) VALUES (:username, :strength, :hp, :xp, :lvl)');
        $query->execute([
            ':username' => $username,
            ':strength' => 50,
            ':hp' => 100,
            ':xp' => 0,
            ':lvl' => 1
        ]);
    }
}
