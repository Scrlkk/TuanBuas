<?php
require 'db.php';
session_start();

// Cek apakah pengguna sudah login
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

// Ambil ID postingan dari URL
$post_id = $_GET['id'];

// Hapus postingan dari database (hanya jika postingan milik user)
$stmt = $pdo->prepare("DELETE FROM posts WHERE id = ? AND posted_by = ?");
$stmt->execute([$post_id, $_SESSION['username']]);

// Redirect kembali ke halaman utama setelah penghapusan
header("Location: index.php");
exit();
?>