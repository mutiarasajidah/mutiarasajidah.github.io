<?php
include 'database.php';

$username = $_POST['username'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_BCRYPT);
$role = $_POST['role'];
$admin_code = isset($_POST['admin_code']) ? $_POST['admin_code'] : null;

if ($role === 'admin' && $admin_code !== 'gitar') {
    die('Kode admin salah.');
}

// Simpan pengguna ke database
$query = "INSERT INTO users (username, email, password, role) VALUES ('$username', '$email', '$password', '$role')";
if (mysqli_query($conn, $query)) {
    // Redirect ke halaman login jika pendaftaran berhasil
    header("Location: login.php");
    exit; // Pastikan untuk menghentikan eksekusi script setelah redirect
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
