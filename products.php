<?php
include 'database.php'; // Include database configuration

// Initialize variables
$search = '';
if (isset($_GET['search'])) {
    $search = $_GET['search'];
}

// Query to fetch products with optional search filter
$sql = "SELECT * FROM products";
if (!empty($search)) {
    // Add WHERE clause to filter products based on search input
    $sql .= " WHERE name LIKE '%$search%' OR description LIKE '%$search%'";
}
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Produk - Admin</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #993333;
            color: #333;
        }
        .container {
            width: 90%;
            margin: 20px auto;
            overflow: hidden;
            background: white;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .header {
            background-color: #990000;
            color: white;
            padding: 20px;
            text-align: center;
            margin-bottom: 20px;
        }
        .header img {
            vertical-align: middle;
        }
        .header h1 {
            display: inline-block;
            margin: 0 10px;
            font-size: 2em;
        }
        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 15px;
            text-align: left;
        }
        th {
            background-color: #990000;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        a {
            text-decoration: none;
            color: #0275d8;
        }
        a:hover {
            color: #01447e;
        }
        .add-btn, .checkout-btn, .search-btn {
            display: inline-block;
            margin-bottom: 10px;
            padding: 10px 20px;
            background-color: #006699;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            text-align: center;
            border: none;
            cursor: pointer;
        }

        .add-btn:hover, .checkout-btn:hover, .search-btn:hover {
            background-color: #814d4d;
        }

        .product-image {
            width: 100px;
            height: auto;
            display: block;
            margin: auto;
        }

        footer {
            background-color: #990000;
            color: white;
            text-align: center;
            padding: 10px;
            position: relative;
            bottom: 0;
            width: 100%;
            margin-top: 20px;
        }
    </style>
    <script>
        function checkStock(stokTersedia, productId) {
            if (stokTersedia <= 0) {
                alert('Stok Habis');
            } else {
                window.location.href = 'cart_action.php?action=add&id=' + productId;
            }
        }
    </script>
</head>
<body>
    <div class="header">
        <h1>Produk Kami</h1>
        <br/>
        <img src="GITAR/logo.png" height="100" alt="Logo"/>
        <img src="logo11-.png" height="130" alt="Logo"/>
        <img src="GITAR/11.png" height="100" alt="Logo"/>
    </div>
    <div class="container">
        <header style="text-align: right;">
            <form action="" method="GET">
                <input type="text" name="search" placeholder="Cari produk...">
                <button type="submit" class="search-btn">Cari</button>
            </form>
            <a href="checkout.php" class="checkout-btn">Checkout</a>
            <a href="keranjang.php" class="checkout-btn">Keranjang</a>
        </header>
        <table>
            <thead>
                <tr>
                    <th>Gambar Produk</th>
                    <th>Nama Produk</th>
                    <th>Deskripsi</th>
                    <th>Harga</th>
                    <th>Stok Tersedia</th>
                    <th>Tambah ke Keranjang</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($result->num_rows > 0): ?>
                    <?php while($row = $result->fetch_assoc()): ?>
                        <tr>
                            <td><img class="product-image" src="<?php echo htmlspecialchars($row['image']); ?>" alt="Product Image"></td>
                            <td><?= htmlspecialchars($row["name"]); ?></td>
                            <td><?= htmlspecialchars($row["description"]); ?></td>
                            <td>Rp<?= number_format($row["price"], 2, ',', '.'); ?></td>
                            <td><?= htmlspecialchars($row["stok_tersedia"]); ?></td>
                            <td>
                                <button 
                                    class="add-btn" 
                                    onclick="checkStock(<?= $row['stok_tersedia']; ?>, <?= $row['id']; ?>)"
                                >
                                    Tambah ke Keranjang
                                </button>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                <?php else: ?>
                    <tr><td colspan='6'>Belum ada produk yang ditambahkan.</td></tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
    <footer>
        <p>&copy; <?= date("Y"); ?> Guitar World. Semua hak dilindungi.</p>
    </footer>
</body>
</html>
