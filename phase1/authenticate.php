<?php
  require_once('admin_db.php');
  require_once('database_njit.php');
  session_start();

  $email = filter_input(INPUT_POST, 'email');
  $password = filter_input(INPUT_POST, 'password');
  if (is_valid_admin_login($email, $password, $db)) {
    $_SESSION['is_valid_admin'] = true;
    // redirect logged in user to default page
    echo "<p>You have successfully logged in.</p>";
  } else {
  if ($email == NULL && $password == NULL) {
    $login_message ='You must login to view all pages.';
  } else {
    $login_message = 'Invalid credentials.';
  }
    include('login.php');
  }
  $queryCategory = 'SELECT firstName,lastName, emailAddress FROM HomeDecManagers
          WHERE emailAddress = :email';
$statement1 = $db->prepare($queryCategory);
$statement1->bindValue(':email', $email);
$statement1->execute();
$manager = $statement1->fetch();
$statement1->closeCursor();

$_SESSION['firstN'] = $manager['firstName'];
$_SESSION['lastN'] = $manager['lastName'];
$_SESSION['emailA'] = $manager['emailAddress'];

include('home.php');

?>
<!-- 
    Chizorom Ekweghariri
    4/5/2024
    IT202-006
    Phase 2 Assignment 
    cae6@njit.edu
 -->
