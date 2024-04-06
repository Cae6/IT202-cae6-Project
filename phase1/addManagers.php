<?php
// MODIFY to use database_local.php or database_njit.php
require_once('database_njit.php');


function addHomeDecManager($email, $password, $firstName, $lastName, $db) {// might have to change the M to capital?
    
    $hash = password_hash($password, PASSWORD_DEFAULT);
    $query = 'INSERT INTO HomeDecManagers (emailAddress, password, firstName, lastName, datecreated)
              VALUES (:email, :password, :firstName, :lastName, NOW())';
    $statement = $db->prepare($query);
    $statement->bindValue(':email', $email);
    $statement->bindValue(':password', $hash);
    $statement->bindValue(':firstName', $firstName);
    $statement->bindValue(':lastName', $lastName);
    $statement->execute();
    $statement->closeCursor();
 }  
 
 addHomeDecManager('chizi@gmail.com', 'starmoon569', 'Chizorom', 'Ekweghariri', $db );
 
 addHomeDecManager('dan@gmail.com', 'coolcookie22', 'Daniel', 'Web', $db); 
 
 addHomeDecManager('reese@gmail.com', 'dancealot001', 'Reese', 'Dove', $db); 

  if ($row === false) {
    return false;
  } else {
    $hash = $row['password'];
    return password_verify($password, $hash);
  }

?>

<!-- 
    Chizorom Ekweghariri
    4/5/2024
    IT202-006
    Phase 4 Assignment 
    cae6@njit.edu
 -->