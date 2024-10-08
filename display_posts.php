<?php
require 'db.php';

$sql = "SELECT * FROM posts ORDER BY created_at DESC";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$posts = $stmt->fetchAll();

if (count($posts) > 0) {
    foreach ($posts as $post) {
        echo "<div class='post'>";
        echo "<h2>" . htmlspecialchars($post['title']) . "</h2>";
        echo "<p><strong>Author:</strong> " . htmlspecialchars($post['author']) . "</p>";
        echo "<p>" . nl2br(htmlspecialchars($post['content'])) . "</p>";
        echo "<p><strong>Posted by:</strong> " . htmlspecialchars($post['username']) . " (" . htmlspecialchars($post['email']) . ")</p>";
        echo "<p><strong>Posted on:</strong> " . htmlspecialchars($post['created_at']) . "</p>";
        echo "</div>";
    }
} else {
    echo "<p>No posts available, be the first to create one!</p>";
}
?>