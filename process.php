<?php include 'database.php'; ?>
<?php session_start(); ?>

<?php
    //On vérifie s'il y a un quelconque score
    if(!isset($_SESSION['score'])) {
      $_SESSION['score'] = 0;
    }

    //On vérifie si l'utilisateur  a soumis un résultat
    if($_POST){
      //On récupére les valeurs des input, numero de la question et celui du choix
      $number = $_POST['number'];
      $selected_choice = $_POST['choice'];
      //redirection vers la prochaine question
      $next = $number+1;

      //on récupére le nombre total de questions
      $query = "SELECT * FROM `questions`";

      $reslt = $mysqli->query($query) or die($mysqli->error._LINE_);
      $total = $reslt->num_rows;

      //on récupére la bonne réponse à la question
      $query = "SELECT * FROM `choices`
                WHERE question_number = $number
                AND is_correct = 1";

      $res = $mysqli->query($query) or die($mysqli->error._LINE_);
      $row = $res->fetch_assoc();
      //On répurére l'id de la réponse correct
      $correct_choice = $row['id'];

      //On compare si la res du user match avec la réponse correct
      if($correct_choice == $selected_choice) {
        $_SESSION['score']++;
      }


      //On vérifie si c'est la dernière question
      if ($number == $total) {
        //redirection
        header("Location: fin.php");
        exit();
      } else {
        header("Location: question.php?n=".$next);
      }
    }
 ?>
