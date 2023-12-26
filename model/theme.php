<?php

include '../config.php';

class theme{
    private $id_theme;
    private $nom_theme;


    public function __construct($id_theme, $nom_theme){
        $this->id_theme = $id_theme;
        $this->nom_theme = $nom_theme;
    }

    public function __get($id_theme, $nom_theme){
        return $this->$id_theme;
        return $this->$nom_theme;
    }

    public function __set($prop, $value){
        $this->$prop = $value;
    }
}   



?>