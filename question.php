<?php include 'database.php'; ?>

<?php

  //indication du numéro de la question
  $number = (int) $_GET['n'];

  //on récupére la question
  $query = "SELECT * FROM `questions`
            WHERE question_number = $number";

  $res = $mysqli->query($query) or die ($mysqli->error._LINE_);
  //associate array with the data requested
  $question = $res->fetch_assoc();

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
              <div class="current">Question 1 sur 5</div>
              <p class="question">
                  <?php echo $question['text']; ?>
              </p>
              <form class="" action="process.php" method="post">
                <ul class="choices">
                  <li><input type="radio" name="choice" value="1"/> PHP: Hypertext Preprocessor</li>
                  <li><input type="radio" name="choice" value="1"/> PHP: Pre Hypertext Processor</li>
                  <li><input type="radio" name="choice" value="1"/> PHP: Private Home Page</li>
                  <li><input type="radio" name="choice" value="1"/> PHP: Personal Home Page</li>
                </ul>
                <input type="submit" name="" value="Submit">
              </form>
            </div>
      </main>

      <footer>
        <div class="container">
          Done by Bilane
        </div>
      </footer>

    </body>


</html>
