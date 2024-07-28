
<?php
session_start(); // Memulai sesi
include 'database.php'; // Memasukkan file konfigurasi database
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Guitar World</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #993333;
            color: white;
        }
            
        .nav-menu {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #333;
        }

        .nav-menu > li {
            float: left;
        }

        .nav-menu a {
            display: inline-block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        .nav-menu a:hover, .dropdown:hover .dropbtn {
            background-color: #111;
        }

        .dropdown {
            display: inline-block;
            position: relative;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {
            background-color: #f1f1f1;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        header {
            display: flex;
            align-items: center;
            padding: 20px;
            background-color: #990000;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin: 20px;
        }

        header h1 {
            margin-left: 20px;
            color: white;
            text-align: center;
        }

        nav {
            background-color: #990000;
            color: white;
            padding: 10px;
            margin: 20px;
        }

        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
        }

        nav ul li {
            margin: 0 15px;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
            font-weight: bold;
        }

        nav ul li a:hover {
            text-decoration: underline;
        }

        main {
            padding: 20px;
            text-align: center;
            margin: 20px;
        }

        #featured-products {
            padding: 20px;
            margin-bottom: 20px;
            background-color: #f9f9f9;
        }

        h2 {
            color: #990000;
            margin-bottom: 20px;
        }

        .products {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
        }

        .card {
            width: 30%;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .card:hover {
            transform: scale(1.05);
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
        }

        .card img {
            width: 80%;
            height: auto;
            display: block;
            margin: 10px auto;
            border-radius: 15px;
        }

        .card-body {
            padding: 10px;
            text-align: center;
        }

        .card-title {
            margin-bottom: 10px;
            color: #990000;
        }

        .card-text {
            margin-bottom: 10px;
            color: black;
        }

        .btn {
            background-color: #006699;
            color: white;
            padding: 10px 20px;
            border: none;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        .btn:hover {
            background-color: #white;
        }

        footer {
            background-color: #990000;
            color: white;
            text-align: center;
            padding: 10px;
            margin: 20px;
        }
.user-menu {
    display: flex;
    justify-content: flex-end;
    align-items: center;
    background-color: none;
    padding: 10px 20px;
    border-radius: 5px;
}

.user-menu a {
    text-decoration: none;
    color: white;
    margin-left: 15px; /* Menambahkan sedikit jarak antara ikon dan teks */
    display: flex; /* Membuat ikon dan teks menjadi elemen flex */
    align-items: center; /* Memusatkan vertikal ikon dan teks */
}

.user-menu a i {
    margin-right: 5px; /* Memberikan sedikit jarak antara ikon dan teks */
}

.user-menu a:hover {
    text-decoration: underline;
    color: #666;
}


    </style>
</head>
<body>
     <center>
            <img src="GITAR/logo.png" height="100" alt="Logo"/><img src="logo11-.png" height="130" alt="Logo"/><img src="GITAR/11.png" height="100" alt="Logo"/><br>
            <h1>Selamat Datang di Guitar World</h1>
            <p>Alamat: Jl. Musik No. 123, Bukittinggi</p>
            <p>Telepon: (08)96-6187-81000 | Email: guitar_world@gmail.com</p>
        </center><div class="user-menu">
        <img src="GITAR/111.png" height="27" alt="Logo"/>
       <a>ADMIN</a>
</div>

    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="products.php">Produk</a></li>
            <li><a href="add_product.php">Tambah Produk</a></li>
            <li><a href="about.php">Tentang Kami</a></li>
             <li><a href="orders.php">Orderan</a></li>
            <li><a href="contact.php">Kontak</a></li>
            <?php if(isset($_SESSION['user_id'])): ?>
            <li><a href="profile.php">Profil</a></li>
                    <?php else: ?>
            <li><a href="keranjang.php" class="keranjang-btn">Keranjang</a></li>
            <?php endif; ?>
            <li class="dropdown">
                <a href="#" class="dropbtn">Laporan ▼</a>
                <div class="dropdown-content">
                    <a href="laporan_harian.php">Laporan Harian</a>
                    <a href="laporan_bulanan.php">Laporan Bulanan</a>
                    <a href="laporan_stok.php">Laporan Stok</a>
                    <a href="users.php">Laporan Pengguna</a> 
                    <a href="masukan.php">Masukan/Pesan</a>
            <li><a href="logout.php">Logout ►</a></li>
                </div>
            </li>
        </ul>
    </nav>
    <main>
        <section id="featured-products">
            <h2>Produk Unggulan</h2>
            <div class="products">
                <div class="card">
                    <img src="GITAR/G&L Tribute Comanche Gloss Black Gitar Listrikk.jpg" alt="G&L Tribute Comanche" width="200">
                    <div class="card-body">
                        <h4 class="card-title">G&L Tribute Comanche</h4>
                        <p class="card-text">Gitar ini merupakan salah satu gitar paling laris di Guitar World.</p>
                        <a href="products.php" class="btn">Detail Selengkapnya</a>
                    </div>
                </div>
                <div class="card">
                    <img src="GITAR/G&L USA Guitar ASAT Classic in Surf Green finishes.jpg" alt="G&L USA Guitar ASAT Classic" width="200">
                    <div class="card-body">
                        <h4 class="card-title">G&L USA Guitar ASAT Classic</h4>
                        <h4 class="card-title">in Surf Green finishes</h4>
                        <p class="card-text">Gitar ini merupakan salah satu gitar paling laris di Guitar World.</p>
                        <a href="products.php" class="btn">Detail Selengkapnya</a>
                    </div>
                </div>
                <div class="card">
                    <img src="GITAR/Gretsch G6146TG Player Edition Falcon.jpg" alt="Gretsch G6146TG Player Edition Falcon" width="200">
                    <div class="card-body">
                        <h4 class="card-title">Gretsch G6146TG Player Edition Falcon Holllowbody w/ Bigsby</h4>
                        <p class="card-text">Gitar ini edisi terbatas. Produk tidak lagi diproduksi.</p>
                        <a href="products.php" class="btn">Detail Selengkapnya</a>
                    </div>
                </div>
                <div class="card">
                    <img src="GITAR/Ibanez Jem Flower Gitar Listrik Elektrik custom.jpg" alt="Ibanez Jem Flower Gitar Listrik Elektrik" width="200">
                    <div class="card-body">
                        <h4 class="card-title">Ibanez Jem Flower Gitar Listrik Elektrik</h4>
                        <p class="card-text">Type: custom gitar dengan motif flower</p>
                        <a href="products.php" class="btn">Detail Selengkapnya</a>
                    </div>
                </div>
                <div class="card">
                    <img src="GITAR/Kramer Baretta Custom Graphics Feral Cat Electric Guitar.jpg" alt="Kramer Baretta Custom Graphics Feral Cat" width="200">
                    <div class="card-body">
                        <h4 class="card-title">Kramer Baretta Custom Graphics Feral Cat</h4>
                        <p class="card-text">Rainbow Leopard Kramer Baretta Custom Graphics Feral Cat El</p>
                        <a href="products.php" class="btn">Detail Selengkapnya</a>
                    </div>
                </div>
                <div class="card">
                    <img src="GITAR/Stringray Gitar Bass Musicman Hitam.jpg" alt="Stringray Gitar Bass Musicman Hitam" width="200">
                    <div class="card-body">
                        <h4 class="card-title">Stringray Gitar Bass Musicman Hitam</h4>
                        <p class="card-text">type : Gitar Bass Warna : Hitam</p>
                        <a href="products.php" class="btn">Detail Selengkapnya</a>
                    </div>
                </div>
        </section>
    </main>
    <footer>
        <p>&copy; <?php echo date("Y"); ?> Guitar World. Semua hak dilindungi.</p>
    </footer>
</body>
</html>


