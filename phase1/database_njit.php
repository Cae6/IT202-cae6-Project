<?php
  // Slide 24 (sort of)
  $dsn = 'mysql:host=sql1.njit.edu;port=3306;dbname=cae6';
  $username = 'cae6';
  $password = 'Lovelytimes-128';

  try {
    $db = new PDO($dsn, $username, $password);
    echo '<p>You are connected to the NJIT database!</p>';
  } catch(PDOException $ex) {
    $error_message = $ex->getMessage();
    include('database_error.php');
    exit();
  }

 /*
    Chizorom Ekweghariri
    3/1/2024
    IT202-006
    Phase 2 Assignment 
    cae6@njit.edu
 */
?>
