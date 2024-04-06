<?php
  // Slide 37
  // Use database_local.php OR database_njit.php
  require_once('database_njit.php');

  // Get IDs
  $product_id = filter_input(INPUT_POST, 'product_id', FILTER_VALIDATE_INT);
  $category_id = filter_input(INPUT_POST, 'category_id', FILTER_VALIDATE_INT);

  if ($product_id != FALSE && $category_id != FALSE) {
    $query = 'DELETE FROM HomeDec WHERE HomeDecID = :product_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':product_id', $product_id);
    $success = $statement->execute();
    $statement->closeCursor();
    echo "<p>Your delete statement status is $success</p>";
  }
  include('product.php');
?>
<!-- 
    Chizorom Ekweghariri
    4/5/2024
    IT202-006
    Phase 4 Assignment 
    cae6@njit.edu
 -->