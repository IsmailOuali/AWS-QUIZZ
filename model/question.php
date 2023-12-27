<?php
include '../config.php';
include 'theme.php';

class question{
    private  $id_question;
    private  $nom_question;
    private theme $theme;

    public function __construct($id_question, $nom_question, $id_theme, $nom_theme){
        $this->id_question = $id_question;
        $this->nom_question = $nom_question;
        $this->theme = new theme($id_theme, $nom_theme);
        
    }

    public function __get($id_question,$nom_question, $theme){
        return $this->$theme;
        return $this->$id_question;
        return $this->$nom_question;
    }

    public function __set($prop, $value){
        $this->$prop = $value;
    }

    public function showquestion()
    {

        $sql = DBconnection::connection()->query("SELECT * FROM question");
        

        $result = $sql->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
}

?>