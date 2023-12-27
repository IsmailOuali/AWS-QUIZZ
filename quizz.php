<?php
include 'model/question.php';

session_start();

$question = $_SESSION['question'][$_SESSION['quizz']];




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
                  <input type="radio" class="input-radio one-a jshdgdgwgdwfdfwdwjfdjwwdwdin" id="one-a" name="yes-1" >
                  <label class="radio-label jsjwjdwjdwjdwco" for="one-a">
                      <span class="alphabet">A</span> Cascading Style Sheets <img class="icon jdsjkefkefkefefexco" src="https://res.cloudinary.com/dvhndpbun/image/upload/v1588518387/jdsjkefkefkefefexco.svg" alt="">
                  </label>
                  <input type="radio" class="input-radio one-b jshdgdgwgdwfdfwdwjfdjwwdwdco" id="one-b" name="yes-1">
                  <label class="radio-label jsjwjdwjdwjdwin" for="one-b">
                      <span class="alphabet">B</span> Creative Screen Styling <img class="icon jfdedgwfzexf4hjin" src="https://res.cloudinary.com/dvhndpbun/image/upload/v1588517753/jfdedgwfzexf4hjin.svg">
                  </label>
                  <input type="radio" class="input-radio one-c jshdgdgwgdwfdfwdwjfdjwwdwdin" id="one-c" name="yes-1">
                <label class="radio-label jsjwjdwjdwjdwin" for="one-c">
                  <span class="alphabet">C</span> Cascading Style Screen <img class="icon jfdedgwfzexf4hjin" src="https://res.cloudinary.com/dvhndpbun/image/upload/v1588517753/jfdedgwfzexf4hjin.svg">
                </label>
                    <input type="radio" class="input-radio one-c jshdgdgwgdwfdfwdwjfdjwwdwdin" id="one-d" name="yes-1">
                <label class="radio-label jsjwjdwjdwjdwin" for="one-d">
                    <span class="alphabet">D</span> Cascading Style Screen <img class="icon jfdedgwfzexf4hjin" src="https://res.cloudinary.com/dvhndpbun/image/upload/v1588517753/jfdedgwfzexf4hjin.svg">
                </label>
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