<?php
require_once 'dbconf.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if ($password !== $confirm_password) {
        $error = "Passwords do not match!";
    } else {
        $sql = "SELECT * FROM users WHERE email = ?";
        $stmt = $connect->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $error = "Email already exists. Please log in.";
        } else {
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO users (email, password) VALUES (?, ?)";
            $stmt = $connect->prepare($sql);
            $stmt->bind_param("ss", $email, $password);

            if ($stmt->execute()) {
                $_SESSION['signup_success'] = "Account created successfully! Please log in.";
                header("Location: login.php");
                exit();
            } else {
                $error = "Error: " . $stmt->error;
            }
        }

        $stmt->close();
    }

    $connect->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
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
    <h2>Sign Up</h2>
    <form action="signup.php" method="POST">
        <div class="input-field">
            <input type="email" name="email" placeholder="Email Address" required>
        </div>
        <div class="input-field">
            <input type="password" name="password" placeholder="Password" required>
        </div>
        <div class="input-field">
            <input type="password" name="confirm_password" placeholder="Confirm Password" required>
        </div>
        <button type="submit" class="btn">Create Account</button>
    </form>
    <div class="toggle">
        <p>Already have an account? <a href="login.php">Login</a></p>
    </div>
    <?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
</div>
</body>
</html>
