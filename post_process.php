<?php
require 'db.php'; // Hubungkan ke database
session_start();

// Cek apakah pengguna sudah login
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

// Ambil data dari form
$title = $_POST['title'];
$author = $_POST['author'];
$category = $_POST['category'];
$content = $_POST['content'];

// Ambil status dari radio button
$status = $_POST['status'];

// Ambil visibility dari checkbox, gabungkan menjadi string
$visibility = isset($_POST['visibility']) ? implode(", ", $_POST['visibility']) : NULL;

// Ambil username dari session
$posted_by = $_SESSION['username'];

// Masukkan data ke tabel posts
$stmt = $pdo->prepare("INSERT INTO posts (title, author, category, content, status, visibility, posted_by) 
VALUES (?, ?, ?, ?, ?, ?, ?)");
$stmt->execute([$title, $author, $category, $content, $status, $visibility, $posted_by]);

// Redirect ke halaman utama setelah postingan berhasil disimpan
header("Location: index.php");
exit();
?>