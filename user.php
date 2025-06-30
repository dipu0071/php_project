<?php
include "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

    $sql = $conn->prepare("INSERT INTO users (name, email, password) VALUES (?, ?, ?)");
    $sql->bind_param("sss", $name, $email, $password);

    if ($sql->execute()) {
        echo "Signup successful!";
    } else {
        echo "Error: " . $conn->error;
    }

    $sql->close();
    $conn->close();
}
?>