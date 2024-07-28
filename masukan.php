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

        .message-box {
            border: 1px solid #ddd;
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 5px;
        }

        .message-box h3 {
            margin-bottom: 10px;
            color: #990000;
        }

        .message-box p {
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

        .message-container {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
<center>
	<img src="GITAR/logo.png" height="100" alt="Logo"/><img src="logo11-.png" height="130" alt="Logo"/><img src="GITAR/11.png" height="100" alt="Logo"/>
</center>
        <h1>Laporan Pesan dan Masukan</h1>

        <div class="filter">
            <label for="filter">Tampilkan:</label>
            <select id="filter">
                <option value="all">Semua</option>
                <option value="last_week">1 Minggu Terakhir</option>
                <option value="last_month">1 Bulan Terakhir</option>
            </select>
            <button onclick="filterMessages()">Terapkan</button>
        </div>

        <div class="message-container" id="messageContainer">
            <?php
            // Include konfigurasi database
            include 'database.php';

            // Query awal untuk mengambil semua data pesan
            $sql = "SELECT name, email, message, tanggal FROM contact_info ORDER BY tanggal";
            $result = $conn->query($sql);

            if ($result !== false && $result->num_rows > 0) {
                // Output data dari setiap baris
                while($row = $result->fetch_assoc()) {
                    echo '<div class="message-box">';
                    echo '<h3>Pesan Masuk</h3>';
                    echo '<p><strong>Tanggal:</strong> ' . htmlspecialchars($row["tanggal"]) . '</p>';
                    echo '<p><strong>Nama:</strong> ' . htmlspecialchars($row["name"]) . '</p>';
                    echo '<p><strong>Email:</strong> ' . htmlspecialchars($row["email"]) . '</p>';
                    echo '<p><strong>Pesan:</strong> ' . htmlspecialchars($row["message"]) . '</p>';
                    echo '</div>';
                }
            } else {
                echo "Belum ada pesan yang diterima.";
            }

            // Tutup koneksi database
            $conn->close();
            ?>
        </div>
    </div>

    <script>
        function filterMessages() {
            var filter = document.getElementById('filter').value;
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById('messageContainer').innerHTML = this.responseText;
                }
            };
            xhttp.open("GET", "filter_messages.php?filter=" + filter, true);
            xhttp.send();
        }
    </script>
</body>
</html>
