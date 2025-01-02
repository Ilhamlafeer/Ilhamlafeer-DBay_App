<!-- Books Section Design -->
<?php
include 'header.php';
?>

<link rel="stylesheet" href="CSS/styles.css">
<!-- Boxicons -->
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

 <section class="books" id="books">
    <h2 class="heading">Top <span>Books</span></h2>

    <div class="scroll-btns">
        <button class="scroll-btn scroll-left"><i class='bx bx-chevron-left'></i></button>
        <button class="scroll-btn scroll-right"><i class='bx bx-chevron-right'></i></button>
    </div>

    <div class="product-container">
        <!-- Product 1 to 10-->
        <div class="product-card">
            <img src="images/Audacity.png" alt="Audacity">
            <h3></h3>
            <p>An Audio Editing App</p>
            <button class="btn buy-btn" data-product="1">Buy Now</button>
        </div>

        <div class="product-card">
            <img src="images/Capcut.jpg" width="75px" alt="Capcut">
            <h3>Capcut</h3>
            <p>A Video Editing App</p>
            <button class="btn buy-btn" data-product="2">Buy Now</button>
        </div>

        <div class="product-card">
            <img src="images/Figma.png" width="75px" alt="Figma">
            <h3>Figma</h3>
            <p>An UI/UX App</p>
            <button class="btn buy-btn" data-product="3">Buy Now</button>
        </div>

        <div class="product-card">
            <img src="images/Office.jpg" width="75px" alt="Office">
            <h3>MS Office</h3>
            <p>MS Word, Excel, Access, ...</p>
            <button class="btn buy-btn" data-product="4">Buy Now</button>
        </div>
        <div class="product-card">
            <img src="images/Photoshop.jpg" width="75px" alt="Photoshop">
            <h3>Photoshop</h3>
            <p>A Photo Editing App</p>
            <button class="btn buy-btn" data-product="5">Buy Now</button>
        </div>
        <div class="product-card">
            <img src="images/Windows.jpg" width="100px" height ="100px" alt="Windows">
            <h3>Windows 11</h3>
            <p>An Operating System</p>
            <button class="btn buy-btn" data-product="6">Buy Now</button>
        </div>
    </div>
</section>

<script src="script.js"></script>