<?php
session_start();

$conn = new mysqli("sql302.infinityfree.com", "if0_41963207", "B6HJMy4CZobJ2L", "if0_41963207_logindb");

if ($conn->connect_error) {
    die("<span class='error'>Connection failed</span>");
}

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE email='$email'";
$result = $conn->query($sql);

if ($result->num_rows === 1) {
    $user = $result->fetch_assoc();

    if (password_verify($password, $user['password'])) {
        $_SESSION['user'] = $user['name'];
        echo "success";
    } else {
        echo "<span class='error'>Wrong password</span>";
    }
} else {
    echo "<span class='error'>Email not found</span>";
}

$conn->close();
?>