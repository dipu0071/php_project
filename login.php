<?php
include "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = $conn->prepare("SELECT password FROM users WHERE email = ?");
    $sql->bind_param("s", $email);
    $sql->execute();
    $sql->store_result();
    
    if ($sql->num_rows > 0) {
        $sql->bind_result($hashed_password);
        $sql->fetch();
        
        if (password_verify($password, $hashed_password)) {
            echo "Login successful!";
        } else {
            echo "Invalid password.";
        }
    } else {
        echo "User not found.";
    }

    $sql->close();
    $conn->close();
}
?>