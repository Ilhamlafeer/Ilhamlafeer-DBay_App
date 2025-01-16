<?php
// Include the database configuration file
require_once 'dbconf.php';
session_start(); // Start the session to manage user state

// Get data from the form
$email = $_POST['email'] ?? ''; // Use null coalescing to handle unset values
$password = $_POST['password'] ?? '';

// Validate form input
if (empty($email) || empty($password)) {
    die("Please fill in both email and password.");
}

$sql = "SELECT * FROM users WHERE email = ?";
$stmt = $connect->prepare($sql);
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
    if (password_verify($password, $user['password'])) {
        // Successful login
        $_SESSION['loggedin'] = true; // Set a session variable
        $_SESSION['user_id'] = $user['id'];

        header("Location: index.php");
        exit();
    } else {
        // Incorrect password
        echo "Invalid email or password!";
    }
} else {
    // No user found
    echo "Invalid email or password!";
}

// Close the statement and connection
$stmt->close();
$connect->close();
?>
