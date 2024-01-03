<?php
session_start();

if(!is_numeric(@$_POST['yes'])){
    $_SESSION['message'] = 'veuillez entrer une reponse';
    
    header('Location: ../quizz.php');
}

else{
    
    $_SESSION['message'] = '';
    
    if ($_POST['yes'] == 1){
        $_SESSION['score'] += 10;
    }
    // if($_POST['yes'] == 0){
    //     $_SESSION['explication'][$_SESSION['quizz']] = choice::explication($id_question-1);


    // }

    if ($_SESSION['quizz'] < 9){
        
        $_SESSION['quizz'] += 1;
        header('Location: ../quizz.php');
    }
    else{
        if($_SESSION['score'] >= 70){
            $_SESSION['resultat'] = 'You passed the exam succesfuly';
        }
        else{
            $_SESSION['resultat'] = 'You didnt pass the exam Unfortently';

        }
        header('Location: ../game-over.php');
    }
// echo $_SESSION['score'];
}



?>