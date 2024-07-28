<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak Kami</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #993333;
            color: #000000;
            line-height: 1.6;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            /* border: 1px solid #000; Menghapus garis tepi */
            border-radius: none;
            background-color: #f9f9f9;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .header {
            text-align: center;
            margin-bottom: 20px;
        }

        .header h1 {
            color: #990000;
            margin-bottom: 10px;
        }

        .header p {
            color: #000;
        }

        .guitar-image {
            width: 100%;
            height: auto;
            border-radius: 10px;
            margin-bottom: 20px;
        }

        .contact-info {
            margin-bottom: 20px;
        }

        .contact-info h2 {
            color: #990000;
            margin-bottom: 10px;
        }

        .contact-info p {
            margin-bottom: 5px;
            color: #000;
        }

        .contact-form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .contact-form label {
            color: #990000;
            font-weight: bold;
        }

        .contact-form input,
        .contact-form textarea {
            padding: 10px;
            border: gray;
            border-radius: none;
            font-size: 16px;
        }

        .contact-form button {
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #990000;
            color: #ffffff;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .contact-form button:hover {
            background-color: #660000;
        }
    </style>
</head>
<body>
    <div class="container">
        <header class="header">
            <h1>Kontak Kami</h1>
            <p>Hubungi kami untuk informasi lebih lanjut</p>
        </header>
        <main class="main-content">
            <center>
            <img src="GITAR/logo.png" height="100" alt="Logo"/><img src="logo11-.png" height="130" alt="Logo"/><img src="GITAR/11.png" height="100" alt="Logo"/>      
            </center>
            <div class="contact-info">
                <h2>Informasi Toko</h2>
                <p>Alamat : Jl. Musik No. 123, Bukittinggi</p>
                <p>Telepon: (08)96-6187-81000</p>
                <p>Email   : guitar_world@gmail.com</p>
            </div>
            <form action="process_contact.php" method="post" class="contact-form">
                <label for="name">Nama:</label>
                <input type="text" id="name" name="name" required>
                
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                
                <label for="message">Pesan:</label>
                <textarea id="message" name="message" rows="5" required></textarea>
                
                <button type="submit">Kirim</button>
            </form>
        </main>
    </div>
</body>
</html>
