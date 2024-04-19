<?php

  echo('You need to login to view the PRODUCTS, SHIPPING and the ADD PRODUCT page ');

// TODO use database_local.php OR database_njit.php
require_once('database_njit.php');


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Shipping Page</title>
   
    <body>
    <header>
    <nav>
  <?php
  if (session_status() == PHP_SESSION_NONE) {
    session_start();
  }
  if (isset($_SESSION['is_valid_admin'])) {
  ?>
    <ul>
        <li><a href="home.php">HOME</a></li>
        <li><a href="ship.php">SHIPPING</a></li>
        <li><a  href="product.php">PRODUCTS</a></li>
        <li><a class="active" href="add_product_forms2.php">ADD PRODUCTS</a></li>
    </ul>
    <a href="logout.php">Logout</a>
    <?php 
     echo ("<br>");
     echo("Welcome");
     echo ("<br>");
     echo $_SESSION['firstN'];
     echo ("<br>");
     echo $_SESSION['lastN'];
     echo ("<br>");
     echo $_SESSION['emailA'];
     echo ("<br>"); ?>
  <?php 
  } else {
  ?>
 
  <?php 
  } 
  ?>
</nav>
  </aside>



</html>
<a href="login.php">Login</a>