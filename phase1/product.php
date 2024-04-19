<?php
// TODO use database_local.php OR database_njit.php
require_once('database_njit.php');

// Get category ID
$category_id = filter_input(INPUT_GET, 'category_id', FILTER_VALIDATE_INT);
if ($category_id == NULL || $category_id == FALSE) {
  $category_id = 1;
}

// Get name for selected category
$queryCategory = 'SELECT * FROM HomeDecCategories
          WHERE HomeDecCategoryID = :category_id';
$statement1 = $db->prepare($queryCategory);
$statement1->bindValue(':category_id', $category_id);
$statement1->execute();
$category = $statement1->fetch();
$category_name = $category['HomeDecCategoryName'];
$statement1->closeCursor();

// Get all categories
$queryAllCategories = 'SELECT * FROM HomeDecCategories
             ORDER BY HomeDecCategoryID';
$statement2 = $db->prepare($queryAllCategories);
$statement2->execute();
$categories = $statement2->fetchAll();
$statement2->closeCursor();

// Get products for selected category
$queryProducts = 'SELECT * FROM HomeDec
          WHERE HomeDecCategoryID = :category_id
          ORDER BY HomeDecID';
$statement3 = $db->prepare($queryProducts);
$statement3->bindValue(':category_id', $category_id);
$statement3->execute();
$HomeDec = $statement3->fetchAll();
// DEBUGGING ONLY
// echo "<pre>";
// print_r($products);
// echo "</pre>";
// DEBUGGING ONLY
$statement3->closeCursor();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Shipping Page</title>
    <link rel="stylesheet" href="style.css">
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
        <li><a class="active" href="product.php">PRODUCTS</a></li>
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
    <a class="active" href="home.php">HOME</a>
    <a class="active" href="product2.php">PRODUCTS</a>
    <a href="login.php">Login</a>
  <?php 
  } 
  ?>
</nav>
  </aside>
  <h1>Product List</h1>
  <aside >
    <!-- display a list of categories -->
    <h2>Categories</h2>
    <nav>
    <ul>
      <?php foreach ($categories as $category) : ?>
      <li>
        <a href="?category_id=<?php 
            echo $category['HomeDecCategoryID']; 
            ?>">
          <?php echo $category['HomeDecCategoryName']; ?></a>
      </li>
      <?php endforeach; ?>
    </ul>
    </nav>       
  </aside>

  <section>
    <!-- display a table of products -->
    <h2><?php echo $category_name; ?></h2>
    <table>
      <tr>
        <th>Code</th>
        <th>Name</th>
        <th>Description</th>
        <th>Price</th>
        <th>Color Theme</th>

        <th> </th>
      </tr>

      <?php foreach ($HomeDec as $product) : ?>
      <tr>
        <td>
        <a href="product_details.php?product_id=<?php echo $product['HomeDecID']; ?>">
            <?php echo $product['HomeDecCode']; ?>
        </a>
    </td>
        
        <td><?php echo $product['HomeDecName']; ?></td>
        <td><?php echo $product['description']; ?></td>
        <td><?php echo $product['price']; ?></td>
        <td><?php echo $product['ColorTheme']; ?></td>
        <td>
          <form action="delete_product.php" method="post">
            <input type="hidden" name="product_id"
              value="<?php echo $product['HomeDecID']; ?>" />
            <input type="hidden" name="category_id"
              value="<?php echo $product['HomeDecCategoryID']; ?>" />
            <input type="submit" value="Delete" onclick="return confirmDelete();"/>
          </form>
        </td>
        
      </tr>
      <?php endforeach; ?>      
    </table>
    <p><a href="add_product_form.php">Add Product</a></p>
  </section>
</main>  
<footer>
        <h6>
        <p>Chizorom Ekweghariri   3/1/2024   IT202-006  cae6@njit.edu </p>
</h6>
</footer>

<script>
    function confirmDelete() {
        return confirm("Are you sure you want to delete this item?");
    }
    </script>

</body>
</html>
<!-- 
    Chizorom Ekweghariri
    4/5/2024
    IT202-006
    Phase 4 Assignment 
    cae6@njit.edu
 -->
 