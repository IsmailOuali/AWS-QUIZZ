<?php
session_start();
if ($_SESSION['quizz'] < 9){

    $_SESSION['quizz'] += 1;
    header('Location: ../quizz.php');
}
else{
    header('Location: ../game-over.php');
}




?>