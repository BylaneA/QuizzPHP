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
            <h2>Ajouter une question</h2>
            <form class="" action="admin.php" method="post">
              <p>
                <label>Question Numero: </label>
                <input type="number" name="question_number" value="">
              </p>
              <p>
                <label>Question Texte: </label>
                <input type="text" name="question_text" value="">
              </p>
              <p>
                <label>Choix #1</label>
                <input type="text" name="choice1" value="">
              </p>
                <label>Choix #2</label>
                <input type="text" name="choice2" value="">
              </p>
              </p>
                <label>Choix #3</label>
                <input type="text" name="choice3" value="">
              </p>
              </p>
                <label>Choix #4</label>
                <input type="text" name="choice4" value="">
              </p>
              </p>
                <label>Choix #5</label>
                <input type="text" name="choice5" value="">
              </p>
            </p>
              <label>Numero du choix correct</label>
              <input type="number" name="correct_choice" value="">
            </p>
            </p>
              <input type="submit" name="submit" value="Envoyer">
            </p>
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
