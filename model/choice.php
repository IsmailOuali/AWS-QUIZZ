<?php
include '../config.php';
include 'question.php';


class choice{
    private $id_choice;
    private $nom_choice;
    private question $question;
    private $status;

    public function __construct($nom_choice, $id_question, $nom_question, $status){
        $this->nom_choice = $nom_choice;
        $this->status = $status;
        $this->question = new question($id_question, $nom_question);
    }

    public function __get($prop){
        return $this->$prop;

    }

    public function __set($prop, $value){
        $this->$prop = $value;
    }
    public static function showchoices($id_question){
        $sql = DBconnection::connection()->query("SELECT * FROM question JOIN choice WHERE choice.id_question = $id_question AND question.id_question = choice.id_question");
        $result = $sql->fetchAll(PDO::FETCH_ASSOC);
        $c = array();

        foreach ($result as $row){
            $choix = new choice($row['id_choice'], $row['id_question'], $row['nom_question'], $row['status']);
            array_push($c, $choix);

        }
        return  $c;
        
        }
}

 print_r(choice::showchoices(2));

?>