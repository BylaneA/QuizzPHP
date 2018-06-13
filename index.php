<?php include 'database.php'; ?>
<?php
  //on récupére le nombre total de questions
  $query = "SELECT * FROM `questions`";

  $res = $mysqli->query($query) or die ($mysqli->error._LINE_);
  //on récupére le total des questions
  $total = $res->num_rows;
 ?>
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
          <h2>Testons un peu ce que vous valez en PHP</h2>
          <p>Quizz a multiple choix</p>
          <ul>
            <li>Nombre de question: <?php echo $total ; ?></li>
            <li>Type: Choix multiple</li>
            <li>Temps: <?php echo $total * .5 ; ?> minutes</li>
          </ul>
          <a href="question.php?n=1" class="start">Commencer</a>
        </div>
      </main>

      <footer>
        <div class="container">
        
        </div>
      </footer>

    </body>


</html>
