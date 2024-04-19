<?php 
if (!isset($login_message)) {
$login_message = 'You need to login to view the PRODUCTS, SHIPPING and the ADD PRODUCT page';
}
?>
<!DOCTYPE html>
<html>
 <head>
   <title>Chizi's Home Dec Shop</title>
   <link rel="stylesheet" href="main.css">
    <header>
    <nav>
  <?php
  if (session_status() == PHP_SESSION_NONE) {
    session_start();

  }
  if (isset($_SESSION['is_valid_admin'])) {
  ?>
    <ul>
        <li><a class="active" href="home.php">HOME</a></li>
        <li><a href="ship.php">SHIPPING</a></li>
        <li><a href="product.php">PRODUCTS</a></li>
    
        <li><a href="add_product_form.php">ADD PRODUCTS</a></li>
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
  <ul>
  <li><a  href="home.php">HOME</a></li>
  <li><a href="product2.php">PRODUCTS</a></li>
  <li><a href="ship2.php">SHIPPING</a></li>
  <li><a href="add_product_forms2.php">ADD PRODUCTS</a></li>
  <li><a class="active" href="login.php">LOGIN</a></li>
    </ul>
  <?php 
  } 
  ?>
</nav>
 </head>
 <body>
   <h1>Chizi's Home Dec Shop</h1>
 <main>
   <h1>Login</h1>
   <form action="authenticate.php" method="post">
     <label>Email:</label>
     <input type="text" name="email" value="">
     <br>
     <label>Password:</label>
     <input type="password" name="password" value="">
     <br>
     <input type="submit" value="Login">
   </form>
   <p><?php echo $login_message; ?></p>
 </main>
 </body>
</html>

<!-- 
    Chizorom Ekweghariri
    4/5/2024
    IT202-006
    Phase 4 Assignment 
    cae6@njit.edu
 -->