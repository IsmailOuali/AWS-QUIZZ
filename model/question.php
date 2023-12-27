<?php

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

    public function __get($prop){
        return $this->$prop;
    }

    public function __set($prop, $value){
        $this->$prop = $value;
    }

    public static function showquestion()
    {

        $sql = DBconnection::connection()->query("SELECT * FROM question JOIN theme WHERE question.id_theme = theme.id_theme AND id_question ORDER BY RAND() LIMIT 10");
        

        $result = $sql->fetchAll(PDO::FETCH_ASSOC);
        $q = array();
        
        foreach ($result as $row){
            $quest = new question($row['id_question'], $row['nom_question'], $row['id_theme'], $row['nom_theme']);
            array_push($q, $quest);

        }
        return $q;
    }
}   


// print_r(question::showquestion());
?>