<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Hardcoded credentials for demonstration
    if ($username == "admin" && $password == "password") {
        echo "Login successful! Welcome, " . htmlspecialchars($username) . ".";
        // You can redirect to another page here, e.g., header("Location: index.html");
    } else {
        echo "Invalid username or password.";
    }
} else {
    echo "Please submit the form.";
}
?>