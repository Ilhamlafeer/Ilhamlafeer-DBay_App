
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login / Sign Up</title>
    <link rel="stylesheet" href="styles.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
        /* Inline CSS for demonstration purposes, you can move this to your CSS file */
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
    <div id="login-form">
        <h2>Login</h2>
        <form action="#" method="post">
            <div class="input-field">
                <input type="text" placeholder="Username or Email" required>
            </div>
            <div class="input-field">
                <input type="password" placeholder="Password" required>
            </div>
            <button type="submit" class="btn">Login</button>
        </form>
        <div class="toggle">
            <p>Don't have an account? <a href="#" id="show-signup">Sign Up</a></p>
        </div>
    </div>

    <div id="signup-form" style="display:none;">
        <h2>Sign Up</h2>
        <form action="#" method="post">
            <div class="input-field">
                <input type="email" placeholder="Email Address" required>
            </div>
            <div class="input-field">
                <input type="password" placeholder="Password" required>
            </div>
            <div class="input-field">
                <input type="password" placeholder="Confirm Password" required>
            </div>
            <button type="submit" class="btn">Create Account</button>
        </form>
        <div class="toggle">
            <p>Already have an account? <a href="#" id="show-login">Login</a></p>
        </div>
    </div>
</div>

<script>
// Toggle between Login and Sign Up forms
document.getElementById('show-signup').addEventListener('click', function() {
    document.getElementById('login-form').style.display = 'none';
    document.getElementById('signup-form').style.display = 'block';
});

document.getElementById('show-login').addEventListener('click', function() {
    document.getElementById('signup-form').style.display = 'none';
    document.getElementById('login-form').style.display = 'block';
});

// Basic form validation
document.querySelectorAll('form').forEach(form => {
    form.addEventListener('submit', function(event) {
        const inputs = this.querySelectorAll('input');
        let valid = true;

        inputs.forEach(input => {
            if (!input.value) {
                valid = false;
            }
        });

        if (!valid) {
            alert('Please fill in all fields.');
            event.preventDefault(); // Prevent form submission
        }

        if (this.id === 'signup-form') {
            const password = inputs[1].value; // Password
            const confirmPassword = inputs[2].value; // Confirm Password
            if (password !== confirmPassword) {
                alert('Passwords do not match.');
                event.preventDefault(); // Prevent form submission
            }
        }
    });
});
</script>

</body>
</html>