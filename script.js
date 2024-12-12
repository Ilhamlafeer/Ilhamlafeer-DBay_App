// Toggle icon for the navbar
const menuIcon = document.getElementById("menu-icon");
const navbar = document.querySelector(".navbar");

menuIcon.onclick = () => {
    menuIcon.classList.toggle("bx-x"); // Change icon to close when clicked
    navbar.classList.toggle("active"); // Show/Hide navbar
};

// Scroll Section
let sections = document.querySelectorAll("section");
let navLinks = document.querySelectorAll("header nav a");

window.onscroll = () => {
    sections.forEach((sec) => {
        let top = window.scrollY; // Use window.scrollY to get the vertical scroll position
        let offset = sec.offsetTop - 100;
        let height = sec.offsetHeight;
        let id = sec.getAttribute("id");

        if (top >= offset && top < offset + height) {
            // Active navbar links
            navLinks.forEach((link) => {
                link.classList.remove("active");
                if (link.getAttribute("href") === `#${id}`) {
                    link.classList.add("active");
                }
            });
        }
    });
    
    // Sticky Header
    let header = document.querySelector("header");
    header.classList.toggle("sticky", window.scrollY > 100);
};

// Authentication status
let isLoggedIn = false; // Change this based on actual login status
const authLinksContainer = document.getElementById('auth-links');

if (isLoggedIn) {
    authLinksContainer.innerHTML = '<a href="#" id="logout">Logout</a>';
} else {
    authLinksContainer.innerHTML = '<a href="login-signup.html">Login</a>';
}

// Logout functionality
document.addEventListener('click', function(e) {
    if (e.target && e.target.id === 'logout') {
        // Perform logout operations (e.g., clear session, redirect)
        isLoggedIn = false; // Update login status
        alert('You have logged out successfully!');
        // Redirect to home page or login page
        window.location.href = 'login-signup.html'; // Example redirect
    }
});


// Add event listeners to all Buy Now buttons
document.querySelectorAll('.buy-btn').forEach(button => {
    button.addEventListener('click', function() {
        if (!isLoggedIn) {
            alert('You must be logged in to purchase a product. Please log in or sign up.');
            window.location.href = 'login-signup.html'; // Redirect to login/signup page
        } else {
            const productId = this.getAttribute('data-product');
            alert(`You have purchased product ${productId}!`);
            // Implement further logic for the purchase
        }
    });
});

//Search Option
document.querySelector('.search-btn').addEventListener('click', function() {
    const searchTerm = document.querySelector('.search-input').value;
    if (searchTerm) {
        alert(`Searching for: ${searchTerm}`);
        // Implement further logic to filter or fetch search results here
    } else {
        alert('Please enter a search term.');
    }
});

// Function to calculate total price
function calculateTotal() {
    let total = 0;
    const itemPrices = document.querySelectorAll('.item-price');
    const quantities = document.querySelectorAll('.quantity-input');

    itemPrices.forEach((price, index) => {
        const unitPrice = parseFloat(price.textContent.replace('$', ''));
        const quantity = parseInt(quantities[index].value);
        total += unitPrice * quantity;
    });

    document.getElementById('total-price').textContent = `$${total.toFixed(2)}`;
}

// Add event listener for quantity inputs
document.querySelectorAll('.quantity-input').forEach(input => {
    input.addEventListener('change', calculateTotal); // Recalculate total on change
});

// Function to remove an item from the cart
function removeItem(button) {
    // Get the row containing the clicked button
    const row = button.parentElement.parentElement;
    // Remove the row from the table
    row.remove();
    // Recalculate the total price after removing the item
    calculateTotal();
}

// Select all product containers and scroll buttons
const productContainers = document.querySelectorAll('.product-container');

productContainers.forEach(container => {
    const scrollLeftBtn = container.previousElementSibling.querySelector('.scroll-left');
    const scrollRightBtn = container.previousElementSibling.querySelector('.scroll-right');

    // Show buttons if the product container is available
    if (container) {
        scrollLeftBtn.style.display = 'block';
        scrollRightBtn.style.display = 'block';

        // Scroll left functionality
        scrollLeftBtn.addEventListener('click', () => {
            container.scrollBy({
                left: -300, // Adjust this value to control scroll distance
                behavior: 'smooth'
            });
        });

        // Scroll right functionality
        scrollRightBtn.addEventListener('click', () => {
            container.scrollBy({
                left: 300, // Adjust this value to control scroll distance
                behavior: 'smooth'
            });
        });
    } else {
        // Hide buttons if no product container is found
        scrollLeftBtn.style.display = 'none';
        scrollRightBtn.style.display = 'none';
    }
});

// Example cart items
let cartItems = [
    { name: "App Name 1", price: 29.99, quantity: 1 },
    { name: "Book Title 1", price: 14.99, quantity: 1 }
];

// Function to display cart items
function displayCartItems() {
    const cartContainer = document.querySelector('.cart-items');
    cartContainer.innerHTML = ''; // Clear previous items
    let total = 0; // Initialize total price

    cartItems.forEach((item, index) => {
        const itemDiv = document.createElement('tr');
        itemDiv.innerHTML = `
            <td>${index + 1}</td>
            <td>${item.name}</td>
            <td>
                <input type="number" value="${item.quantity}" class="quantity-input" min="1" onchange="updateQuantity(${index}, this.value)">
            </td>
            <td>$${item.price.toFixed(2)}</td>
            <td class="item-price">$${(item.price * item.quantity).toFixed(2)}</td>
            <td>
                <button class="remove-btn" onclick="removeItem(${index})">
                    <i class='bx bx-trash'></i> <!-- Bin icon -->
                </button>
            </td>
        `;
        cartContainer.appendChild(itemDiv);
        total += item.price * item.quantity; // Calculate total price
    });

    document.getElementById('total-price').textContent = `$${total.toFixed(2)}`; // Update total price
}

// Function to remove an item from the cart
function removeItem(index) {
    cartItems.splice(index, 1); // Remove item from array
    displayCartItems(); // Refresh the display
}

// Function to update item quantity
function updateQuantity(index, quantity) {
    cartItems[index].quantity = parseInt(quantity); // Update the quantity
    displayCartItems(); // Refresh the display
}

// Initial display of cart items
displayCartItems();


// Initial calculation on page load
calculateTotal();


// Initial display of cart items
displayCartItems();
