<?php

include '../config.php';


class choice{
    private $nom_choice;

    public function __construct($nom_choice){
        $this->nom_choice = $nom_choice;
    }

    public function __get($nom_choice){
        return $this->$nom_choice;
    }

    public function __set($nom_choice, $value){
        $this->$nom_choice = $value;
    }
}
?>