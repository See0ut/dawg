<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        .cart-icon {
            cursor: pointer;
            font-size: 24px;
        }
        .message {
            display: none;
            color: green;
            font-size: 18px;
        }
    </style>

    <script>
        function addToCart(imageUrl) {
            document.getElementById('message').style.display = 'block';
            setTimeout(function() {
                window.location.href = 'shop.php?img=' + encodeURIComponent(imageUrl);
            }, 1000); // Redirect after 1 second
        }
    </script>
</head>
<body>
    <div class="cart-icon" onclick="addToCart('img/dsa.jpg')">🛒</div> <!-- Replace 'img/sample.jpg' with the actual image URL -->
    <div id="message" class="message">Added to cart</div>
</body>
</html>