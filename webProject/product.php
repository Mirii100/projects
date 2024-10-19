<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My HomePage</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="general.css">
    
    
  
</head>
<body>

<!-- Navigation bar -->
<div class="navbar">
   
    <a href="index.php">Home</a>
    <a href="product.php">Products</a>
    <a href="about.php">About</a>
    <a href="index.html">my cart</a>
    
</div>

<!-- Main content area -->
<div class="content" style="text-align: center; margin-top: 20px;">
<marquee behavior="scroll" direction="left">  <h1>Welcome to Alexia</h1>
    </marquee>
</div>

<!-- Container for boxes -->
<div class="container">
    <!-- Individual boxes -->
    <div class="box" onclick="toggleContent(this)">
        <h3>Container 1</h3>
        <p>Initial content goes here.</p>
        <div class="more-content">
            <p>This is more content that is hidden by default. It appears when you click the box.</p>
            <img src="image1.jpg" alt="Image 1">
        <img src="image2.jpg" alt="Image 2">
        <img src="image3.jpg" alt="Image 3">
        <img src="image3.jpg" alt="Image 3">
        </div>
        
        <button>Read More</button><button class="add-cart-btn"onclick="addToCart('Container 1')">Add to Cart</button>
        <br>

    </div>
    <div class="box" onclick="toggleContent(this)">
        <h3>Container 2</h3>
        <p>Initial content goes here.</p>
        <div class="more-content">
            <p>This is more content that is hidden by default. It appears when you click the box.</p>
        </div>
        <button>Read More</button>
        <button class="add-cart-btn"onclick="addToCart('Container 2')">Add to Cart</button>
        <br>
    </div>
    <div class="box" onclick="toggleContent(this)">
        <h3>Container 3</h3>
        <p>Initial content goes here.</p>
        <div class="more-content">
            <p>This is more content that is hidden by default. It appears when you click the box.</p>
            <img src="image1.jpg" alt="Image 1">
        <img src="image2.jpg" alt="Image 2">
        <img src="image3.jpg" alt="Image 3">
        <img src="image3.jpg" alt="Image 3">
            <button class="add-cart-btn"onclick="addToCart('Container 3')">Add to Cart</button>
        <br>
        </div>
        <button>Read More</button>
    </div>
    <div class="box" onclick="toggleContent(this)">
        <h3>Container 4</h3>
        <p>Initial content goes here.</p>
        <div class="more-content">
            <p>This is more content that is hidden by default. It appears when you click the box.</p>
            <img src="image1.jpg" alt="Image 1">
        <img src="image2.jpg" alt="Image 2">
        <img src="image3.jpg" alt="Image 3">
        <img src="image3.jpg" alt="Image 3">
            <button class="add-cart-btn"onclick="addToCart('Container 4')">Add to Cart</button>
        <br>
        </div>
        <button>Read More</button>
    </div>
    <div class="box" onclick="toggleContent(this)">
        <h3>Container 1</h3>
        <p>Initial content goes here.</p>
        <div class="more-content">
            <p>This is more content that is hidden by default. It appears when you click the box.</p>
            <img src="image1.jpg" alt="Image 1">
        <img src="image2.jpg" alt="Image 2">
        <img src="image3.jpg" alt="Image 3">
        <img src="image3.jpg" alt="Image 3">
            <button class="add-cart-btn"onclick="addToCart('Container 1')">Add to Cart</button>
            <br>
        </div>
        <button>Read More</button>
    </div>
    <div class="box" onclick="toggleContent(this)">
        <h3>Container 2</h3>
        <p>Initial content goes here.</p>
        <div class="more-content">
            <p>This is more content that is hidden by default. It appears when you click the box.</p>
            <img src="image1.jpg" alt="Image 1">
        <img src="image2.jpg" alt="Image 2">
        <img src="image3.jpg" alt="Image 3">
        <img src="image3.jpg" alt="Image 3">
            <button onclick="addToCart('Container 3')"class="add-cart-btn">Add to Cart</button>
        <br>
        </div>
        <button>Read More</button>
    </div>
    <div class="box" onclick="toggleContent(this)">
        <h3>Container 3</h3>
        <p>Initial content goes here.</p>
        <div class="more-content">
            <p>This is more content that is hidden by default. It appears when you click the box.</p><button onclick="addToCart('Container 3')"class="add-cart-btn">Add to Cart</button>
            <br>
        </div>
        <button>Read More</button>
    </div>
    <div class="box" onclick="toggleContent(this)">
        <h3>Container 4</h3>
        <p>Initial content goes here.</p>
        <div class="more-content">
            <p>This is more content that is hidden by default. It appears when you click the box.</p>
        </div>
        <button>Read More</button><button class="add-cart-btn"onclick="addToCart('Container 4')">Add to Cart</button>
        <br>
    </div>




    <div class="box" onclick="toggleContent(this)">
        <h3>Container 1</h3>
        <p>Initial content goes here.</p>
        <div class="more-content">
            <p>This is more content that is hidden by default. It appears when you click the box.</p>
            <button class="add-cart-btn"onclick="addToCart('Container 1')">Add to Cart</button>
            <br> </div>
        <button>Read More</button>
    </div>
    <div class="box" onclick="toggleContent(this)">
        <h3>Container 2</h3>
        <p>Initial content goes here.</p>
        <div class="more-content">
            <p>This is more content that is hidden by default. It appears when you click the box.</p>
        <button class="add-cart-btn"onclick="addToCart('Container 2')">Add to Cart</button>
        <br></div>
        <button>Read More</button>
    </div>
    <div class="box" onclick="toggleContent(this)">
        <h3>Container 3</h3>
        <p>Initial content goes here.</p>
        <div class="more-content">
            <p>This is more content that is hidden by default. It appears when you click the box.</p>
        <button class="add-cart-btn"onclick="addToCart('Container 3')">Add to Cart</button></div>
        <br>
        <button>Read More</button>
    </div>
    <div class="box" onclick="toggleContent(this)">
        <h3>Container 4</h3>
        <p>Initial content goes here.</p>
        <div class="more-content">
            <p>This is more content that is hidden by default. It appears when you click the box.</p>
        <button class="add-cart-btn"onclick="addToCart('Container 3')">Add to Cart</button>
        <br></div>
        <button>Read More</button>
    </div>
    <div class="box" onclick="toggleContent(this)">
        <h3>Container 1</h3>
        <p>Initial content goes here.</p>
        <div class="more-content">
            <p>This is more content that is hidden by default. It appears when you click the box.</p>
            <p>This is more content that is hidden by default. It appears when you click the box.</p><button class="add-cart-btn"onclick="addToCart('Container 3')">Add to Cart</button>
            <br>
        </div>
        <button>Read More</button>
    </div>
    <div class="box" onclick="toggleContent(this)">
        <h3>Container 2</h3>
        <p>Initial content goes here.</p>
        <div class="more-content">
            <p>This is more content that is hidden by default. It appears when you click the box.</p><button class="add-cart-btn">Add to Cart</button>
            <br>
        </div>
        <button>Read More</button>
    </div>
    <div class="box" onclick="toggleContent(this)">
        <h3>Container 3</h3>
        <p>Initial content goes here.</p>
        <div class="more-content">
            <p>This is more content that is hidden by default. It appears when you click the box.</p><button class="add-cart-btn"onclick="addToCart('Container 3')">Add to Cart</button>
            <br>
        </div>
        <button>Read More</button>
    </div>
    <div class="box" onclick="toggleContent(this)">
        <h3>Container 4</h3>
        <p>Initial content goes here.</p>
        <div class="more-content">
            <p>This is more content that is hidden by default. It appears when you click the box.</p><button class="add-cart-btn">Add to Cart</button>
            <br>
        </div>
        <button>Read More</button>
    </div>
    <div class="box" onclick="toggleContent(this)">
        <h3>Container 1</h3>
        <p>Initial content goes here.</p>
        <div class="more-content">
            <p>This is more content that is hidden by default. It appears when you click the box.</p><button class="add-cart-btn"onclick="addToCart('Container 3')">Add to Cart</button>
            <br>
        </div>
        <button>Read More</button>
    </div>
    <div class="box" onclick="toggleContent(this)">
        <h3>Container 5</h3>
        <p>Initial content goes here.</p>
        <div class="more-content">
            <p>This is more content that is hidden by default. It appears when you click the box.</p>
            <button class="add-cart-btn"onclick="addToCart('Container 5')">Add to Cart</button>
            <br>
        </div>
        <button>Read More</button>
    </div>
    <div class="box" onclick="toggleContent(this)">
        <h3>Container 3</h3>
        <p>Initial content goes here.</p>
        <div class="more-content">
            <p>This is more content that is hidden by default. It appears when you click the box.</p><button class="add-cart-btn"onclick="addToCart('Container 3')">Add to Cart</button>
            <br>
        </div>
        <button>Read More</button>
    </div>
    <div class="box" onclick="toggleContent(this)">
        <h3>Container 4</h3>
        <p>Initial content goes here.</p>
        <div class="more-content">
            <p>This is more content that is hidden by default. It appears when you click the box.</p><button class="add-cart-btn"onclick="addToCart('Container 3')">Add to Cart</button>
            <br>
        </div>
        <button>Read More</button>
    </div>
    <div class="box" onclick="toggleContent(this)">
        <h3>Container 6</h3>
        <p>Initial content goes here.</p>
        <div class="more-content">
            <p>This is more content that is hidden by default. It appears when you click the box.</p>
            <button class="add-cart-btn"onclick="addToCart('Container 6')">Add to Cart</button>
            <br>
        </div>
        <button>Read More</button>
    </div>
    <div class="box" onclick="toggleContent(this)">
        <h3>Container 8</h3>
        <p>Initial content goes here.</p>
        <div class="more-content">
            <p>This is more content that is hidden by default. It appears when you click the box.</p><button class="add-cart-btn"onclick="addToCart('Container 8')">Add to Cart</button>
            <br>
        </div>
        <button>Read More</button>
    </div>
    <div class="box" onclick="toggleContent(this)">
        <h3>Container 3</h3>
        <p>Initial content goes here.</p>
        <div class="more-content">
            <p>This is more content that is hidden by default. It appears when you click the box.</p><button class="add-cart-btn"onclick="addToCart('Container 3')">Add to Cart</button>
            <br>
        </div>
        <button>Read More</button>
    </div>
    <div class="box" onclick="toggleContent(this)">
        <h3>Container 10</h3>
        <p>Initial content goes here.</p>
        <div class="more-content">
            <p>This is more content that is hidden by default. It appears when you click the box.</p><button class="add-cart-btn"onclick="addToCart('Container 10')">Add to Cart</button>
            <br>
        </div>
        <button>Read More</button>
    </div>
    <div class="box" onclick="toggleContent(this)">
        <h3>Container 20</h3>
        <p>Initial content goes here.</p>
        <div class="more-content">
            <p>This is more content that is hidden by default. It appears when you click the box.</p><button class="add-cart-btn"onclick="addToCart('Container 20')">Add to Cart</button>
            <br>
        </div>
        <button>Read More</button>
    </div>
    <div class="box" onclick="toggleContent(this)">
        <h3>Container 19</h3>
        <p>Initial content goes here.</p>
        <div class="more-content">
            <p>This is more content that is hidden by default. It appears when you click the box.</p><button class="add-cart-btn"onclick="addToCart('Container 19')">Add to Cart</button>
            <br>
        </div>
        <button>Read More</button>
    </div>
    <div class="box" onclick="toggleContent(this)">
        <h3>Container 18</h3>
        <p>Initial content goes here.</p>
        <div class="more-content">
            <p>This is more content that is hidden by default. It appears when you click the box.</p><button class="add-cart-btn"onclick="addToCart('Container 18')">Add to Cart</button>
            <br>
        </div>
        <button>Read More</button>
    </div>
    <div class="box" onclick="toggleContent(this)">
        <h3>Container 4</h3>
        <p>Initial content goes here.</p>
        <div class="more-content">
            <p>This is more content that is hidden by default. It appears when you click the box.</p><button class="add-cart-btn"onclick="addToCart('Container 3')">Add to Cart</button>
            <br>
        </div>
        <button>Read More</button>
    </div>
    <div class="box" onclick="toggleContent(this)">
        <h3>Container 1</h3>
        <p>Initial content goes here.</p>
        <div class="more-content">
            <p>This is more content that is hidden by default. It appears when you click the box.</p><button class="add-cart-btn"onclick="addToCart('Container 3')">Add to Cart</button>
            <br>
        </div>
        <button>Read More</button>
    </div>
    <div class="box" onclick="toggleContent(this)">
        <h3>Container 2</h3>
        <p>Initial content goes here.</p>
        <div class="more-content">
            <p>This is more content that is hidden by default. It appears when you click the box.</p><button class="add-cart-btn"onclick="addToCart('Container 3')">Add to Cart</button>
            <br>
        </div>
        <button>Read More</button>
    </div>
    <div class="box" onclick="toggleContent(this)">
        <h3>Container 3</h3>
        <p>Initial content goes here.</p>
        <div class="more-content">
        <button class="add-cart-btn"onclick="addToCart('Container 3')">Add to Cart</button>
        <br>    <p>This is more content that is hidden by default. It appears when you click the box.</p>
        </div>
        <button>Read More</button>
    </div>
    <div class="box" onclick="toggleContent(this)">
        <h3>Container 4</h3>
        <p>Initial content goes here.</p>
        <div class="more-content">
            <p>This is more content that is hidden by default. It appears when you click the box.</p>
        <button class="add-cart-btn"onclick="addToCart('Container 3')">Add to Cart</button>
        <br>    <p>This is more content that is hidden by default. It appears when you click the box.</p>
        </div>
        <button>Read More</button>
    </div>
    <div class="box" onclick="toggleContent(this)">
        <h3>Container 1</h3>
        <p>Initial content goes here.</p>
        <div class="more-content">
            <p>This is more content that is hidden by default. It appears when you click the box.</p>
        <button class="add-cart-btn"onclick="addToCart('Container 1')">Add to Cart</button>
        <br>    <p>This is more content that is hidden by default. It appears when you click the box.</p>
        </div>
        <button>Read More</button>
    </div>
    <div class="box" onclick="toggleContent(this)">
        <h3>Container 2</h3>
        <p>Initial content goes here.</p>
        <div class="more-content">
            <p>This is more content that is hidden by default. It appears when you click the box.</p>
        <button class="add-cart-btn"onclick="addToCart('Container 2')">Add to Cart</button>
        <br>    <p>This is more content that is hidden by default. It appears when you click the box.</p>
        </div>
        <button>Read More</button>
    </div>
    <div class="box" onclick="toggleContent(this)">
        <h3>Container 3</h3>
        <p>Initial content goes here.</p>
        <div class="more-content">
            <p>This is more content that is hidden by default. It appears when you click the box.</p><button class="add-cart-btn"onclick="addToCart('Container 3')">Add to Cart</button>
            <br>  
        </div>
        <button>Read More</button>
    </div>
    <div class="box" onclick="toggleContent(this)">
        <h3>Container 4</h3>
        <p>Initial content goes here.</p>
        <div class="more-content">
            <p>This is more content that is hidden by default. It appears when you click the box.</p>
       <button class="add-cart-btn"onclick="addToCart('Container 4')">Add to Cart</button>
        <br> </div>
        <button>Read More</button>
    </div>

</div>

<script src="index.js">   
</script>

</body>
</html>
