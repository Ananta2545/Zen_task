<?php
session_start();
include "../DB_connection.php";
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $full_name = trim($_POST['full_name']);
    $user_name = trim($_POST['user_name']);
    $password = $_POST['password'];
    $role = $_POST['role'];

    if (empty($full_name) || empty($user_name) || empty($password) || empty($role)) {
        header("Location: ../signup.php?error=All fields are required");
        exit();
    }

    // Check if username already exists
    $stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->execute([$user_name]);

    if ($stmt->rowCount() > 0) {
        header("Location: ../signup.php?error=Username already taken");
        exit();
    }

    // Hash the password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Insert the new user
    $stmt = $conn->prepare("INSERT INTO users (full_name, username, password, role) VALUES (?, ?, ?, ?)");
    $success = $stmt->execute([$full_name, $user_name, $hashedPassword, $role]);

    if ($success) {
        header("Location: ../login.php?success=Account created successfully");
        exit();
    } else {
        header("Location: ../signup.php?error=Something went wrong");
        exit();
    }
} else {
    header("Location: ../signup.php");
    exit();
}
