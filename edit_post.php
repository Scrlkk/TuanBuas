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

// Ambil data postingan dari database
$stmt = $pdo->prepare("SELECT * FROM posts WHERE id = ? AND posted_by = ?");
$stmt->execute([$post_id, $_SESSION['username']]);
$post = $stmt->fetch();

// Jika postingan tidak ditemukan atau bukan milik user, redirect
if (!$post) {
    header("Location: index.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Proses pengeditan postingan
    $title = $_POST['title'];
    $author = $_POST['author'];
    $category = $_POST['category'];
    $content = $_POST['content'];

    // Update postingan di database
    $stmt = $pdo->prepare("UPDATE posts SET title = ?, author = ?, category = ?, content = ? WHERE id = ? AND posted_by = ?");
    $stmt->execute([$title, $author, $category, $content, $post_id, $_SESSION['username']]);

    // Redirect ke halaman utama setelah update
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Post</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">

    <div class="max-w-2xl mx-auto bg-white shadow-md rounded p-6 mt-10">
        <h2 class="text-2xl font-semibold mb-4">Edit Post</h2>
        <form method="POST" action="">
            <!-- Title -->
            <div class="mb-4">
                <label for="title" class="block text-gray-700">Title</label>
                <input type="text" id="title" name="title" value="<?= htmlspecialchars($post['title']); ?>" required
                    class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <!-- Author -->
            <div class="mb-4">
                <label for="author" class="block text-gray-700">Author</label>
                <input type="text" id="author" name="author" value="<?= htmlspecialchars($post['author']); ?>" required
                    class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <!-- Category (Dropdown) -->
            <div class="mb-4">
                <label for="category" class="block text-gray-700">Category</label>
                <select id="category" name="category" required
                    class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <option value="Lifestyle" <?= $post['category'] == 'Lifestyle' ? 'selected' : '' ?>>Lifestyle</option>
                    <option value="Technology" <?= $post['category'] == 'Technology' ? 'selected' : '' ?>>Technology
                    </option>
                    <option value="AI" <?= $post['category'] == 'AI' ? 'selected' : '' ?>>AI</option>
                </select>
            </div>

            <!-- Content -->
            <div class="mb-4">
                <label for="content" class="block text-gray-700">Content</label>
                <textarea id="content" name="content" rows="5" required
                    class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"><?= htmlspecialchars($post['content']); ?></textarea>
            </div>

            <!-- Submit Button -->
            <input type="submit" value="Update Post"
                class="w-full bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded cursor-pointer">
        </form>
    </div>

</body>

</html>