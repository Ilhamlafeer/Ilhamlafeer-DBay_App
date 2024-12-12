<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DBay - Digital Marketplace</title>

    <link rel="stylesheet" href="styles.css">

    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <meta name="description"
        content="DBay is a digital marketplace for startup apps, online courses, eBooks, and other digital products.">
    <meta name="keywords" content="DBay, Digital Marketplace, Startup Apps, Online Courses, eBooks, Digital Products">
    <meta name="author" content="DBay Team">
</head>

<body>
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
            <a href="#home" class="active">Home</a>
            <a href="software.php#software">Softwares</a>
            <a href="courses.php#courses">Courses</a>
            <a href="about.php#about">About</a>
            <a href="contact.php#contact">Contact</a>
            <a href="cart.php#cart">Cart</a>
            <span id="auth-links"></span>
        </nav>
    </header>

    <!-- Home Section Design -->
    <section class="home" id="home">
        <div class="home-content">
            <h1>Welcome to <span>DBay</span></h1>
            <div class="text-animate">
                <h3>Your Digital Marketplace</h3>
            </div>
            <p>Discover innovative startup apps, online courses, eBooks, and more. Join the community and support
                emerging developers and digital creators by exploring a wide range of digital products.</p>

            <div class="btn-box">
                <a href="software.php" class="btn">Explore Apps</a>
                <a href="contact.php" class="btn">Contact Us</a>
            </div>
        </div>

        <div class="home-sci">
            <a href="#"><i class='bx bxl-facebook'></i></a>
            <a href="#"><i class='bx bxl-linkedin'></i></a>
            <a href="#"><i class='bx bxl-gmail'></i></a>
        </div>

        <div class="home-imgHover"></div>

        <!-- Additional Content-->
        <div class="home-additional-content">
            <h2>Why Choose DBay?</h2>
            <ul>
                <li> A dedicated platform for startup developers.</li>
                <li> Access to a diverse range of digital products.</li>
                <li> Seamless buying and selling experience.</li>
                <li> Support for emerging creators and innovators.</li>
            </ul>
            <h3>Featured Categories</h3>
            <div class="category-box">
                <a href="software.php">Apps</a>
                <a href="books.php">Books</a>
                <a href="courses.php">Courses</a>
            </div>
        </div>
    </section>

    <!-- Footer Design -->
    <footer class="footer">
        <div class="footer-text">
            <p>&copy; 2024 DBay - All Rights Reserved (LM. Ilham - BSc (Hons) in  Computer Science).</p>
        </div>
        <div class="footer-iconTop">
            <a href="#home"><i class='bx bx-up-arrow-alt'></i></a>
        </div>
    </footer>

    <script src="script.js"></script>
</body>

</html>