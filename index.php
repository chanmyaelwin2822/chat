<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    <script src="assets/script.js" defer></script>
    <title>E-commerce App</title>
</head>
<body>
    <h1>Welcome to Our E-commerce Store</h1>
    <div class="product-list">
        <?php
        $products = json_decode(file_get_contents("products.json"), true);
        foreach ($products as $product) {
            echo '<div class="product">';
            echo '<img src="' . $product["image"] . '" alt="' . $product["name"] . '">';
            echo '<h2>' . $product["name"] . '</h2>';
            echo '<p>' . $product["description"] . '</p>';
            echo '<span>$' . $product["price"] . '</span>';
            echo '<button class="add-to-cart" data-id="' . $product["id"] . '">Add to Cart</button>';
            echo '</div>';
        }
        ?>
    </div>
</body>
</html>
