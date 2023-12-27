<?php

include '../model/question';


if(!$_POST){
    header('Location: ../index.php');
}

if(@$_POST['commecerBtn']){
    $pseudo = $_POST['pseudo'];
    header('Location: ../quizz.php');
}


?>