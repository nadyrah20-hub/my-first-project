<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Hardcoded credentials for demonstration
    if ($username == "admin" && $password == "password") {
        header("Location: dashboard.html");
        exit;
    } else {
        echo "Invalid username or password.";
    }
} else {
    echo "Please submit the form.";
}
?>