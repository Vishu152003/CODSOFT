<!DOCTYPE html>
<html>
<head>
    <title>Product List</title>
</head>
<body>
    <h2>Product List</h2>
    <?php
    include 'includes/db.php';

    $sql = "SELECT * FROM products";
    $result = $conn->query($sql);

    while ($row = $result->fetch_assoc()) {
        echo "<div class='product'>";
        echo "<h3>" . $row['name'] . "</h3>";
        echo "<p>Price: $" . $row['price'] . "</p>";
        echo "<form action='cart.php' method='post'>";
        echo "<input type='hidden' name='product_id' value='" . $row['id'] . "'>";
        echo "<input type='number' name='quantity' value='1' min='1'>";
        echo "<button type='submit'>Add to Cart</button>";
        echo "</form>";
        echo "</div>";
    }

    $conn->close();
    ?>
</body>
</html>
