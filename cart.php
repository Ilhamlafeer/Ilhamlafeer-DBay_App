<!-- Cart Section Design -->
<link rel="stylesheet" href="styles.css">
<!-- Boxicons -->
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

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

<script src="script.js"></script>