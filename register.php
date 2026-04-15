<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // In a real app, save to database, hash password, etc.
    echo "Registration successful for " . htmlspecialchars($username) . " with email " . htmlspecialchars($email) . ".";
} else {
    echo "Please submit the form.";
}
?>