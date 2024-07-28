<?php
session_start();
require 'database.php'; // Pastikan database.php terhubung dengan benar

// Function to format currency
function formatCurrency($amount) {
    return "Rp" . number_format($amount, 0, ',', '.');
}

// Proses untuk menghapus item dari keranjang jika tombol hapus ditekan
if (isset($_POST['hapus'])) {
    $id = $_POST['hapus'];
    if (isset($_SESSION['cart'][$id])) {
        unset($_SESSION['cart'][$id]);
    }
}

// Proses untuk mengupdate jumlah barang di keranjang jika tombol update ditekan
if (isset($_POST['update'])) {
    $id = $_POST['update'];
    $quantity = $_POST['quantity'][$id];

    // Pengecekan stok tersedia sebelum update
    $result = $conn->query("SELECT stok_tersedia FROM products WHERE id = $id");
    if ($result->num_rows > 0) {
        $product = $result->fetch_assoc();
        $stok_tersedia = $product['stok_tersedia'];

        if ($quantity <= $stok_tersedia) {
            if (isset($_SESSION['cart'][$id])) {
                $_SESSION['cart'][$id]['quantity'] = $quantity;
            }
        } else {
            echo "<script>alert('Maaf, stok produk tidak mencukupi untuk jumlah yang diminta.'); window.location.href = 'keranjang.php';</script>";
            exit;
        }
    }
}

// Perhitungan total harga produk yang dipilih
$totalSelected = 0;
if (!empty($_SESSION['cart'])) {
    foreach ($_SESSION['cart'] as $id => $item) {
        if (isset($item['name'], $item['price'], $item['quantity'])) {
            $subtotal = $item['price'] * $item['quantity'];
            $totalSelected += $subtotal;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keranjang Belanja - Guitar World</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #993333;
            color: #333;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 800px;
            margin: 40px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        h2 {
            color: #990000;
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #990000;
            font-size: 2.5em;
        }
        .cart-icon {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
        }
        .cart-icon img {
            width: 50px;
            height: auto;
            margin-right: 10px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            padding: 15px;
            border: 1px solid #ddd;
            text-align: left;
        }
        th {
            background-color: #990000;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        .total-price {
            text-align: right;
            margin-top: 20px;
            font-size: 1.5em;
            color: #990000;
        }
        .checkout-btn {
            display: block;
            background-color: #990000;
            color: white;
            padding: 15px 20px;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            text-align: center;
            margin: 20px auto;
            transition: background-color 0.3s;
            width: 50%;
            font-size: 1.2em;
        }
        .checkout-btn:hover {
            background-color: #770000;
        }
        footer {
            background-color: #990000;
            color: white;
            text-align: center;
            padding: 10px;
            position: relative;
            margin-top: 40px;
            width: 100%;
        }
        /* Tombol centang */
        .checkbox-container {
            text-align: center;
            margin-bottom: 20px;
        }
        .checkbox-container input[type="checkbox"] {
            display: none;
        }
        .checkbox-label {
            display: inline-block;
            border: 2px solid #990000;
            background-color: white;
            color: #990000;
            padding: 10px 20px;
            font-size: 1em;
            cursor: pointer;
            transition: background-color 0.3s, color 0.3s;
        }
        .checkbox-label:hover {
            background-color: #990000;
            color: white;
        }
        .checkbox-label.checked {
            background-color: #990000;
            color: white;
        }
        .quantity-input {
            width: 50px;
        }
        .action-buttons {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .action-buttons button {
            margin-left: 5px;
            background-color: #990000;
            color: white;
            border: none;
            padding: 8px 12px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .action-buttons button:hover {
            background-color: #770000;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Keranjang Belanja</h2>
        <img src="GITAR/logo.png" height="100" alt="Logo"/><img src="logo11-.png" height="130" alt="Logo"/><img src="GITAR/11.png" height="100" alt="Logo"/></br>
        <form action="keranjang.php" method="post"> <!-- Form untuk pengiriman data -->
            <table>
                <thead>
                    <tr>
                        <th>Nama Produk</th>
                        <th>Harga</th>
                        <th>Kuantitas</th>
                        <th>Total</th>
                        <th>Pilih</th> <!-- Kolom tambahan untuk checkbox -->
                        <th>Hapus</th> <!-- Kolom tambahan untuk tombol hapus -->
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (!empty($_SESSION['cart'])) {
                        foreach ($_SESSION['cart'] as $id => $item) {
                            if (isset($item['name'], $item['price'], $item['quantity'])) {
                                $subtotal = $item['price'] * $item['quantity'];
                                echo "<tr>
                                    <td>{$item['name']}</td>
                                    <td>Rp" . number_format($item['price'], 0, ',', '.') . "</td>
                                    <td>
                                        <input type='number' class='quantity-input' name='quantity[$id]' value='{$item['quantity']}' min='1' onchange='updateQuantity(this, $id)'>
                                        <button type='submit' name='update' value='$id'>Update</button>
                                    </td>
                                    <td id='subtotal-$id'>Rp" . number_format($subtotal, 0, ',', '.') . "</td>
                                    <td><input type='checkbox' name='checkout[]' value='$id' onchange='calculateTotalPrice()'></td>
                                    <td>
                                        <div class='action-buttons'>
                                            <button type='submit' name='hapus' value='$id'>Hapus</button>
                                        </div>
                                    </td>
                                </tr>";
                            } else {
                                echo "<tr><td colspan='6'>Data produk tidak lengkap</td></tr>";
                            }
                        }
                    } else {
                        echo "<tr><td colspan='6'>Keranjang kosong</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
            
            <div class="total-price">
                <p>
                    Total: <span id="total-price"><?= formatCurrency($totalSelected); ?></span>
                </p>
            </div>

            <button type="submit" class="checkout-btn">Checkout</button>
        </form>
    </div>
    <footer>
        &copy; 2024 Guitar World. All rights reserved.
    </footer>
    
    <!-- Script untuk handle centang semua -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const checkboxes = document.querySelectorAll('input[name="checkout[]"]');
            const totalPriceElement = document.getElementById('total-price');

            function calculateTotalPrice() {
                let total = 0;
                checkboxes.forEach(checkbox => {
                    if (checkbox.checked) {
                        const row = checkbox.parentElement.parentElement;
                        const price = parseFloat(row.cells[1].innerText.replace('Rp', '').replace(/\./g, '').replace(',', '.'));
                        const quantity = parseInt(row.cells[2].querySelector('input.quantity-input').value);
                        const subtotal = price * quantity;
                        total += subtotal;
                    }
                });
                totalPriceElement.innerText = `Rp${total.toLocaleString('id-ID')}`;
            }

            checkboxes.forEach(checkbox => {
                checkbox.addEventListener('change', calculateTotalPrice);
            });

            window.updateQuantity = function(input, id) {
                const quantity = input.value;
                const price = parseFloat(document.querySelector(`#subtotal-$id`).innerText.replace('Rp', '').replace(/\./g, '').replace(',', '.')) / quantity;
                const newSubtotal = price * quantity;
                document.querySelector(`#subtotal-$id`).innerText = `Rp${newSubtotal.toLocaleString('id-ID')}`;

                calculateTotalPrice();
            };
        });
    </script>
</body>
</html>
