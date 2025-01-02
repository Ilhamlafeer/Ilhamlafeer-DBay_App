<?php
require_once 'dbconf.php';

// Get data from the form
$email = $_POST['email'];
$password = $_POST['password'];

// Query to check if the user exists
$sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
$result = $connect->query($sql);

if ($result->num_rows > 0) {
    // User found, login successful
    $_SESSION['login_success'] = "Login successful!"; // Store notification in session
    
    header("Location: index.html"); // Redirect to index.html
    exit(); 
} else {
    // User not found, login failed
    echo "Invalid credentials!";
}

$connect->close();
?>
