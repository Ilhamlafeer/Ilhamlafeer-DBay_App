<?php
require_once 'dbconf.php';

// Get data from the form
$email = $_POST['email'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];

// Check if the passwords match
if ($password !== $confirm_password) {
    echo "Passwords do not match!";
    exit;
}

// Check if the email already exists
$sql = "SELECT * FROM users WHERE email = '$email'";
$result = $connect->query($sql);

if ($result->num_rows > 0) {
    echo "Email already exists. Please log in.";
} else {
    // Insert the new user into the database
    $sql = "INSERT INTO users (email, password) VALUES ('$email', '$password')";
    
    if ($connect->query($sql) === TRUE) {
        echo "Sign up successful! You can now log in.";
    } else {
        echo "Error: " . $sql . "<br>" . $connect->error;
    }
}

$connect->close();
?>
