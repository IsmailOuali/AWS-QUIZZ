<?php
include '../config.php';

class question{
    private $nom_question;

    public function __construct($nom_question){
        $this->nom_question = $nom_question;
    }

    public function __get($nom_question){
        return $this->$nom_question;
    }

    public function __set($nom_question, $value){
        $this->$nom_question = $value;
    }
}

?>