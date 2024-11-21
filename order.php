<?php
// Include the cart.php file
include 'cart.php';

// Check if an image URL is passed via GET request
if (isset($_GET['image'])) {
    $imageUrl = 'img/' . $_GET['image'];
} else {
    $imageUrl = 'img/ads.jpg'; // Default image if none is provided
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Page</title>
    <style>
        body {
            background-color: black;
            color: white; /* Optional: to make text readable on black background */
        }
    </style>
</head>
<body>
    <h1>Order Page</h1>
    <div>
        <img src="<?php echo htmlspecialchars($imageUrl); ?>" alt="Selected Image">
    </div>
</body>
</html>