<?php
include 'model/choice.php';
include 'config.php';
session_start();

$question = $_SESSION['question'][$_SESSION['quizz']];


$id_question = $_SESSION['question'][$_SESSION['quizz']]->__get('id_question');
$choix = array();
$choix = choice::showchoices($id_question);

$theme = $_SESSION['question'][$id_question - 1]->theme->__get('nom_theme');



   





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
      <!-- ******************************** -->
      <div id="page-wrap">
        
        <div class="meter">
          <span style="width:<?php echo ($_SESSION['quizz']+1)*10 ?>%"></span>
        </div>
      </div>
        <!-- ******************************** -->

      <main>
        
        <div class="text-container">
          <h3>AWS QUIZZ</h3>
          <p>QUESTION <?php echo $_SESSION['quizz']+1 ?> OF 10</p>
          <p><?php echo $question->__get('nom_question') ?></p>
          <p class="theme"><?php echo $theme?></p>
          </div>
          <form action="controller/next.php" method="post">
              <div class="quiz-options">
                      <?php  
                            $i = 1;
                      foreach($choix as $choix){
                          ?>

                  <input type="radio" value= "<?php echo $choix->status?>" class="input-radio one-a jshdgdgwgdwfdfwdwjfdjwwdwdin" id="one-a" name="yes" >
                  <label class="radio-label jsjwjdwjdwjdwco" for="one-a">
                      <span class="alphabet"><?php echo $i ?></span><?php echo $choix->nom_choice ?><img class="icon jdsjkefkefkefefexco" src="https://res.cloudinary.com/dvhndpbun/image/upload/v1588518387/jdsjkefkefkefefexco.svg" alt="">
                    </label>
                    <?php
                        $i++;
                      }
                      ?>
                      <strong><?php echo $_SESSION['message']; ?></strong> 
              </div>
              <div>

              </div>
              
              <input type="submit" value="next" name="" id="">
          </form>
      </main>

  </section>


</body>
</html>