<?php
// login.php
session_start();
require_once 'dbconf.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

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

        // Verify the password
        if ($password === $user['password']) {
            $_SESSION['loggedin'] = true;
            $_SESSION['user_id'] = $user['id'];
            header("Location: index.php");
            exit();
        } else {
            $error = "Invalid email or password!";
        }

    } else {
        $error = "Invalid email or password!";
    }

    $stmt->close();
    $connect->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="CSS/styles.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
        body {
            background: #081b29;
            color: #ededed;
            font-family: 'Poppins', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            }
        .container {
            background: rgba(255, 255, 255, 0.1);
            border-radius: 8px;
            padding: 2rem;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
            max-width: 400px;
            width: 100%;
        }
        h2 {
            margin-bottom: 1rem;
            text-align: center;
            color: var(--main-color);
        }
        .input-field {
            margin: 1rem 0;
        }
        .input-field input {
            width: 100%;
            padding: 1rem;
            border: none;
            border-radius: 5px;
            outline: none;
        }
        .btn {
            background: var(--main-color);
            color: white;
            border: none;
            padding: 1rem;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }
        .btn:hover {
            background: darken(var(--main-color), 10%);
        }
        .toggle {
            text-align: center;
            margin-top: 1rem;
        }
        .toggle a {
            color: var(--main-color);
            text-decoration: none;
        }
    </style>
</head>
<body>
<div class="container">
    <h2>Login</h2>
    <form action="login.php" method="POST">
        <div class="input-field">
            <input type="text" name="email" placeholder="Username or Email" required>
        </div>
        <div class="input-field">
            <input type="password" name="password" placeholder="Password" required>
        </div>
        <button type="submit" class="btn">Login</button>
    </form>
    <div class="toggle">
        <p>Don't have an account? <a href="signup.php">Sign Up</a></p>
    </div>
    <?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
</div>
</body>
</html>
