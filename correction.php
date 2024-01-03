<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style-quizz.css">
    <title>correction</title>
</head>
<body>
<section id="game-over">
      <div class="game-over-content">
          <div class="over-text-cont">
              <h1 data-heading="Game Over">Game Over</h1>
              <?php
            //   for($i = 0; $_SESSION['explication']; $i++){

            //   }
              ?>
              <h2>correction:  </h2>
              <p><?php 
            //   echo $_SESSION['explication'][$i]
               ?></p>
              <a id="btn" type="submit" onclick="window.location.href='index.php'">Play Again</a>

          </div>
      </div>
  </section>
</body>
</html>