<?php
session_start();
include 'includes/db.php';

// Initialize the wishlist session variable if it doesn't exist
if (!isset($_SESSION['wishlist'])) {
    $_SESSION['wishlist'] = [];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $product_id = $_POST['product_id'];

    // Add the product ID to the wishlist session variable
    if (!in_array($product_id, $_SESSION['wishlist'])) {
        $_SESSION['wishlist'][] = $product_id;
    }
}

$sql = "SELECT * FROM products WHERE id IN (" . implode(",", $_SESSION['wishlist']) . ")";
$result = $conn->query($sql);
$wishlist_products = $result->fetch_all(MYSQLI_ASSOC);

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Wishlist</title>
</head>
<body>
    <h2>Wishlist</h2>
    <?php
    if (empty($wishlist_products)) {
        echo "<p>Your wishlist is empty.</p>";
    } else {
        echo "<ul>";
        foreach ($wishlist_products as $product) {
            echo "<li>" . $product['name'] . " - $" . $product['price'] . "</li>";
        }
        echo "</ul>";
    }
    ?>
</body>
</html>
