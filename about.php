<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">        
    <title> Tentang Kami - Guitar World</title>
    <link rel="stylesheet" href="assets/css/style.css"> <!-- Sesuaikan path sesuai dengan struktur folder Anda -->
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #993333;
            color: #333;
        }
        header {
            background-color: #990000;
            color: white;
            text-align: center;
            padding: 20px 0;
            margin-bottom: 20px;
        }
        .about-us {
            max-width: 800px;
            margin: auto;
            padding: 20px;
            background-color: white;
            /* border-radius: 5px; */ /* Hapus properti border-radius */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: justify;
        }
        .about-us h1 {
            font-family: Cambria, serif;
            margin-bottom: 20px;
            color: white;
            background-color: #990000;
            padding: 10px;
        }
        .about-us p {
            margin-bottom: 20px;
            line-height: 1.6;
        }
        .about-us a {
            color: #99000;
            text-decoration: none;
            font-weight: bold;
        }
        .about-us a:hover {
            text-decoration: underline;
        }
        #jam {
            font-size: 20px;
            font-weight: bold;
            margin-top: 20px;
        }
        .image-container {
            position: relative;
            width: 100%;
            overflow: hidden;
            height: 300px; /* Sesuaikan dengan ukuran gambar */
        }
        .image-container img {
            width: 100%;
            height: auto;
            position: absolute;
            opacity: 0;
            transition: opacity 1s ease-in-out;
        }
    </style>
</head>
<body>
    <main>
        <section class="about-us">
        <center>
            <h1> <img src="GITAR/logo.png" height="100" alt="Logo"/><img src="logo11-.png" height="130" alt="Logo"/><img src="GITAR/11.png" height="100" alt="Logo"/></br> Tantang Kami</h1>
        </center>
        <div id="jam"></div>
            <div class="image-container">
                <img src="4.jpg" alt="Gambar 1" class="slide" />
                <img src="7.jpg" alt="Gambar 2" class="slide" />
                <img src="9.jpg" alt="Gambar 3" class="slide" />
            </div>
            <script>
                const slides = document.querySelectorAll('.slide');
                let currentSlide = 0;

                function nextSlide() {
                    slides[currentSlide].style.opacity = 0;
                    currentSlide = (currentSlide + 1) % slides.length;
                    slides[currentSlide].style.opacity = 1;
                }

                setInterval(nextSlide, 3000); // Ubah angka 3000 menjadi interval yang diinginkan (dalam milidetik)
            </script>
                </script>
            </div>
            <p>Guitar World adalah toko gitar yang berkomitmen untuk menyediakan produk berkualitas tinggi dengan harga yang terjangkau. Didirikan pada tahun 2020, kami telah melayani ribuan pelanggan dan terus berupaya untuk meningkatkan layanan kami.</p>
            <p>Misi kami adalah untuk memudahkan setiap orang menemukan gitar yang mereka butuhkan dengan nyaman dan cepat. Kami percaya bahwa setiap petiakan gitar, akan menciptakan iringan lagu yang membantu kita memperintah irama lagu. Gitar bisa juga dimainkan sebagai instrumen yang indah.</p>
            <p>Toko gitar kami adalah surganya para musisi, tempat di mana melodi bertemu dengan mimpi, dan inspirasi terdengar dalam setiap senar yang dipetik.</p>
            <p>Untuk informasi lebih lanjut tentang produk kami atau jika Anda memiliki pertanyaan, jangan ragu untuk <a href="contact.php">menghubungi kami</a>.</p>
        </section>
    </main>
</body>
</html>
