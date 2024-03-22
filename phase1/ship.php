<?php
    if (!isset($first_name)) { $first_name = ''; }
    if (!isset($last_name)) { $last_name = ''; }
    if (!isset($Str_add)) { $Str_add = ''; }
    if (!isset($city)) { $city = ''; }
    if (!isset($state)) { $state = ''; }
    if (!isset($zip_code)) { $zip_code = ''; }
    if (!isset($ship_date)) { $ship_date = ''; }
    if (!isset($order_number)) { $order_number = ''; }
    if (!isset($price)) { $price = ''; }
    if (!isset($length)) { $length = ''; }
    if (!isset($width)) { $width = ''; }
    if (!isset($height)) { $height = ''; }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Shipping Page</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <div id="navigation">
        <ul>
            <li><a href="home.php">HOME</a></li>
            <li><a class= "active" href="ship.php">SHIPPING</a></li>
            <li><a href="product.php">PRODUCTS</a></li>
            <li><a href="add_product_form.php">ADD PRODUCTS</a></li>
        </ul>
    </div>

    <form action="ship_results.php" method="post">
        <label>First name:</label>
        <input type="text" name="first_name" value="<?php echo htmlspecialchars($first_name); ?>"><br>
        <label>Last name: </label>
        <input type="text" name="last_name" value="<?php echo htmlspecialchars($last_name); ?>"><br>
        <label>Street Address:</label>
        <input type="text" name="Str_add" value="<?php echo htmlspecialchars($Str_add); ?>"><br>
        <label> City: </label>
        <input type="text" name="city" value="<?php echo htmlspecialchars($city); ?>"><br>
        <label> State: </label>
        <input type="text" name="state" value="<?php echo htmlspecialchars($state); ?>"><br>
        <label> Zip Code: </label>
        <input type="text" name="zip_code" value="<?php echo htmlspecialchars($zip_code); ?>"><br>
        <label> Ship Date: </label>
        <input type="date" name="ship_date" value="<?php echo htmlspecialchars($ship_date); ?>"><br>
        <label> Order Number: </label>
        <input type="text" name="order_number" value="<?php echo htmlspecialchars($order_number); ?>"><br>
        <label> Price: </label>
        <input type="text" name="price" value="<?php echo htmlspecialchars($price); ?>"><br>
        <label> Length: </label>
        <input type="text" name="length" value="<?php echo htmlspecialchars($length); ?>"><br>
        <label> Width: </label>
        <input type="text" name="width" value="<?php echo htmlspecialchars($width); ?>"><br>
        <label> Height: </label>
        <input type="text" name="height" value="<?php echo htmlspecialchars($height); ?>"><br>
        <label>&nbsp;</label>
        <input type="submit" value="Submit">
    </form>
    <footer>
        <h6>
        <p>Chizorom Ekweghariri   2/16/2024   IT202-006  cae6@njit.edu </p>
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
 
