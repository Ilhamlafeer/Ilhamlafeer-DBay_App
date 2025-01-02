<!-- Courses Section Design -->
<?php
    include 'header.php';
?>
<link rel="stylesheet" href="CSS/styles.css">
<!-- Boxicons -->
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

<section class="courses" id="courses">
        <h2 class="heading">Featured <span>Courses</span></h2>

        <div class="scroll-btns">
            <button class="scroll-btn scroll-left"><i class='bx bx-chevron-left'></i></button>
            <button class="scroll-btn scroll-right"><i class='bx bx-chevron-right'></i></button>
        </div>

        <div class="product-container">
            <!-- Product 1 to 6-->
            <div class="product-card">
                <img src="images/courses/web.jpg" alt="Web">
                <h3>Web Development</h3>
                <button class="btn buy-btn" data-product="1">Buy Now</button>
            </div>

            <div class="product-card">
                <img src="images/courses/graphic.jpg" height="75px" alt="Graphics">
                <h3>Graphic Design</h3>
                <button class="btn buy-btn" data-product="2">Buy Now</button>
            </div>

            <div class="product-card">
                <img src="images/courses/program.jpg" height="75px" alt="Programming">
                <h3>Programming for Beginners</h3>
                <button class="btn buy-btn" data-product="3">Buy Now</button>
            </div>

            <div class="product-card">
                <img src="images/courses/excel.jpg" height="75px" alt="Excel">
                <h3>Excel for Analytics</h3>
                <button class="btn buy-btn" data-product="4">Buy Now</button>
            </div>
            <div class="product-card">
                <img src="images/courses/cprogram.jpg" height="75px" alt="C">
                <h3>Adavanced C Program</h3>
                <button class="btn buy-btn" data-product="5">Buy Now</button>
            </div>
            <div class="product-card">
                <img src="images/courses/ai.jpg" height="75px" alt="AI">
                <h3>Introduction to AI</h3>
                <button class="btn buy-btn" data-product="6">Buy Now</button>
            </div>
        </div>
    </section>

    <script src="script.js"></script>