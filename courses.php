<?php
include "config.php";

if (isset($_GET["query"])) {
    $search = $conn->real_escape_string($_GET["query"]);
    $sql = "SELECT title, description, teacher, price FROM courses WHERE title LIKE '%$search%'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<h2>" . $row["title"] . "</h2>";
            echo "<p>" . $row["description"] . "</p>";
            echo "<p><strong>Teacher:</strong> " . $row["teacher"] . "</p>";
            echo "<p><strong>Price:</strong> $" . $row["price"] . "</p>";
        }
    } else {
        echo "No courses found.";
    }
}

$conn->close();
?>
