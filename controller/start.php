<?php
session_start();
include '../model/choice.php';
include '../config.php';



if(!$_POST){
    header("Location: ../index.php");
}


$pseudo = $_POST['pseudo']; 

$_SESSION['pseudo'] = $pseudo;

$_SESSION['quizz'] = 0;
$_SESSION['score'] = 0;
$_SESSION['question'] = question::showquestion();
$_SESSION['message'] = '';


header('Location: ../quizz.php');

// print_r($_SESSION['th']); 


?>