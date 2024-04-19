<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Chizi's HOME DECOR">
    <link rel="stylesheet" href="main.css">
    <title>CHIZI'S HOME DEC</title>
</head>
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
  <li><a class="active" href="home.php">HOME</a></li>
  <li><a href="product2.php">PRODUCTS</a></li>
  <li><a href="ship2.php">SHIPPING</a></li>
  <li><a href="add_product_forms2.php">ADD PRODUCTS</a></li>
  <li><a href="login.php">LOGIN</a></li>
    </ul>
  <?php 
  } 
  ?>
  <a href="login.php">Login</a>
</nav>
        
    </header>
    
    <h1> ABOUT CHIZI'S HOME DEC</h1>

    <?php
        echo "Hello and welcome to Chizi's Home Decor storewhere you'll find everything you need to bring your surroundings to life.
    On February 16, 2024 Home Decor officially began it's legacy. Our main purpose for starting surrounded around us wanting create an easier way for 
    people to buy home decorative goods ,unique to our customers very specific needs. Our bestseller items include handmade wall art, table lamps, decorative vases, throw pillows and area rugs. So 
    explore and let us help you turn your house into home. " ;
    ?>

    

<figure>
  <img src="images/wall_art.png" alt="Wall Art" style="width:30%">
  <figcaption>WALL ART</figcaption>
</figure>


<figure>
  <img src="images/rug.png" alt="Area Rug" style="width:30%">
  <figcaption>AREA RUG</figcaption>
</figure>

<figure>
  <img src="images/vases.png" alt="Vase" style="width:30%">
  <figcaption>VASE</figcaption>
</figure>


<figure>
  <img src="images/lamp.png" alt="Lamp" style="width:30%">
  <figcaption>LAMP</figcaption>
</figure>


<figure>
  <img src="images/pillows.png" alt="Pillow" style="width:30%">
  <figcaption>THROW PILLOW</figcaption>
</figure>

 <footer>
        <h6>
        <p>Chizorom Ekweghariri   2/16/2024   IT202-006  cae6@njit.edu </p>
</h6>
</footer>
<!-- 
    Chizorom Ekweghariri
    3/1/2024
    IT202-006
    Phase 2 Assignment 
    cae6@njit.edu
 -->
</body>

</html>
