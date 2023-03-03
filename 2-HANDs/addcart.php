<?php

    session_start();
    require_once 'config/db.php';

    if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
    }

        $product_id = $_POST['product_id'];
        $quantity = $_POST['quantity'];

        $user_id = $_SESSION['user_id'];
        $stmt = $db->prepare("INSERT INTO cart (user_id, product_id, quantity) VALUES (?, ?, ?)");
        $stmt->execute([$user_id, $product_id, $quantity]);

        header("Location: product.php?id=$product_id");
        exit();

?>