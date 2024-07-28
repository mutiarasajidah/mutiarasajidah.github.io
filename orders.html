<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Pesan Customer</title>
    <style>
       
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #993333;
            color: #000;
            line-height: 1.6;
            padding: 20px;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #ffffff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #990000;
        }

        .order-box {
            border: 1px solid #990000;
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 5px;
            border-color:black;
        }

        .order-box h3 {
            margin-bottom: 10px;
            color: #990000;
        }

        .order-box p {
            margin-bottom: 5px;
        }

        .filter {
            text-align: center;
            margin-bottom: 20px;
        }

        .filter select {
            padding: 8px;
            font-size: 16px;
            border: 1px solid #ddd;
            border-radius: 5px;
            cursor: pointer;
        }
       .button {
            margin: 20px 0;
            padding: 10px 20px;
            background-color: #990000;
            color: white;
            border: #990000;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;

        }button:hover {
            background-color: #990000;
        
        }

        .filter button {
            padding: 8px 15px;
            font-size: 16px;
            background-color: #990000;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-left: 10px;
        }

        .order-container {
            margin-top: 20px;
        }

        .order-items {
            margin-top: 10px;
            border-collapse: collapse;
            width: 100%;
        }

        .order-items th, .order-items td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
            border-color: black;
        }

        .order-items th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Laporan Pesan Customer</h1>

        <div class="filter">
            <label for="filter">Tampilkan:</label>
            <select id="filter">
                <option value="all">Semua</option>
                <option value="last_week">1 Minggu Terakhir</option>
                <option value="last_month">1 Bulan Terakhir</option>
            </select>
            <button onclick="filterMessages()">Terapkan</button>
        </div>

        <div class="order-container" id="orderContainer">
            <?php
            // Include konfigurasi database
            include 'database.php';

            // Query awal untuk mengambil semua data pesanan beserta detail produknya
            $sql = "SELECT o.order_id, o.name, o.address, o.phone, o.payment_method, o.total_price, o.order_date, oi.name AS item_name, oi.quantity, oi.price
                    FROM orders o
                    INNER JOIN order_items oi ON o.order_id = oi.order_id
                    ORDER BY o.order_date DESC";
            $result = $conn->query($sql);

            if ($result !== false && $result->num_rows > 0) {
                $currentOrderId = null;
                while($row = $result->fetch_assoc()) {
                    if ($row['order_id'] !== $currentOrderId) {
                        // Output box pesanan baru jika order_id berbeda
                        if ($currentOrderId !== null) {
                            echo '</table>';
                            echo '<button class="print-button" onclick="printResi(' . $currentOrderId . ')">Cetak Resi</button>';
                            echo '</div>'; // Close order-box
                        }
                        $currentOrderId = $row['order_id'];
                        
                        echo '<div class="order-box" id="orderBox' . $currentOrderId . '">';
                        echo '<h3>Detail Pesanan</h3>';
                        echo '<p><strong>Tanggal Order:</strong> ' . htmlspecialchars($row["order_date"]) . '</p>';
                        echo '<p><strong>Nama:</strong> ' . htmlspecialchars($row["name"]) . '</p>';
                        echo '<p><strong>Alamat:</strong> ' . htmlspecialchars($row["address"]) . '</p>';
                        echo '<p><strong>No HP:</strong> ' . htmlspecialchars($row["phone"]) . '</p>';
                        echo '<p><strong>Metode Pembayaran:</strong> ' . htmlspecialchars($row["payment_method"]) . '</p>';
                        

                        // Tabel untuk order items
                        echo '<table class="order-items">';
                        echo '<tr><th>Nama Produk</th><th>Jumlah</th><th>Harga</th></tr>';
                    }
                    
                    // Baris untuk setiap item
                    echo '<tr>';
                    echo '<td>' . htmlspecialchars($row["item_name"]) . '</td>';
                    echo '<td>' . htmlspecialchars($row["quantity"]) . '</td>';
                    echo '<td>Rp' . number_format($row["price"], 0, ',', '.') . '</td>';
                     echo '<p><strong>Total Harga:</strong> Rp' . number_format($row["total_price"], 0, ',', '.') . '</p>';
                    echo '</tr>';
                }
                // Tutup box terakhir
                echo '</table>';
                echo '<button class="print-button" onclick="printResi(' . $currentOrderId . ')">Cetak Resi</button>';
                echo '</div>'; // Close order-box
            } else {
                echo "Belum ada pesanan yang tersedia.";
            }

            // Tutup koneksi database
            $conn->close();
            ?>
        </div>
    </div>

    <script>
        function printResi(orderId) {
            var orderBoxId = 'orderBox' + orderId;
            var orderBox = document.getElementById(orderBoxId);

            if (orderBox) {
                var printWindow = window.open('', 'Print Resi', 'height=600,width=800');

                printWindow.document.write('<html><head><title>Resi Pesanan</title>');
                printWindow.document.write('</head><body>');
                printWindow.document.write('<h1>Resi Pesanan</h1>');
                printWindow.document.write(orderBox.innerHTML);
                printWindow.document.write('</body></html>');

                printWindow.document.close();
                printWindow.print();
                printWindow.close();
            } else {
                alert('Pesanan tidak ditemukan.');
            }
        }
    </script>
</body>
</html>

