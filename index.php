<?php
require 'db.php'; // Menghubungkan ke database
session_start();

// Cek apakah pengguna sudah login
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

// Ambil username dari session
$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CMS Blog</title>
    <!-- Link ke Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            width: 16rem;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            padding-bottom: 1rem;
        }

        .main-content {
            margin-left: 16rem;
        }
    </style>
</head>

<body class="bg-gray-100">

    <!-- Wrapper untuk layout -->
    <div class="flex">

        <!-- Sidebar -->
        <aside class="sidebar bg-gray-800 text-white p-6">
            <div>
                <h2 class="text-2xl font-bold mb-6">CMS Blog</h2>

                <ul class="space-y-4">
                    <li>
                        <a href="#" class="block w-full text-center text-gray-400">Hello,
                            <?= htmlspecialchars($username); ?></a>
                    </li>
                </ul>
            </div>

            <div>
                <a href="logout.php"
                    class="block w-full text-center bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded">Logout</a>
            </div>
        </aside>

        <!-- Main Content -->
        <main class="main-content flex-1 p-10">
            <!-- Welcome Bar -->
            <div class="flex justify-between items-center mb-6">
                <h1 class="text-3xl font-bold">Welcome to the CMS Blog</h1>
                <div class="text-xl font-medium text-gray-700">Welcome, <?= htmlspecialchars($username); ?></div>
            </div>

            <!-- Form Create a Post -->
            <div class="bg-white shadow-md rounded p-6 w-full px-4">
                <h2 class="text-2xl font-semibold text-center mb-4">Create a Post</h2>
                <form method="POST" action="post_process.php">
                    <!-- Title -->
                    <div class="mb-4">
                        <label for="title" class="block text-gray-700">Title</label>
                        <input type="text" id="title" name="title" required
                            class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>

                    <!-- Author -->
                    <div class="mb-4">
                        <label for="author" class="block text-gray-700">Author</label>
                        <input type="text" id="author" name="author" required
                            class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>

                    <!-- Category (Dropdown Select) -->
                    <div class="mb-4">
                        <label for="category" class="block text-gray-700">Category</label>
                        <select id="category" name="category" required
                            class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <option value="" disabled selected>Pilih Kategori</option>
                            <option value="Lifestyle">Lifestyle</option>
                            <option value="Technology">Technology</option>
                            <option value="AI">AI</option>
                        </select>
                    </div>

                    <!-- Visibility (Radio Button) -->
                     <!-- Visibility (Checkbox) -->
                    <div class="mb-4">
                        <label class="block text-gray-700">Visibility</label>
                        <div class="flex items-center mb-2">
                            <input id="visibility_public" name="visibility[]" type="checkbox" value="Public" class="mr-2">
                            <label for="visibility_public" class="text-gray-700">Public</label>
                        </div>
                        <div class="flex items-center">
                            <input id="visibility_private" name="visibility[]" type="checkbox" value="Private" class="mr-2">
                            <label for="visibility_private" class="text-gray-700">Private</label>
                        </div>
                    </div>

                    <!-- Status (Radio Button for Draft/Published) -->
                    <div class="mb-4">
                        <label class="block text-gray-700">Status</label>
                        <div class="flex items-center mb-2">
                            <input id="status_draft" name="status" type="radio" value="Draft" class="mr-2" required>
                            <label for="status_draft" class="text-gray-700">Draft</label>
                        </div>
                        <div class="flex items-center">
                            <input id="status_published" name="status" type="radio" value="Published" class="mr-2">
                            <label for="status_published" class="text-gray-700">Published</label>
                        </div>
                    </div>

                    <!-- Content (Textarea) -->
                    <div class="mb-4">
                        <label for="content" class="block text-gray-700">Content</label>
                        <textarea id="content" name="content" rows="5" required
                            class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                    </div>

                    <!-- Submit Button -->
                    <input type="submit" value="Submit Post"
                        class="w-full bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded cursor-pointer">
                </form>
            </div>

            <!-- All Posts Section -->
            <div class="bg-white shadow-md rounded p-6 mt-6 w-full px-4">
                <h2 class="text-2xl font-semibold text-center mb-4">All Posts</h2>
                <?php
                // Mengambil semua posting dari database
                $stmt = $pdo->query("SELECT * FROM posts ORDER BY created_at DESC");
                $posts = $stmt->fetchAll();

                // Cek apakah ada postingan
                if (count($posts) > 0) {
                    foreach ($posts as $post) {
                        echo "<div class='bg-gray-50 p-4 rounded-lg shadow-md mb-4 relative'>";

                        // "Posted By" di pojok kanan atas
                        echo "<p class='absolute top-0 right-0 text-sm text-gray-500 p-2'>Posted by: " . htmlspecialchars($post['posted_by']) . "</p>";

                        echo "<h3 class='text-xl font-bold mb-2'>" . htmlspecialchars($post['title']) . "</h3>";
                        echo "<p><strong>Author:</strong> " . htmlspecialchars($post['author']) . "</p>";
                        echo "<p><strong>Category:</strong> " . htmlspecialchars($post['category']) . "</p>";
                        echo "<p><strong>Content:</strong> " . nl2br(htmlspecialchars($post['content'])) . "</p>";

                        // Tampilkan preferences (jika ada)
                        if ($post['preferences']) {
                            echo "<p><strong>Preferences:</strong> " . htmlspecialchars($post['preferences']) . "</p>";
                        }

                        // Tampilkan visibility
                        echo "<p><strong>Visibility:</strong> " . htmlspecialchars($post['visibility']) . "</p>";

                        // "Posted On" dengan margin bawah
                        echo "<p class='text-sm text-gray-500 mt-4'><strong>Posted on:</strong> " . htmlspecialchars($post['created_at']) . "</p>";

                        echo "</div>";
                    }
                } else {
                    echo "<p class='text-center text-gray-500'>No posts available. Be the first to create a post!</p>";
                }
                ?>
            </div>
        </main>
    </div>

</body>

</html>