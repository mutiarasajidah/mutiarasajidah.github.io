<?php
session_start();
include 'database.php'; // Include database configuration

if (isset($_GET['action']) && $_GET['action'] == 'add' && isset($_GET['id'])) {
    $product_id = intval($_GET['id']);
    
    // Fetch product details
    $sql = "SELECT * FROM products WHERE id = $product_id";
    $result = $conn->query($sql);
    
    if (!$result) {
        die("Query gagal: " . $conn->error);
    }
    
    $product = $result->fetch_assoc();
    
    if (!$product) {
        die("Produk tidak ditemukan!");
    }
    
    // Check if product is available in stock
    if ($product['stok_tersedia'] <= 0) {
        die("Stok untuk produk ini sudah habis.");
    }
    
    // Add product to cart session
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }
    
    if (isset($_SESSION['cart'][$product_id])) {
        $_SESSION['cart'][$product_id]['quantity']++;
    } else {
        $_SESSION['cart'][$product_id] = [
            'id' => $product['id'],
            'name' => $product['name'],
            'price' => $product['price'],
            'quantity' => 1
        ];
    }
    
    // Redirect to keranjang.php
    header('Location: keranjang.php');
    exit();
}
?>
