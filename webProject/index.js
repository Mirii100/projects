let currentIndex = 0; // Current index for images
const totalImages = 3; // Total number of images

function moveSlide(direction) {
    // Move slide based on direction (1 for next, -1 for previous)
    currentIndex += direction;

    // Loop back to the start or end
    if (currentIndex < 0) {
        currentIndex = totalImages - 1;
    } else if (currentIndex >= totalImages) {
        currentIndex = 0;
    }

    updateSlidePosition();
}

function updateSlidePosition() {
    const imagesContainer = document.querySelector('.images');
    const offset = -currentIndex * (100 / totalImages); // Calculate offset
    imagesContainer.style.transform = `translateX(${offset}%)`; // Apply offset
}

// Auto scroll every 2 seconds
setInterval(() => {
    moveSlide(1);
}, 2000);

// Toggle content display for more information
function toggleContent(box) {
    const moreContent = box.querySelector('.more-content');
    moreContent.style.display = moreContent.style.display === 'block' ? 'none' : 'block';
}

// Sample data for demonstration
const sampleProducts = [
    { name: 'shirts', price: 10.99, image: 'image1.jpg' },
    { name: 'Container 2', price: 15.49, image: 'image2.jpg' },
    { name: 'fruits', price: 20.00, image: 'image3.jpg' },
];

// Function to update the cart in local storage
function updateCartStorage(cart) {
    localStorage.setItem('cart', JSON.stringify(cart));
}

// Function to add item to cart
function addToCart(productName) {
    const product = sampleProducts.find(p => p.name === productName);

    if (!product) {
        console.error('Product not found');
        return;
    }

    const cart = JSON.parse(localStorage.getItem('cart')) || [];
    const existingProductIndex = cart.findIndex(item => item.name === product.name);

    if (existingProductIndex >= 0) {
        cart[existingProductIndex].quantity += 1; 
    } else {
        cart.push({ ...product, quantity: 1 }); 
    }

    updateCartStorage(cart);
    confirm(`${productName} added to cart!`);
}

// Function to remove item from cart
function removeFromCart(productName) {
    const cart = JSON.parse(localStorage.getItem('cart')) || [];
    const updatedCart = cart.filter(item => item.name !== productName);
    updateCartStorage(updatedCart);

    displayCartItems(); // Refresh the cart display
}

// Function to display cart contents on the cart.html page
function displayCartItems() {
    const cartItemsContainer = document.getElementById('cart-items');
    const totalCostContainer = document.getElementById('total-cost');
    const cart = JSON.parse(localStorage.getItem('cart')) || [];

    cartItemsContainer.innerHTML = '';
    totalCostContainer.innerHTML = ''; // Clear total cost container

    if (cart.length === 0) {
        cartItemsContainer.innerHTML = '<p>Your cart is empty.</p>';
        return;
    }

    let totalCost = 0; // Initialize total cost

    cart.forEach(item => {
        const itemCost = item.price * item.quantity; // Calculate cost for this item
        totalCost += itemCost; // Add to total cost

        const cartHTML = `
            <div class="cart-item">
                <h3>${item.name}</h3>
                <p>Quantity: ${item.quantity}</p>
                <p>Price: $${item.price.toFixed(2)}</p>
                <p>Cost: $${itemCost.toFixed(2)}</p>
                <img src="${item.image}" alt="${item.name}" style="width:100px; height:auto;">
                <button onclick="removeFromCart('${item.name}')">Remove</button>
                <hr>
            </div>
        `;
        cartItemsContainer.innerHTML += cartHTML;
    });

    // Display total cost
    totalCostContainer.innerHTML = `<h3>Total Cost: $${totalCost.toFixed(2)}</h3>`;
}

// Ensure the cart items are displayed on page load
document.addEventListener('DOMContentLoaded', displayCartItems);

// Save the cart items to localStorage when navigating to the cart page
document.getElementById('view-cart').onclick = function () {
    const cartItems = JSON.parse(localStorage.getItem('cart')) || [];
    localStorage.setItem('cartItems', JSON.stringify(cartItems));
};



        // Ensure the cart items are displayed on page load
        document.addEventListener('DOMContentLoaded', displayCartItems);

        // Function to display items in the cart
        function displayCartItems() {
            const cartItemsContainer = document.getElementById('cart-items');
            const cart = JSON.parse(localStorage.getItem('cart')) || [];

            // Clear previous items
            cartItemsContainer.innerHTML = '';

            if (cart.length === 0) {
                cartItemsContainer.innerHTML = '<p>Your cart is empty.</p>';
                return;
            }

            cart.forEach(item => {
                const cartHTML = `
                    <div class="cart-item">
                        <h3>${item.name}</h3>
                        <p>Quantity: ${item.quantity}</p>
                        <p>Price: $${item.price.toFixed(2)}</p>
                        <img src="${item.image}" alt="${item.name}" style="width:100px; height:auto;">
                        <button onclick="removeFromCart('${item.name}')">Remove</button>
                        <hr>
                    </div>
                `;
                cartItemsContainer.innerHTML += cartHTML;
            });

            // Display total cost
            const totalCost = cart.reduce((total, item) => total + (item.price * item.quantity), 0);
            document.getElementById('total-cost').innerHTML = `<h3>Total Cost: $${totalCost.toFixed(2)}</h3>`;
        }

        // Function to remove an item from the cart
        function removeFromCart(productName) {
            const cart = JSON.parse(localStorage.getItem('cart')) || [];
            const updatedCart = cart.filter(item => item.name !== productName);
            localStorage.setItem('cart', JSON.stringify(updatedCart)); // Update local storage
            displayCartItems(); // Refresh the cart display
        }

        //function for search

        function performSearch() {
            const searchInput = document.getElementById('searchInput').value.trim().toLowerCase(); // Get search input
            let found = false; // Flag to check if found
            
            // Simulate searching in different files
            const searchTerms = {
                'product': ['item1', 'item2', 'item3'], // Example product items
                'about': ['about us', 'mission', 'vision'], // Example about terms
                'homepage': ['welcome', 'ecommerce', 'shop'], // Example homepage terms
            };
    
            // Check in the product file
            if (searchTerms.product.includes(searchInput)) {
                window.location.href = 'product.php'; // Redirect to products page
                found = true;
            }
            // Check in the about file
            else if (searchTerms.about.includes(searchInput)) {
                window.location.href = 'about.php'; // Redirect to about page
                found = true;
            }
            // Check in the homepage
            else if (searchTerms.homepage.includes(searchInput)) {
                window.location.href = 'index.php'; // Redirect to homepage
                found = true;
            }
    
            // If no match is found
            if (!found) {
                alert('Does not exist'); // Alert user that the term doesn't exist
            }
        }
    
        // Add event listener to search input for Enter key
        document.getElementById('searchInput').addEventListener('keypress', function(event) {
            if (event.key === 'Enter') {
                performSearch(); // Call performSearch on Enter key press
            }
        });


    