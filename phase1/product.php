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
</head>
    <div id="navigation">
        <ul>
            <li><a href="home.php">HOME</a></li>
            <li><a href="ship.php">SHIPPING</a></li>
            <li><a class= "active" href="product.php">PRODUCTS</a></li>
        </ul>
    </div>
<!-- the body section -->
<body>
<main>
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
        <td><?php echo $product['HomeDecCode']; ?></td>
        <td><?php echo $product['HomeDecName']; ?></td>
        <td><?php echo $product['description']; ?></td>
        <td><?php echo $product['price']; ?></td>
        <td><?php echo $product['ColorTheme']; ?></td>
        
      </tr>
      <?php endforeach; ?>      
    </table>
  </section>
</main>  
<footer>
        <h6>
        <p>Chizorom Ekweghariri   3/1/2024   IT202-006  cae6@njit.edu </p>
</h6>
</footer>
</body>
</html>
<!-- 
    Chizorom Ekweghariri
    3/1/2024
    IT202-006
    Phase 2 Assignment 
    cae6@njit.edu
 -->
 