
<?php
session_start(); // Start the session

// Check if the user has accessed the required page
if (!isset($_SESSION['accessed'])) {
    // Redirect to product.php if not accessed
    header('Location: index.php');
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My HomePage</title>
    <link rel="stylesheet" href="mystyle.css">
   
</head>
<body>

<!-- Navigation bar -->
<div class="navbar">
    <a href="index.php">Home</a>
    <a href="product.php">Products</a>
    <a href="about.php">About</a>
    <a href="help.php">Help</a>
</div>

<!-- Search Bar -->
<div class="search-container">
    <input type="text" class="search-input" placeholder="Search..." id="searchInput">
    <button class="search-button" onclick="performSearch()">&#128269;</button> <!-- Search icon (magnifying glass) -->
</div>

<!-- Main content area -->
<div class="content" style="text-align: center; margin-top: 20px;">
    <h1>Welcome to Alexia Ecommerce</h1>
    <i><p>where everybody is somebody.</p></i>
</div>

<!-- Image container -->
<div class="image-container">
    <div class="arrow left" onclick="moveSlide(-1)">&#10094;</div> <!-- Left arrow -->
    <div class="images">
        <img src="image1.jpg" alt="Image 1">
        <img src="image2.jpg" alt="Image 2">
        <img src="image3.jpg" alt="Image 3">
        <img src="image3.jpg" alt="Image 3">
    </div>
    <div class="arrow right" onclick="moveSlide(1)">&#10095;</div> <!-- Right arrow -->
</div>

<script src="index.js"></script>

</body>
</html>
