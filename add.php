<?php include 'database.php'; ?>
<?php
if (isset($_POST['submit'])) {
  //on récupére les variables stocké dans le POST
  $question_number = $_POST['question_number'];
  $question_text = $_POST['question_text'];
  $correct_choice = $_POST['correct_choice'];
  $choices = array();
  $choices[1] = $_POST['choice1'];
  $choices[2] = $_POST['choice2'];
  $choices[3] = $_POST['choice3'];
  $choices[4] = $_POST['choice4'];
  $choices[5] = $_POST['choice5'];

  //On insére les données dans la db
  $query = "INSERT INTO `questions` (question_number, text)
            VALUES('$question_number', '$question_text')" ;

  $insert_row = $mysqli->query($query) or die($mysqli->error._LINE_);

    //On vérifie si l'insertion a eu lieu et on insert les choix
    if($insert_row) {
        foreach ($choices as $choice => $value) {
            //on vérifie si la valeur n'est pas vide
            if($value != ''){
                //On vérifie si le choix est correct
                if ($correct_choice == $choice) {
                    $is_correct = 1;
                } else {
                    $is_correct = 0;
                }
                //Insertion des Choix
                $query = "INSERT INTO `choices` (question_number, is_correct, text)
                          VALUES ('$question_number', '$is_correct', '$value')";

                $însert_row = $mysqli->query($query) or die($mysqli->error._LINE_);

                    //On vérifie l'insertion des Choix
                    if ($insert_row) {
                      continue;
                    } else {
                      die('Error: ('.$mysqli->errno . ') '.$mysqli->error);
                    }
            }
        }
        $message = 'Question ajouté !';
    }
}

//Pour avoir le numéro de la question prédéfini selon les enregistrements de la bd
//on récupére toutes les questions
$query = "SELECT * FROM `questions`";
$questions = $mysqli->query($query) or die($mysqli->error._LINE_);
$total = $questions->num_rows;
$next = $total+1;
?>

<!DOCTYPE html>
<html>
  	<head>
  	<meta charset="utf-8" />
  	<title>Quizz</title>
  	<link rel="stylesheet" href="css/style.css" type="text/css" />
  </head>
  <body>
  	<header>
  		<div class="container">
  			<h1>Quizz</h1>
  		</div>
  	</header>
  	<main>
  		<div class="container">
  			<h2>Ajoutez une question</h1>
          <?php
            if (isset($message)) {
              echo '<p>'.$message.'</p>';
            }
           ?>
  			<form method="post" action="add.php">
  				<p>
  					<label>Numéro de la question: </label>
  					<input type="number" value="<?php echo $next; ?>" name="question_number" />
  				</p>
  				<p>
  					<label>Question : </label>
  					<input type="text" name="question_text" />
  				</p>
  				<p>
  					<label>Choix #1: </label>
  					<input type="text" name="choice1" />
  				</p>
  				<p>
  					<label>Choix #2: </label>
  					<input type="text" name="choice2" />
  				</p>
  				<p>
  					<label>Choix #3: </label>
  					<input type="text" name="choice3" />
  				</p>
  				<p>
  					<label>Choix #4: </label>
  					<input type="text" name="choice4" />
  				</p>
  				<p>
  					<label>Choix #5: </label>
  					<input type="text" name="choice5" />
  				</p>
  				<p>
  					<label>Numéro du choix correct : </label>
  					<input type="number" name="correct_choice" />
  				</p>
  				<p>
  					<input type="submit" name="submit" value="Submit" />
  				</p>
  			</form>
  		</div>
  	</main>
  	<footer>
  		<div class="container">
  			
  		</div>
  	</footer>
  </body>
</html>
