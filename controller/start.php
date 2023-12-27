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
for($i = 1; $i < 4 ; $i++)
{
    $_SESSION['choice'][$i] = choice::showchoices($i);
}

header('Location: ../quizz.php');


?>