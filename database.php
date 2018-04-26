<?php
$db_host = 'localhost';
$db_name = 'quizz_db';
$db_user = 'root';
$db_pass = 'facesimplon';

$mysqli = new mysqli($db_host, $db_user, $db_pass, $db_name);

//Si erreur
if($mysqli->connect_error){
  printf("Connect failed: %s\n", $mysqli->connect_error);
  exit();
}
