<?php
session_start();
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout - Guitar World</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color :#993333;
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
        h2{
            color :#990000;
            text-align: center;
        }
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #990000;
            font-size: 2.5em;
        }
        form {
            display: flex;
            flex-direction: column;
            padding: 20px;
        }
        label {
            margin-bottom: 10px;
            font-weight: bold;
        }
        input, select, textarea {
            margin-bottom: 20px;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            width: calc(100% - 22px); /* Adjusted to account for padding and borders */
        }
        .checkout-btn {
            background-color: #990000;
            color: white;
            padding: 15px 20px;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            text-align: center;
            transition: background-color 0.3s;
            width: 100%;
            font-size: 1.2em;
            cursor: pointer;
        }
        .checkout-btn:hover {
            background-color: #770000;
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
        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px;
            position: relative;
            margin-top: 40px;
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Checkout</h2>
        <center>
            <img src="GITAR/logo.png" height="100" alt="Logo"/><img src="logo11-.png" height="130" alt="Logo"/><img src="GITAR/11.png" height="100" alt="Logo"/>
        </center>
        <form method="post" action="process_checkout.php">
            <label for="name">Nama:</label>
            <input type="text" id="name" name="name" required>

            <label for="address">Alamat:</label>
            <textarea id="address" name="address" rows="4" required></textarea>

            <label for="phone">No HP:</label>
            <input type="text" id="phone" name="phone" required>

            <label for="payment_method">Metode Pembayaran:</label>
            <select id="payment_method" name="payment_method" required>
                <option value="credit_card">Kartu Kredit</option>
                <option value="bank_transfer">Transfer Bank</option>
                <option value="cash_on_delivery">Bayar di Tempat</option>
            </select>

            <h2>Barang yang akan di-checkout:</h2>
            <table>
                <thead>
                    <tr>
                        <th>Nama Produk</th>
                        <th>Produk</th>
                        <th>Jumlah</th>
                        <th>Harga</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $total = 0;
                    if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
                        foreach ($_SESSION['cart'] as $id => $item) {
                            $name = htmlspecialchars($item['name'], ENT_QUOTES, 'UTF-8');
                            $quantity = htmlspecialchars($item['quantity'], ENT_QUOTES, 'UTF-8');
                            $price = htmlspecialchars($item['price'], ENT_QUOTES, 'UTF-8');
                            echo "<tr>";
                            echo "<td>$name</td>"; if (isset($item['image'])) {
                            $image = htmlspecialchars($item['image'], ENT_QUOTES, 'UTF-8');
                        echo '<td><img class="product-image" src="' . $id . '" alt="Product Image"></td>';
                    } else {
                        echo '<td>Gambar Tidak Tersedia</td>';
                    }
                            echo "<td>$quantity</td>";
                            echo "<td>Rp" . number_format($price, 0, ',', '.') . "</td>";
                            echo "</tr>";
                            $total += $item['quantity'] * $item['price'];
                        }
                    } else {
                        echo "<tr><td colspan='4'>Keranjang Anda kosong.</td></tr>";
                    }
                    ?>
                </tbody>
                <tfoot>
                    <tr>
                        <th colspan="3">Total:</th>
                        <td>Rp<?php echo number_format($total, 0, ',', '.'); ?></td>
                    </tr>
                </tfoot>
            </table>

            <button type="submit" class="checkout-btn">Submit</button>
        </form>
    </div>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> Guitar World. Semua hak dilindungi.</p>
    </footer>
</body>
</html>
