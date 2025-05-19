<?php
require 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];

    if ($password != $confirm_password) {
        echo "<script>alert('Passwords do not match'); window.location.href='register.php';</script>";
        exit();
    }

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO Consumer (name, username, email, password) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $name, $username, $email, $hashed_password);

    if ($stmt->execute()) {
        echo "<script>alert('Registration successful'); window.location.href='login.php';</script>";
    } else {
        echo "<script>alert('Registration failed: " . $stmt->error . "'); window.location.href='register.php';</script>";
    }

    $stmt->close();
    $conn->close();
}
?>