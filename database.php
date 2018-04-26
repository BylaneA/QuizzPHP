<?php
$user = 'root';
$pass = 'facesimplon';

//connexion et si erreur
try {
    $dbh = new PDO('mysql:host=localhost;dbname=quizz_db', $user, $pass);
    foreach($dbh->query('SELECT * from FOO') as $row) {
        print_r($row);
    }
    $dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
