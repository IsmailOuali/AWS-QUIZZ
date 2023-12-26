<?php

include '../config.php';

class theme{
    private $nom_theme;


    public function __construct($nom_theme){
        $this->nom_theme = $nom_theme;
    }

    public function __get($nom_theme){
        return $this->$nom_theme;
    }

    public function __set($nom_theme, $value){
        $this->$nom_theme = $value;
    }
}   



?>