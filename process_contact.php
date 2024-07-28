<?php
include 'database.php'; // Include konfigurasi database

// Validasi dan sanitasi input
if (isset($_POST['name'], $_POST['email'], $_POST['message'])) {
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $message = $conn->real_escape_string($_POST['message']);

    // Query untuk menambah data kontak ke database
    $sql = "INSERT INTO contact_info (name, email, message) VALUES ('$name', '$email', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "Pesan berhasil dikirim!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
} else {
    echo "Semua input harus diisi!";
}
?>
