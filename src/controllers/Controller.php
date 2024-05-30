<?php

class Controller {
    public function render($fileName, $data = []){
        $path = './views/' . $fileName . '.php';

        if(file_exists($path)){
            extract($data);
            require_once $path;
        } else {
            echo "File not found";
        }
    }
}