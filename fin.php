<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
      <title>Quizz</title>
      <meta charset="utf-8"/>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="css/style.css">
    </head>

    <body>

      <header>
        <div class="container">
          <h1>Quizz PHP</h1>
        </div>
      </header>

      <main>
        <div class="container">
              <h2>Vous avez termine!</h2>
              <p>Le resultat du quizz: <?php echo $_SESSION['score']; ?></p>
              <a href="question.php?n=1" class="start">Recommencez</a>
        </div>
      </main>

      <footer>
        <div class="container">
          Done by Bilane
        </div>
      </footer>

    </body>


</html>
