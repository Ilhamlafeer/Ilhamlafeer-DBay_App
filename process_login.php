<?php
require_once 'dbconf.php';
session_start(); // Start the session

// Get data from the form
$email = $_POST['email'];
$password = $_POST['password'];

// Query to check if the user exists
$sql = "SELECT * FROM users WHERE email = ?";
$stmt = $connect->prepare($sql);
$stmt->bind_param("s", $email); // Bind the email parameter
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
    if (password_verify($password, $user['password'])) {
        $_SESSION['loggedin'] = true;
        $_SESSION['user_id'] = $user['id']; // Store user ID in the session
        header("Location: index.php"); // Redirect to index
        exit();
    } else {
        echo "Login failed"; 
    }
} else {
    echo "Login failed";
}

$stmt->close();
$connect->close();
?>
