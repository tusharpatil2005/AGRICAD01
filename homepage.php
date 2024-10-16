<?php
session_start();
include("connect.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Home | Agriculture E-commerce</title>
    <link rel="stylesheet" href="home_page.css">
</head>
<body>
    <!-- Navigation Bar -->
    <header>

        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">Agricard</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="about.html">About</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Products
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Seeds</a></li>
                      <li><a class="dropdown-item" href="#">Fertilizer</a></li>
                      <li><a class="dropdown-item" href="#">Equipment</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="index.php">Login</a>
                  </li>
                  <li class="nav-item"></li>
                    <a class="nav-link" href="whether.html">Whether</a>
                  </li>
                </ul>
                <form class="d-flex" role="search">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
              </div>
            </div>
          </nav>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <h2>Welcome to Agricard</h2>
        <p>Your one-stop shop for all agricultural needs</p>
        <a href="products.html" class="hero-button">Shop Now</a>
    </section>

    <!-- Product Listing -->
    <h1 class="page-title">Our Agriculture Products</h1>
  
  <div class="product-grid">
    <div class="product-card">
      <div class="image-container">
        <span class="organic-badge">Seed</span>
        <img src="assets/01.jpeg" alt="Fresh Tomatoes" class="product-image">
      </div>
      <div class="product-details">
        <h2 class="product-title">Natural Cotton Seeds Rasi 659</h2>
        <p class="product-price">₹ 830/-</p>
        <p class="product-description">Sowing season: May–June
          <br>Sowing method: Dibbling
          <br>Sowing spacing: 4 ft between rows and 1.5 ft </p>
        <button class="add-to-cart-btn" onclick="handleAddToCart()">🛒 Add to Cart</button>
      </div>
    </div>

    <div class="product-card">
      <div class="image-container">
        <span class="organic-badge">Seed</span>
        <img src="assets/02.jpeg" alt="Organic Carrots" class="product-image">
      </div>
      <div class="product-details">
        <h2 class="product-title">Rasi 797 is a white, organic cotton seed </h2>
        <p class="product-price">₹ 850/-</p>
        <p class="product-description">
          Usage: Agriculture Packaging type: Packet Weight: 475 gm Color: White
        </p>
        <button class="add-to-cart-btn" onclick="handleAddToCart()">🛒 Add to Cart</button>
      </div>
    </div>

    <div class="product-card">
      <div class="image-container">
        <span class="organic-badge">Seed</span>
        <img src="assets/03.jpg" alt="Fresh Spinach" class="product-image">
      </div>
      <div class="product-details">
        <h2 class="product-title">MH Dhanya Aatish BG II Cotton Seeds</h2>
        <p class="product-price">₹ 850/-</p>
        <p class="product-description">Boll size & shape	large Irrigation requirement	Rainfed/irrigated Depth of sowing	less than 1 cm Segment:-	Medium</p>
        <button class="add-to-cart-btn" onclick="handleAddToCart()">🛒 Add to Cart</button>
      </div>
    </div>

    <div class="product-card">
      <div class="image-container">
        <span class="organic-badge">Seed</span>
        <img src="assets/04.jpg" alt="Sweet Corn" class="product-image">
      </div>
      <div class="product-details">
        <h2 class="product-title">Ajeet 155 BG-II Cotton Seed Ajeet</h2>
        <p class="product-price">₹ 864/-</p>
        <p class="product-description">Crop Duration:145 - 160 days</p>
        <button class="add-to-cart-btn" onclick="handleAddToCart()">🛒 Add to Cart</button>
      </div>
    </div>

    <div class="product-card">
      <div class="image-container">
        <span class="organic-badge">Seed</span>
        <img src="assets/05.jpg" alt="Fresh Spinach" class="product-image">
      </div>
      <div class="product-details">
        <h2 class="product-title">Ankur 3034 BG </h2>
        <p class="product-price">₹ 864/-</p>
        <p class="product-description">cotton seeds are a type of hybrid seed that are suitable for medium and heavy soils, and can be grown in both rainfed </p>
        <button class="add-to-cart-btn" onclick="handleAddToCart()">🛒 Add to Cart</button>
      </div>
    </div>

    <div class="product-card">
      <div class="image-container">
        <span class="organic-badge">Seed</span>
        <img src="assets/06.jpg" alt="Fresh Spinach" class="product-image">
      </div>
      <div class="product-details">
        <h2 class="product-title">Dandev Plus</h2>
        <p class="product-price">₹ 810/-</p>
        <p class="product-description">Spreading and sturdy plant with more branching
          Fluffy boll bursting and ease in picking
          Long staple cotton </p>
        <button class="add-to-cart-btn" onclick="handleAddToCart()">🛒 Add to Cart</button>
      </div>
    </div>


    </div>

    
  </div>
  <br>
  
  <!--Best selling-->
  <h2 style="text-align: center;">Best Selling</h2>
 <div class="best_selling">
  <div>
    <div class="card" style="width: 18rem;">
      <img src="assets/best seeling/01.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Roundup Herbicide</h5>
        <h6>Price ₹291</h6>
        <p class="card-text">Roundup Herbicide is the most successful and widely used product of Bayer agrochemicals. <br>
          Roundup Herbicide technical name - Glyphosate 41% SL</p>
        <a href="#" class="btn btn-primary" style="background-color: #ff5722;">🛒 Add to Cart</a>
      </div>
    </div>
  </div>

  
  <div class="best_selling">
    <div>
      <div class="card" style="width: 18rem;">
        <img src="assets/best seeling/02.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Glycel Herbicide</h5>
          <h6>Price₹469</h6>
          <p class="card-text">Glycel Herbicide is a systemic, broad spectrum, non-selective post emergent herbicide. <br>
            Mode of Entry: Systemic</p>
          <a href="#" class="btn btn-primary" style="background-color: #ff5722;">🛒 Add to Cart</a>
        </div>
      </div>
    </div>
   </div>

   <div class="best_selling">
    <div>
      <div class="card" style="width: 18rem;">
        <img src="assets/best seeling/03.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Biovita Liquid BioFertilizer</h5>
          <h6>Price₹244</h6>
          <p class="card-text">Biovita X is a liquid seaweed biofertilizer offered by PI Industries.</p>
          <a href="#" class="btn btn-primary" style="background-color: #ff5722;">🛒 Add to Cart</a>
        </div>
      </div>
    </div>
   </div>

   <div class="best_selling">
    <div>
      <div class="card" style="width: 18rem;">
        <img src="assets/best seeling/04.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Saaf Fungicide</h5>
          <h6>Price ₹91</h6>
          <p class="card-text">Saaf Fungicide is one among the most trusted fungicide in India.
            Saaf technical name - Carbendazim 12% + Mancozeb 63% WP It is a proven & classic fungicide with systemic & contact action.</p>
          <a href="#" class="btn btn-primary" style="background-color: #ff5722;">🛒 Add to Cart</a>
        </div>
      </div>
    </div>
   </div>
 </div>
 

  
    <!-- Footer -->
<footer>
    <div class="footer-container">
        <!-- Footer About Section -->
        <div class="footer-about">
            <h3>About AgriMarket</h3>
            <p>AgriMarket is dedicated to providing the best agricultural products to farmers and growers globally. From organic seeds to the latest farming tools, we aim to foster growth and sustainability in agriculture.</p>
        </div>

        <!-- Footer Quick Links -->
        <div class="footer-links">
            <h3>Quick Links</h3>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="products.html">Products</a></li>
                <li><a href="about.html">About Us</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li><a href="faq.html">FAQs</a></li>
                <li><a href="terms.html">Terms of Service</a></li>
                <li><a href="privacy.html">Privacy Policy</a></li>
            </ul>
        </div>

        <!-- Footer Contact Info -->
        <div class="footer-contact">
            <h3>Contact Us</h3>
            <p>Email: <a href="mailto:support@agrimarket.com">support@agrimarket.com</a></p>
            <p>Phone: +1 (123) 456-7890</p>
            <p>Address: 1234 Green Fields Ave, Farming Town, USA</p>
        </div>

        <!-- Footer Social Media Links -->
        <div class="footer-social">
            <h3>Follow Us</h3>
            <a href="#" target="_blank"><img src="images/facebook-icon.png" alt="Facebook"></a>
            <a href="#" target="_blank"><img src="images/twitter-icon.png" alt="Twitter"></a>
            <a href="#" target="_blank"><img src="images/instagram-icon.png" alt="Instagram"></a>
        </div>
    </div>

    <div class="footer-bottom">
        <p>&copy; 2024 AgriMarket. All Rights Reserved.</p>
    </div>
</footer>

</body>
</html>