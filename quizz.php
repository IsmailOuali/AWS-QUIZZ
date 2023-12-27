<?php
include 'config.php';
include 'model/choice.php';

session_start();

$question = $_SESSION['question'][$_SESSION['quizz']];
$id_question=$question->__get('id_question');
$arr =choice::showchoices($id_question);






?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style-quizz.css">
    <title>Document</title>
</head>
<body>
  <section class="section-1" id="section-1">
      <main>
          <div class="text-container">
              <h3>AWS QUIZZ</h3>
              <p>QUESTION <?php echo $_SESSION['quizz']+1 ?> OF 10</p>
              <p><?php echo $question->__get('nom_question') ?></p>
          </div>
          <form action="controller/next.php" method="post">
              <div class="quiz-options">
                      <?php  
                        foreach($arr as $row){

                            ?>
                  <input type="radio" class="input-radio one-a jshdgdgwgdwfdfwdwjfdjwwdwdin" id="one-a" name="yes-1" >
                  <label class="radio-label jsjwjdwjdwjdwco" for="one-a">
                      <span class="alphabet"><?php echo $row->nom_choice?></span><?php  ?><img class="icon jdsjkefkefkefefexco" src="https://res.cloudinary.com/dvhndpbun/image/upload/v1588518387/jdsjkefkefkefefexco.svg" alt="">
                      <?php
                    }

                        ?>
              </div>
              <input type="submit" value="next" name="" id="">
          </form>
      </main>

      <!-- SCORE COUNTER -->
  </section>
  <div class="score-counter">
      <p class="score-text">CORRECT: /10</p>
  </div>
</body>
</html>