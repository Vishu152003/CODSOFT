<?php
session_start();
include 'includes/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $product_id = $_POST['product_id'];
    $quantity = $_POST['quantity'];
    $user_id = $_SESSION['user_id']; // You should manage user authentication

    $sql = "INSERT INTO cart (product_id, quantity, user_id) VALUES ('$product_id', '$quantity', '$user_id')";
    if ($conn->query($sql) === TRUE) {
        header("Location: inde.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
