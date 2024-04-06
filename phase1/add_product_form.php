<?php
// TODO Change to database_local.php or database_njit.php
require_once('database_njit.php');

$query = 'SELECT *
          FROM HomeDecCategories
          ORDER BY HomeDecCategoryID';
$statement = $db->prepare($query);
$statement->execute();
$categories = $statement->fetchAll();
$statement->closeCursor();
?>
<!DOCTYPE html>
<html>

<!-- the head section -->
<head>
    <title>Chizi's Home Dec</title>
    <link rel="stylesheet" href="style.css">
</head>


<!-- the body section -->
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
        <li><a href="product.php">PRODUCTS</a></li>

        <li><a class="active" href="add_product_form.php">ADD PRODUCTS</a></li>
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
    <a class="active" href="home.php">HOME</a>
    <a href="product2.php">PRODUCTS</a>
    <a href="login.php">Login</a>
  <?php 
  } 
  ?>
</nav>
        
    </header>

    <main>
        <h1>Add Product</h1>
        <form action="add_product.php" method="post"
              id="add_product_form">

            <label>Category:</label>
            <select name="category_id">
            <?php foreach ($categories as $category) : ?>
                <option value="<?php echo $category['HomeDecCategoryID']; ?>">
                    <?php echo $category['HomeDecCategoryName']; ?>
                </option>
            <?php endforeach; ?>
            </select>
            <br>
            <label>Code:</label>
            <input type="text" name="code"><br>

            <label>Name:</label>
            <input type="text" name="name"><br>

            <label>Description:</label> 
            <textarea name="description"></textarea><br>

            <label>List Price:</label>
            <input type="text" name="price"><br>

            <label>Color Theme:</label>
            <input type="text" name="colorTheme"><br>

            <input type="submit" value="Add Product"><br>
        </form>
        <p><a href="product.php">View Product List</a></p>
    </main>

    <footer>
        <p>&copy; <?php echo date('Y'); ?> Chizi's Home Dec Store, Inc.</p>
    </footer>
</body>
</html>
<!-- 
    Chizorom Ekweghariri
    3/22/2024
    IT202-006
    Phase 2 Assignment 
    cae6@njit.edu
 -->