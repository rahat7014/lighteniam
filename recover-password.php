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

        <!-- PASSWORD RECOVERY SECTION START -->
        <section class="form-area">
            <div class="container">
                <div class="form-body recover-pass">
                    <h4 class="form-heading">
                        Recover Password
                    </h4>
                    <form>
                        <div class="row">
                            <div class="col-lg-12">
                                <label>Please enter your email and we will send you a password reset link.</label>
                                <input type="email" class="form-control" placeholder="Enter your email address">
                            </div>

                            <div class="col-12">
                                <a href="#" class="theme-btn outline-btn">
                                    Sign In
                                </a>

                                <a class="action-text" href="login.php">Cancel</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <!-- PASSWORD RECOVERY SECTION START -->

        <!-- FOOTER AREA  -->
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

                    <div class="col-lg-2">
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

                    <div class="col-lg-2">
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

                    <div class="col-lg-3">
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