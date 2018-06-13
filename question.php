<?php include 'database.php'; ?>
<?php session_start(); ?>

<?php

  //indication du numéro de la question
  $number = (int) $_GET['n'];

  //on récupére la question
  $query = "SELECT * FROM `questions`
            WHERE question_number = $number";

  $res = $mysqli->query($query) or die ($mysqli->error._LINE_);
  //associate array with the data requested
  $question = $res->fetch_assoc();


  // on récupére les choix
  $query = "SELECT * FROM `choices`
            WHERE question_number = $number";

  $result = $mysqli->query($query) or die ($mysqli->error._LINE_);

  //on récupére le nombre total de questions
  $query = "SELECT * FROM `questions`";

  $reslt = $mysqli->query($query) or die($mysqli->error._LINE_);
  $total = $reslt->num_rows;

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
              <div class="current">Question <?php echo $question['question_number']; ?> sur <?php echo $total; ?></div>
              <p class="question">
                  <?php echo $question['text']; ?>
              </p>
              <form class="" action="process.php" method="post">
                <ul class="choices">
                  <?php while($row = $result->fetch_assoc()) : ?>
                      <li><input type="radio" name="choice" value="><?php echo $row['id']; ?>"/><?php echo $row['text']; ?></li>
                  <?php endwhile; ?>
                </ul>
                <input type="submit" name="" value="Submit" />
                <input type="hidden" name="number" value="<?php echo $number;  ?>" />
              </form>
            </div>
      </main>

      <footer>
        <div class="container">
          
        </div>
      </footer>

    </body>


</html>
