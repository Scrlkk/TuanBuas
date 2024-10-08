<?php
require 'db.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash password sebelum menyimpan

    // Query untuk menyimpan user baru
    $sql = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$username, $email, $password]);

    // Set pesan sukses di session setelah pendaftaran berhasil
    $_SESSION['signup_success'] = "Anda berhasil membuat akun";
    header("Location: register.php"); // Redirect ke halaman Sign Up
    exit();
}
?>