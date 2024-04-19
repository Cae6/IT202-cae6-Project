
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



</html>

<?php 
require_once('database_njit.php');

$product_id = isset($_GET['product_id']) ? $_GET['product_id'] : null;


if (!$product_id) {
    echo "Error: Product ID isn't in the URL.";
    exit;
}
// product details
$queryProducts = 'SELECT * FROM HomeDec
          WHERE HomeDecID = :product_id';
$statement3 = $db->prepare($queryProducts);
$statement3->bindValue(':product_id', $product_id);
$statement3->execute();
$product = $statement3->fetch();

// display 


echo "<h1>Product Details</h1>";
echo "<p> Product Code: ";
echo $product['HomeDecCode'] ;
echo "</p>";
echo "<p>Product Name:";
echo $product['HomeDecName'];
echo "</p>";
echo "<p> Product Description:";
echo $product['description'];
echo " </p>";
echo "<p> Product Price:";
echo $product['price'];
echo " </p>";
echo "<p> Product ColorTheme:";
echo  $product['ColorTheme'];
echo "</p>";




?>


<link rel="stylesheet" href="style2.css">



<ul id="image_list">
  <li><img src="photos/<?php echo $product_id; ?>.png" width="300" height="290" id="1" /></li>
  
</ul>


<script src="https://code.jquery.com/jquery-3.7.1.slim.min.js" integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8=" crossorigin="anonymous"></script>
<script>
$(document).ready(() => {
    // process each img tag
    $("#image_list img").each((index, img) => {
        // mouse over event
        $(img).mouseover(function() {
            const src = $(this).attr('src');
            const new_src = src.replace(".png", "-bw.png");
            $(this).attr('src', new_src);
        });

        // mouse out event
        $(img).mouseout(function() {
            // get the 'src' attribute
            const src = $(this).attr('src');
            // replace bw with color
            const new_src = src.replace("-bw.png", ".png");
            $(this).attr('src', new_src);
        });
    });
});





</script>
<!-- 
    Chizorom Ekweghariri
    4/19/2024
    IT202-006
    Phase 5  Assignment 
    cae6@njit.edu
 -->