<?php
// Class induk Post
class Post
{
    public $username;
    public $email;
    public $title;
    public $author;
    public $content;

    public function __construct($username, $email, $title, $author, $content)
    {
        $this->username = $username;
        $this->email = $email;
        $this->title = $title;
        $this->author = $author;
        $this->content = $content;
    }

    // Method untuk menyimpan postingan ke file JSON
    public function savePost()
    {
        $posts = json_decode(file_get_contents('posts.json'), true) ?? [];
        $posts[] = [
            'username' => $this->username,
            'email' => $this->email,
            'title' => $this->title,
            'author' => $this->author,
            'content' => $this->content
        ];
        file_put_contents('posts.json', json_encode($posts));
    }
}

// Class turunan BlogPost untuk keperluan khusus
class BlogPost extends Post
{
    public function displayPost($post_id)
    {
        echo "<div class='post'>";
        // Tambahkan tombol delete di dalam elemen <h2>
        echo "<h2>" . htmlspecialchars($this->title);

        // Tambahkan form dan tombol delete di dalam <h2>
        echo " <form method='POST' action='delete_post.php' style='display:inline;'>";
        echo "<input type='hidden' name='post_id' value='$post_id'>";
        echo "<button type='submit' style='background-color: #ff6b6b; color: white; border: none; padding: 5px 10px; border-radius: 5px; cursor: pointer;'>X</button>";
        echo "</form>";

        echo "</h2>";
        echo "<p><strong>Author:</strong> " . htmlspecialchars($this->author) . "</p>";
        echo "<p>" . nl2br(htmlspecialchars($this->content)) . "</p>";
        echo "<p><strong>Posted by:</strong> " . htmlspecialchars($this->username) . " (" . htmlspecialchars($this->email) . ")</p>";
        echo "</div>";
    }

    public static function deletePost($post_id)
    {
        $posts = json_decode(file_get_contents('posts.json'), true);
        unset($posts[$post_id]);
        file_put_contents('posts.json', json_encode($posts));
    }
}

?>