<?php
include 'database.php';

$bulan = isset($_GET['bulan']) ? $_GET['bulan'] : date('Y-m');
$pimpinan = isset($_GET['pimpinan']) ? $_GET['pimpinan'] : '';

// Menggabungkan dan menjumlahkan jumlah produk dengan ID yang sama
$sql = "SELECT p.name, SUM(t.jumlah) as total_jumlah, DATE_FORMAT(t.tanggal, '%Y-%m') as bulan_tahun FROM transaksi t 
        JOIN products p ON t.product_id = p.id 
        WHERE DATE_FORMAT(t.tanggal, '%Y-%m') = ?
        GROUP BY p.name, bulan_tahun";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $bulan);
$stmt->execute();
$result = $stmt->get_result();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Stok - Guitar World</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f7f7f7;
            color: #333;
        }

        header {
            background-color: #990000;
            color: white;
            padding: 20px 0;
            text-align: center;
        }

        header h1 {
            margin: 0;
            font-size: 2em;
        }

        header p {
            margin: 5px 0;
        }

        nav ul {
            list-style-type: none;
            padding: 0;
            text-align: center;
            margin: 0;
        }

        nav ul li {
            display: inline;
            margin-right: 10px;
        }

        nav ul li a {
            text-decoration: none;
            padding: 8px 16px;
            background-color: #0056b3;
            color: white;
            border-radius: 4px;
            transition: background-color 0.3s;
        }

        nav ul li a:hover {
            background-color: #003f7f;
        }

        main {
            padding: 20px;
        }

        button {
            margin: 20px 0;
            padding: 10px 20px;
            background-color: #990000;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #cc0000;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: white;
        }

        table th, table td {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }

        table th {
            background-color: #f2f2f2;
            font-weight: bold;
        }

        table tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        table tr:hover {
            background-color: #f1f1f1;
        }

        footer {
            background-color: #990000;
            color: white;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        .signature {
            margin-top: 50px;
            text-align: right;
        }

        .signature p {
            margin: 0;
            padding: 0;
        }

        .signature p + p {
            margin-top: 10px;
        }

        /* Sembunyikan tombol saat cetak */
        @media print {
            button, nav, footer {
                display: none;
            }
            body {
                margin: 0;
                padding: 0;
            }
        }
    </style>
    <script>
        function printReport() {
            window.print();
        }
    </script>
</head>
<body>
<header>
    <h1>Guitar World</h1>
    <p>Alamat: Jl. Musik No. 123, Bukittinggi</p>
    <p>Telepon: (08)96-6187-81000 | Email: guitar_world@gmail.com</p>
</header>
<main>
    <h1>Laporan Bulanan</h1>
    <form method="get" id="form-input">
        <label for="bulan">Pilih Bulan:</label>
        <input type="month" id="bulan" name="bulan" value="<?php echo htmlspecialchars($bulan); ?>">
        <br><br>
        <label for="pimpinan">Nama Pimpinan:</label>
        <input type="text" id="pimpinan" name="pimpinan" value="<?php echo htmlspecialchars($pimpinan); ?>">
        <br><br>
        <button type="submit">Tampilkan</button>
    </form>
    <button onclick="printReport()">Cetak Laporan</button>

    <?php
    echo "<h2>Laporan Bulan " . date('F Y', strtotime($bulan)) . "</h2>";
    if ($result->num_rows > 0) {
        echo "<table><tr><th>Nama Produk</th><th>Jumlah</th><th>Bulan</th></tr>";
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>" . htmlspecialchars($row["name"]). "</td><td>" . htmlspecialchars($row["total_jumlah"]). "</td><td>" . htmlspecialchars($row["bulan_tahun"]). "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "<p>Tidak ada transaksi pada bulan ini.</p>";
    }

    if ($pimpinan) {
        echo "<div class='signature'>";
        echo "<h3>Disetujui oleh:</h3>";
        echo "<p><strong>" . htmlspecialchars($pimpinan) . "</strong></p>";
        echo "<br><br>";
        echo "<p>_________</p>";
        echo "<p>Tanda Tangan</p>";
        echo "</div>";
    }
    ?>

</main>
<footer>
    &copy; 2024 Guitar World. All Rights Reserved.
</footer>
</body>
</html>