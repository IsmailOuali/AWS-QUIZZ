<?php

include '../config.php';
include 'question.php';


class choice{
    private $id_choice;
    private $nom_choice;
    private question $question;

    public function __construct($id_choice, $nom_choice, $question){
        $this->id_choice = $id_choice;
        $this->nom_choice = $nom_choice;
        $this->question = $question;
    }

    public function __get($id_choice, $nom_choice, $question){
        return $this->$id_choice;
        return $this->$nom_choice;
        return $this->$question;
    }

    public function __set($prop, $value){
        $this->$prop = $value;
    }
}
?>