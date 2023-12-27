<?php
session_start();
include '../model/choice.php';



if(!$_POST){
    header("Location: ../index.php");
}


$pseudo = $_POST['pseudo']; 

$_SESSION['pseudo'] = $pseudo;

$_SESSION['quizz'] = 0;
$_SESSION['question'] = question::showquestion();

header('Location: ../quizz.php');


?>