<?php

// MODIFY to use database_local.php or database_njit.php

require_once('database_njit.php');
function is_valid_admin_login($email, $password, $db) {
  $query = 'SELECT password FROM HomeDecManagers WHERE emailAddress = :email';
  $statement = $db->prepare($query);
  $statement->bindValue(':email', $email);
  $statement->execute();
  $row = $statement->fetch();
  $statement->closeCursor();  
  if ($row === false) {
    return false;
  } else {
    $hash = $row['password'];
    return password_verify($password, $hash);
  }
}
?>
<!-- 
    Chizorom Ekweghariri
    4/5/2024
    IT202-006
    Phase 4 Assignment 
    cae6@njit.edu
 -->