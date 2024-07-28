<?php
session_start();
require 'database.php'; // Pastikan database.php terhubung dengan benar

if(isset($_POST['name'], $_POST['address'], $_POST['phone'], $_POST['payment_method'], $_SESSION['cart']) && !empty($_SESSION['cart'])) {
    // Data dari form checkout
    $name = $conn->real_escape_string($_POST['name']);
    $address = $conn->real_escape_string($_POST['address']);
    $phone = $conn->real_escape_string($_POST['phone']);
    $paymentMethod = $conn->real_escape_string($_POST['payment_method']);
    $totalPrice = 0;

    // Transaksi MySQL
    $conn->autocommit(FALSE);

    try {
        // Hitung total harga dari produk yang ada di keranjang
        foreach($_SESSION['cart'] as $productId => $item) {
            $quantity = $item['quantity'];
            $result = $conn->query("SELECT id, name, price, stok_awal, stok_tersedia, stok_terjual FROM products WHERE id = $productId FOR UPDATE");
            if($result->num_rows > 0) {
                $product = $result->fetch_assoc();
                $totalPrice += $product['price'] * $quantity;

                // Update stok dan stok terjual
                $newStokTersedia = $product['stok_tersedia'] - $quantity;
                $newStokTerjual = $product['stok_terjual'] + $quantity;
                
                // Update produk
                $updateProductQuery = "UPDATE products SET stok_tersedia = $newStokTersedia, stok_terjual = $newStokTerjual WHERE id = $productId";
                $conn->query($updateProductQuery);

                // Masukkan data ke dalam tabel transaksi
                $tanggal = date('Y-m-d');
                $insertTransaksiQuery = "INSERT INTO transaksi (order_id, product_id, name, jumlah, tanggal)
                                         VALUES (NULL, {$product['id']}, '{$product['name']}', $quantity, '$tanggal')";
                $conn->query($insertTransaksiQuery);
            } else {
                throw new Exception("Produk dengan ID $productId tidak ditemukan.");
            }
        }

        // Masukkan order ke dalam tabel orders
        $insertOrderQuery = "INSERT INTO orders (name, address, phone, payment_method, total_price, status)
                             VALUES ('$name', '$address', '$phone', '$paymentMethod', $totalPrice, 'pending')";
        
        if($conn->query($insertOrderQuery)) {
            $orderId = $conn->insert_id; // Mendapatkan ID order yang baru saja dimasukkan
            
            // Masukkan detail produk ke dalam tabel order_items
            foreach($_SESSION['cart'] as $productId => $item) {
                $quantity = $item['quantity'];
                $price = $item['price'];
                $productName = $conn->real_escape_string($item['name']);
                $insertDetailQuery = "INSERT INTO order_items (order_id, product_id, name, quantity, price)
                                      VALUES ($orderId, $productId, '$productName', $quantity, $price)";
                $conn->query($insertDetailQuery);
            }
            
            // Commit transaksi jika semua query berhasil
            $conn->commit();
            
            // Kosongkan keranjang belanja setelah checkout
            unset($_SESSION['cart']);
            
            echo "<script>alert('Pesanan Anda telah berhasil diproses.'); window.location.href = 'index.php';</script>";
        } else {
            throw new Exception("Gagal memasukkan order: " . $conn->error);
        }
    } catch (Exception $e) {
        // Rollback transaksi jika ada kesalahan
        $conn->rollback();
        echo "Error: " . $e->getMessage();
    } finally {
        // Set autocommit ke true lagi
        $conn->autocommit(TRUE);
    }
} else {
    header("Location: checkout.php");
    exit;
}
?>
