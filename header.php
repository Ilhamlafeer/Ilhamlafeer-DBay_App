    <!-- Header Design -->
    <header class="header">
        <a href="#" class="logo">
            <img src="Logo/Logo.png" alt="DBay Logo" class="logo-img">
        </a>

        <div class="search-container">
            <input type="text" placeholder="Search products..." class="search-input">
            <button class="search-btn">Search</button>
        </div>

        <div class="bx bx-menu" id="menu-icon"></div>

        <nav class="navbar">
            <a href="index.php">Home</a>
            <a href="software.php">Softwares</a>
            <a href="courses.php">Courses</a>
            <a href="index.php#about">About</a>
            <a href="index.php#contact">Contact</a>
            <a href="index.php#cart">Cart</a>
            <span id="auth-links">
                <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true): ?>
                <a href="logout.php">Logout</a>
                <?php else: ?>
                <a href="login.php">Login</a>
                <?php endif; ?>
            </span>
        </nav>
    </header>