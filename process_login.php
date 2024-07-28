<?php
session_start();
include 'database.php';

$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM users WHERE username = '$username'";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_assoc($result);
    if (password_verify($password, $row['password'])) {
        $_SESSION['user_id'] = $row['user_id'];
        $_SESSION['username'] = $row['username'];
        $_SESSION['role'] = $row['role'];

        // Redirect ke halaman sesuai peran setelah login
        if ($_SESSION['role'] === 'customer') {
            header("Location: index.php"); // Ganti dengan halaman produk customer
        } elseif ($_SESSION['role'] === 'admin') {
            header("Location: admin.php"); // Ganti dengan halaman admin yang sesuai
        }
        exit;
    } else {
        echo "Username atau password salah.";
    }
} else {
    echo "Username atau password salah.";
}

mysqli_close($conn);
?>
