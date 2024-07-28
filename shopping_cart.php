<?php
session_start();
require 'database.php'; // Pastikan database.php terhubung dengan benar

if (isset($_POST['product_id'], $_POST['quantity']) && !empty($_POST['quantity'])) {
    $product_id = $_POST['product_id'];
    $quantity = $_POST['quantity'];

    // Ambil informasi produk dari database
    $result = $conn->query("SELECT * FROM products WHERE id_produk = $product_id");
    if ($result->num_rows > 0) {
        $product = $result->fetch_assoc();

        // Tambahkan produk ke session shopping cart
        if (!isset($_SESSION['shopping_cart'])) {
            $_SESSION['shopping_cart'] = array();
        }

        if (isset($_SESSION['shopping_cart'][$product_id])) {
            $_SESSION['shopping_cart'][$product_id]['quantity'] += $quantity;
        } else {
            $_SESSION['shopping_cart'][$product_id] = array(
                'id_produk' => $product['id_produk'],
                'name' => $product['name'],
                'price' => $product['price'],
                'quantity' => $quantity
            );
        }

        echo json_encode(array('status' => 'success', 'message' => 'Produk telah ditambahkan ke keranjang.'));
    } else {
        echo json_encode(array('status' => 'error', 'message' => 'Produk tidak ditemukan.'));
    }
} else {
    echo json_encode(array('status' => 'error', 'message' => 'Parameter tidak lengkap atau tidak valid.'));
}
?>
