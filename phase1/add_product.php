<?php
// DEBUGGING ONLY
// echo "<pre>";
// print_r($_POST);
// echo "</pre>";
// this is the add_product.php
// Get the product data
$category_id = filter_input(INPUT_POST, 'category_id', FILTER_VALIDATE_INT);
$code = filter_input(INPUT_POST, 'code');
$name = filter_input(INPUT_POST, 'name');
$description = filter_input(INPUT_POST, 'description');
$price = filter_input(INPUT_POST, 'price', FILTER_VALIDATE_FLOAT);
$colorTheme = filter_input(INPUT_POST, 'colorTheme'); 


// Validate inputs
if ($category_id == NULL || $category_id == FALSE || $code == NULL || $description == NULL ||$name == NULL || $price == NULL || $price == FALSE || $colorTheme == null) {
    $error = "Invalid product data. Check all fields and try again.";
    echo "$error <br>";
    // include('error.php');
} else {
    // TODO change to database_local.php or database_njit.php
    require_once('database_njit.php');

    // Add the product to the database  
    $query = 'INSERT INTO HomeDec
                 (HomeDecCategoryID, HomeDecCode, HomeDecName, description, price, ColorTheme, dateCreated)
              VALUES
                 (:category_id, :code, :name, :description, :price, :colorTheme, NOW())';
    $statement = $db->prepare($query);
    $statement->bindValue(':category_id', $category_id);
    $statement->bindValue(':code', $code);
    $statement->bindValue(':name', $name);
    $statement->bindValue(':description', $description);
    $statement->bindValue(':price', $price);
    $statement->bindValue(':colorTheme', $colorTheme);
    $success = $statement->execute();
    $statement->closeCursor();
    echo "<p>Your insert statement status is $success</p>";

}
?>
<p><a href="product.php">View Product List</a></p>
<!-- 
    Chizorom Ekweghariri
    3/1/2024
    IT202-006
    Phase 2 Assignment 
    cae6@njit.edu
 -->

 <!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>

</body>
</html>