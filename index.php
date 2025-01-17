<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DBay - Digital Marketplace</title>

    <link rel="stylesheet" href="CSS/styles.css">

    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <meta name="description"
        content="DBay is a digital marketplace for startup apps, online courses, eBooks, and other digital products.">
    <meta name="keywords" content="DBay, Digital Marketplace, Startup Apps, Online Courses, eBooks, Digital Products">
    <meta name="author" content="Mohamed Ilham">
</head>

<body>
    <?php
    include 'header.php';
    ?>

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
                <a href="#softwares" class="btn">Explore Apps</a>
                <a href="#contact" class="btn">Contact Us</a>
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

    <!-- About Section Design -->
    <section class="about" id="about">
        <h2 class="heading">About <span>DBay</span></h2>

        <div class="about-content">
            <p>
                DBay is a digital marketplace dedicated to providing a platform for startup developers and digital
                creators. We offer a diverse range of digital products, including apps, online courses, eBooks, and
                more. Our mission is to empower creators to reach a wider audience and provide customers with access to
                the latest innovations.
            </p>
            <div class="btn-box btns">
                <a href="#contact" class="btn">Learn More</a>
            </div>
        </div>
    </section>

    <!-- Contact Section Design -->
    <section class="contact" id="contact">
        <h2 class="heading">Contact <span>Us</span></h2>

        <form action="#" method="post">
            <div class="input-box">
                <div class="input-field">
                    <input type="text" name="name" placeholder="Full Name" required>
                    <span class="focus"></span>
                </div>

                <div class="input-field">
                    <input type="email" name="email" placeholder="Email Address" required>
                    <span class="focus"></span>
                </div>
            </div>

            <div class="textarea-field">
                <textarea name="message" cols="30" rows="10" placeholder="Your Message" required></textarea>
                <span class="focus"></span>
            </div>

            <div class="btn-box btns">
                <button type="submit" class="btn">Submit</button>
            </div>
        </form>
    </section>

    <!-- Cart Section Design -->
<section id="cart" class="cart">
    <h2>Your Cart</h2>
    
    <table class="cart-table">
        <thead>
            <tr>
                <th>S.No</th>
                <th>Name</th>
                <th>Quantity</th>
                <th>Unit Price</th>
                <th>Price</th>
                <th>Action</th> <!-- Column header for the Remove button -->
            </tr>
        </thead>
        <tbody class="cart-items">
            <!-- Cart Items will be populated here dynamically -->
        </tbody>
        <tfoot>
            <tr>
                <td colspan="4">Total:</td>
                <td id="total-price">$0.00</td> 
                <td></td> 
            </tr>
        </tfoot>
    </table>

    <div class="btn-box">
        <button class="btn" onclick="checkout()">Checkout</button>
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