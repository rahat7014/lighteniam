
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Lighteniam</title>

        <!-- Style Sheet Link -->
        <link rel="stylesheet" href="app/css/owl.carousel.min.css">
        <link rel="stylesheet" href="app/css/bootstrap.min.css">
        <link rel="stylesheet" href="app/css/style.css">
    </head>
    <body>
        <!-- HEADER AREA WITH NAVBAR START -->
        <header class="header-area">
            <div class="container">
                <div class="nav-bar">
                    <div class="nav-logo">
                        <a href="index.php">
                            <img src="app/img/logo.png" alt="web-logo">
                        </a>
                    </div>
                    <div class="nav-body">
                        <ul class="navlist-nav">
                            <li class="navlist-item">
                                <a class="navlist-link" href="index.php">Home</a>
                            </li>
                            <li class="navlist-item">
                                <a class="navlist-link dropdown-btn" href="#">Shop
                                    <img src="app/img/dropdown.png" alt="dropdown-icon">
                                </a>

                                <ul class="dropdown">
                                    <li>
                                        <a href="#">Orange Juice</a>
                                    </li>
                                    <li>
                                        <a href="#">Mango Juice</a>
                                    </li>
                                    <li>
                                        <a href="#">Avegado Juice</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="navlist-item">
                                <a class="navlist-link" href="#">About</a>
                            </li>
                            <li class="navlist-item">
                                <a class="navlist-link" href="#">Blog</a>
                            </li>
                        </ul>
                    </div>
                    <div class="nav-icons">
                        <ul>
                            <li>
                                <a href="login.php"><img src="app/img/user.png" alt=""></a>
                            </li>
                            <li>
                                <a href=""><img src="app/img/search.png" alt=""></a>
                            </li>
                            <li>
                                <a href=""><img src="app/img/cart.png" alt=""></a>
                            </li>
                            <li>
                                <div class="hamburger-menu" onclick="mobileMenu(this)">
                                    <div class="bar1"></div>
                                    <div class="bar2"></div>
                                    <div class="bar3"></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
        <!-- HEADER AREA WITH NAVBAR END -->

        <!-- HERO SLIDER AREA START -->

        <section class="slider-area">
            <div id="carouselExampleCaptions" class="carousel slide">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="app/img/slider-img.png" class="d-block w-100" alt="imgslider">
                        <div class="container position-relative">
                            <div class="carousel-caption">
                                <h4 class="light-color">ORGINAL SMOOTHIES</h4>
                                <h1 class="light-color">Make the Most of Morning</h1>
                                <h3 class="light-color">The quickest, easiest way to get in your fruits and veggies</h3>
                                <div class="button-area">
                                    <a href="#" class="theme-btn light-btn">Learn More</a>
                                    <a href="#" class="theme-btn dark-btn">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item position-relative">
                        <img src="app/img/slider-img.png" class="d-block w-100" alt="imgslider">
                        <div class="container position-relative">
                            <div class="carousel-caption">
                                <h4 class="light-color">ORGINAL SMOOTHIES</h4>
                                <h1 class="light-color">Make the Most of Morning</h1>
                                <h3 class="light-color">The quickest, easiest way to get in your fruits and veggies</h3>
                                <div class="button-area">
                                    <a href="#" class="theme-btn light-btn">Learn More</a>
                                    <a href="#" class="theme-btn dark-btn">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item position-relative">
                        <img src="app/img/slider-img.png" class="d-block w-100" alt="imgslider">
                        <div class="container position-relative">
                            <div class="carousel-caption">
                                <h4 class="light-color">ORGINAL SMOOTHIES</h4>
                                <h1 class="light-color">Make the Most of Morning</h1>
                                <h3 class="light-color">The quickest, easiest way to get in your fruits and veggies</h3>
                                <div class="button-area">
                                    <a href="#" class="theme-btn light-btn">Learn More</a>
                                    <a href="#" class="theme-btn dark-btn">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="container position-relative">
                        <div class="indicator-btn-area">
                            <button
                                class="carousel-control-prev"
                                type="button"
                                data-bs-target="#carouselExampleCaptions"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button
                                class="carousel-control-next"
                                type="button"
                                data-bs-target="#carouselExampleCaptions"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- HERO SLIDER AREA END -->

        <!-- PRODUCT SLIDER AREA START -->

        <section class="product-area pt-60 pb-30">
            <div class="container">
                <div class="owl-carousel owl-theme" id="product-slider">
                    <div>
                        <a href="#">
                            <div class="product-container">
                                <div class="rate-sticker">
                                    <img src="app/img/Sale-Chip1.png" alt="sell-chip">
                                </div>
                                <div class="product-img">
                                    <img src="app/img/product.png" alt="product">
                                    <div class="img-overlay">
                                        <img src="app/img/product-2.png" alt="">
                                        <div class="overlay-btn">
                                            <a href="#" class="theme-btn product-btn">Quick View</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="product-content">
                                    <h5>Ginger Grapefruit</h5>
                                    <div class="price-tag">
                                        <h6>$4.00 USD</h6>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a href="#">
                            <div class="product-container">
                                <div class="product-img">
                                    <img src="app/img/product.png" alt="product">
                                    <div class="img-overlay">
                                        <img src="app/img/product-2.png" alt="">
                                        <div class="overlay-btn">
                                            <a href="#" class="theme-btn product-btn">Quick View</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="product-content">
                                    <h5>Ginger Grapefruit</h5>
                                    <div class="price-tag">
                                        <h6>$4.00 USD</h6>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a href="#">
                            <div class="product-container">
                                <div class="rate-sticker">
                                    <img src="app/img/Sale-Chip2.png" alt="sell-chip">
                                </div>
                                <div class="product-img">
                                    <img src="app/img/product.png" alt="product">
                                    <div class="img-overlay">
                                        <img src="app/img/product-2.png" alt="">
                                        <div class="overlay-btn">
                                            <a href="#" class="theme-btn product-btn">Quick View</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="product-content">
                                    <h5>Ginger Grapefruit</h5>
                                    <div class="price-tag">
                                        <h6>$4.00 USD</h6>
                                        <del>$5.00 USD</del>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a href="#">
                            <div class="product-container">
                                <div class="product-img">
                                    <img src="app/img/product.png" alt="product">
                                    <div class="img-overlay">
                                        <img src="app/img/product-2.png" alt="">
                                        <div class="overlay-btn">
                                            <a href="#" class="theme-btn product-btn">Quick View</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="product-content">
                                    <h5>Ginger Grapefruit</h5>
                                    <div class="price-tag">
                                        <h6>$4.00 USD</h6>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a href="#">
                            <div class="product-container">
                                <div class="product-img">
                                    <img src="app/img/product.png" alt="product">
                                    <div class="img-overlay">
                                        <img src="app/img/product-2.png" alt="">
                                        <div class="overlay-btn">
                                            <a href="#" class="theme-btn product-btn">Quick View</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="product-content">
                                    <h5>Ginger Grapefruit</h5>
                                    <div class="price-tag">
                                        <h6>$4.00 USD</h6>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a href="#">
                            <div class="product-container">
                                <div class="rate-sticker">
                                    <img src="app/img/Sale-Chip1.png" alt="sell-chip">
                                </div>
                                <div class="product-img">
                                    <img src="app/img/product.png" alt="product">
                                    <div class="img-overlay">
                                        <img src="app/img/product-2.png" alt="">
                                        <div class="overlay-btn">
                                            <a href="#" class="theme-btn product-btn">Quick View</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="product-content">
                                    <h5>Ginger Grapefruit</h5>
                                    <div class="price-tag">
                                        <h6>$4.00 USD</h6>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a href="#">
                            <div class="product-container">
                                <div class="product-img">
                                    <img src="app/img/product.png" alt="product">
                                    <div class="img-overlay">
                                        <img src="app/img/product-2.png" alt="">
                                        <div class="overlay-btn">
                                            <a href="#" class="theme-btn product-btn">Quick View</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="product-content">
                                    <h5>Ginger Grapefruit</h5>
                                    <div class="price-tag">
                                        <h6>$4.00 USD</h6>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="view-btn-area text-center">
                    <a href="#" class="theme-btn outline-btn">View All</a>
                </div>
            </div>
        </section>

        <!-- PRODUCT SLIDER AREA END -->

        <!-- PRODUCT GRID AREA START -->

        <section class="product-grid pt-30 pb-60">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="grid-item">
                                    <img src="app/img/1.png" alt="image" class="img-fluid">
                                    <div class="grid-content">
                                        <h1 class="grid-content-title">
                                            Juices
                                        </h1>

                                        <h5 class="grid-content-disc">This smoothie totally changed my world. Our juices
                                            are made from the h4freshest fruits and natural ingredients.
                                        </h5>

                                        <a href="#" class="theme-btn light-btn pt-16">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="grid-item">
                                    <img src="app/img/2.png" alt="image" class="img-fluid">
                                    <div class="grid-content">
                                        <h1 class="grid-content-title">Smoothies
                                        </h1>

                                        <h5 class="grid-content-disc">Very good for a Saturday morning breakfast!
                                        </h5>

                                        <a href="#" class="theme-btn light-btn pt-16">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="grid-item">
                                    <img src="app/img/3.png" alt="image" class="img-fluid">
                                    <div class="grid-content">
                                        <h1 class="grid-content-title">Shakes
                                        </h1>

                                        <h5 class="grid-content-disc">Weirdly really good. These flavors work really well together.
                                        </h5>

                                        <a href="#" class="theme-btn light-btn pt-16">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="grid-item">
                            <img src="app/img/4.png" alt="image" class="img-fluid">
                            <div class="grid-content">
                                <h1 class="grid-content-title">
                                    Seasonal Favorites
                                </h1>

                                <h5 class="grid-content-disc">The best of fresh, seasonal ingredients create
                                    healthy and satisfying breakfast smoothies all year round. Spring is here, which
                                    means we're harvesting fresh fruits and veggies for our seasonal favorites!
                                </h5>

                                <a href="#" class="theme-btn light-btn pt-16">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <footer class="footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 pr-3">
                        <h6 class="footer-heading">
                            About your store
                        </h6>
                        <p class="footer-disc">
                            We dare to be different and we invite you to do the same. We'd love you to join
                            us on this colourful adventure of being you. You are here to be yourself. Fully
                            and unapologetically.
                        </p>

                        <p class="footer-disc">
                            Now, let's show to the world what we are made of!
                        </p>

                        <ul class="social-icon">
                            <li>
                                <a href="#"><img src="app/img/ig.png" alt="social-img"></a>
                            </li>
                            <li>
                                <a href="#"><img src="app/img/fb.png" alt="social-img"></a>
                            </li>
                            <li>
                                <a href="#"><img src="app/img/tw.png" alt="social-img"></a>
                            </li>
                            <li>
                                <a href="#"><img src="app/img/pt.png" alt="social-img"></a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-2 fb-60">
                        <h6 class="footer-heading">
                            Helpful link
                        </h6>

                        <ul class="footer-nav">
                            <li>
                                <a href="index.php">Home</a>
                            </li>
                            <li>
                                <a href="#">Shop</a>
                            </li>
                            <li>
                                <a href="#">About
                                </a>
                            </li>
                            <li>
                                <a href="#">Blog</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-2 fb-60">
                        <h6 class="footer-heading">
                            Quick Shop
                        </h6>

                        <ul class="footer-nav">
                            <li>
                                <a href="#">Blended Smoothies</a>
                            </li>
                            <li>
                                <a href="#">Juices</a>
                            </li>
                            <li>
                                <a href="#">Original Smoothies
                                </a>
                            </li>
                            <li>
                                <a href="#">Seasonal Favorites</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-3 fb-60">
                        <h6 class="footer-heading">
                            Let's stay in touch
                        </h6>

                        <p class="footer-disc">Sign up for exclusive offers, original stories, events and more.</p>

                        <input
                            class="form-control form-control-lg"
                            type="email"
                            placeholder="Enter your email address">

                        <a href="#" class="theme-btn dark-btn">Subscribe</a>
                    </div>
                </div>
            </div>
        </footer>

        <!-- script links -->
        <script src="app/js/jquery-3.3.1.slim.min.js"></script>
        <script src="app/js/popper.min.js"></script>
        <script src="app/js/bootstrap.min.js"></script>
        <script src="app/js/owl.carousel.min.js"></script>
        <script src="app/js/main.js"></script>
    </body>
</html>