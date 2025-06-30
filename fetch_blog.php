<?php
include "config.php";

$sql = "SELECT title, content, created_at FROM blog_posts ORDER BY created_at DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<h2>" . htmlspecialchars($row["title"]) . "</h2>";
        echo "<p><strong>Posted on: " . $row["created_at"] . "</strong></p>";
        echo "<p>" . nl2br(htmlspecialchars($row["content"])) . "</p>";
        echo "<hr>";
    }
} else {
    echo "<p>No blog posts found.</p>";
}

$conn->close();
?>