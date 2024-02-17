<?php
    // Slide 65
    // get the data from the form
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $Str_add = $_POST['Str_add'];
    $ship_date = $_POST['ship_date'];
    $order_number = $_POST['order_number'];
    $state = filter_input(INPUT_POST, 'state', FILTER_SANITIZE_STRING);
    $city = $_POST['city'];
    $price = filter_input(INPUT_POST, 'price', FILTER_VALIDATE_FLOAT);
    $zip_code = filter_input(INPUT_POST, 'zip_code', FILTER_VALIDATE_INT);
    $length = filter_input(INPUT_POST, 'length', FILTER_VALIDATE_INT);
    $width = filter_input(INPUT_POST, 'width', FILTER_VALIDATE_INT);
    $height = filter_input(INPUT_POST, 'height', FILTER_VALIDATE_INT);
    $states = array("AL","AK","AZ","AR","CA","CO","CT","DE","DC","FL",
                "GA","HI","ID","IL","IN","IA","KS","KY","LA","ME",
                "MD","MA","MI","MN","MS","MO","MT","NE","NV","NH",
                "NJ","NM","NY","NC","ND","OH","OK","OR","PA","RI",
                "SC","SD","TN","TX","UT","VT","VA","WA","WV","WI","WY");

    $error_message = '';

    // validate price
    if ($price === FALSE) {
        $error_message = "Price must be a valid number.";
    } else if ($price >= 1000) {
        $error_message = "Price must be less than 1000.";
    }

    // Validate zip code
    if ($zip_code === FALSE) {
        $error_message = "Zip code must be a valid number.";
    } else if (!preg_match('/^\d{5}$/', $zip_code)) {
        $error_message = "Zip code must contain exactly 5 digits.";
    }

    // Validate length
    if ($length === FALSE) {
        $error_message = "Length must be a valid number.";
    } else if ($length >= 36) {
        $error_message = "Length must be less than 36.";
    }

    // Validate width
    if ($width === FALSE) {
        $error_message = "Width must be a valid number.";
    } else if ($width >= 36) {
        $error_message = "Width must be less than 36.";
    }

    // Validate height
    if ($height === FALSE) {
        $error_message = "Height must be a valid number.";
    } else if ($height >= 36) {
        $error_message = "Height must be less than 36.";
    }

    // Validate state
    if (!in_array($state, $states)) {
        $error_message = "Invalid State.";
    }

    if($error_message != '') {
        // Output the error message and exit
        echo $error_message;
        exit(); // This line should be placed here
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Shipping Label</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <main>
        <h1>Shipping Info</h1>
        <h2> From:</h2>
        <p> 360 Cranberry Blvd</p>
        <p> East Willow, NJ <p><br><br>
        <p> Shipping Company: FedEx <p>
        <h2> To:</h2>
        <label>First Name:</label>
        <span><?php echo htmlspecialchars($first_name); ?></span><br>
        <label>Last Name:</label>
        <span><?php echo htmlspecialchars($last_name); ?></span><br>
        <label>Street Address:</label>
        <span><?php echo htmlspecialchars($Str_add); ?></span><br>
        <label>City:</label>
        <span><?php echo htmlspecialchars($city); ?></span><br>
        <label>State:</label>
        <span><?php echo htmlspecialchars($state); ?></span><br>
        <label>Zip Code:</label>
        <span><?php echo htmlspecialchars($zip_code); ?></span><br>
        <h2> Product Info: </h2>
        <label>Ship Date:</label>
        <span><?php echo htmlspecialchars($ship_date); ?></span><br>
        <label>Order Number:</label>
        <span><?php echo htmlspecialchars($order_number); ?></span><br>
        <label>Price:</label>
        <span><?php echo htmlspecialchars($price); ?></span><br>
        <h4> Tracking Number: 8279744038038 </h4><br>
        <h3>Barcode</hr>
        <img src="barcode.png" alt="Barcode" width="260" height="145">
        <h3> Dimensions:</h3>
        <label>Length:</label>
        <span><?php echo htmlspecialchars($length); ?></span><br>
        <label>Width:</label>
        <span><?php echo htmlspecialchars($width); ?></span><br>
        <label>Height:</label>
        <span><?php echo htmlspecialchars($height); ?></span><br>
    </main>
</body>
<footer>
        <h6>
        <p>Chizorom Ekweghariri   2/16/2024   IT202-006  cae6@njit.edu </p>
</h6>
</footer>
</html>



