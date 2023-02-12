<?php 

$success=0;
$user=0;

if($_SERVER['REQUEST_METHOD']=='POST')
{ include 'connect.php'; 
    $firstname = $_POST['firstname']; 
    $lastname = $_POST['lastname']; 
    $email = $_POST['email'];
    $password = $_POST['password'];

    

    $sql = "Select * from `registration` where email ='$email' and email is not NULL ";
    $result = mysqli_query($con,$sql);
    if($result){
        $num = mysqli_num_rows($result);
        if($num>0){
            $user=1;
        }else{
            $sql="insert into `registration`(firstname,lastname,email,password) 
            values('$firstname','$lastname','$email','$password')";
            $result=mysqli_query($con,$sql);
            if($result){
            $success=1;
            }else{
            die(mysqli_error($con));
            }
        }
    }
} 

?>

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

        <!-- REGISTRATION FORM AREA START -->
        <section class="form-area">
            <div class="container">
                <div class="form-body reg-page">
                    <h4 class="form-heading">
                        Register Your Account
                    </h4>
                    <!-- ALART -->
                    <?php if($user){ echo '<div class="alert alert-primary" role="alert"> USER
                    ALREADY EXIST! TRY WITH ANOTHER EMAIL... </div>'; } ?>
                    <?php if($success){ echo '<div class="alert alert-success" role="alert"> USER
                    YOU ARE SUCCESSFULLY SIGNED UP<a class="alart-btn" href="login.php">Sign in</a></div>';} ?>
                    <!-- ALART -->
                    <form method="post" action="registration.php">
                        <div class="row">
                            <div class="col-lg-6">
                                <input
                                    type="text"
                                    name="firstname"
                                    class="form-control"
                                    placeholder="First Name">
                            </div>
                            <div class="col-lg-6">
                                <input type="text" name="lastname" class="form-control" placeholder="Last name">
                            </div>
                            <div class="col-lg-6">
                                <input type="email" name="email" class="form-control" placeholder="Email">
                            </div>
                            <div class="col-lg-6">
                                <input
                                    type="password"
                                    name="password"
                                    class="form-control"
                                    placeholder="Password">
                            </div>

                            <div class="col-12">
                                <button type="submit" class="theme-btn outline-btn">
                                    Sign In
                                </button>

                                <a class="action-text" href="login.php">Cancel</a>
                            </div>
                        </div>
                    </form>
                </div>
            </section>
            <!-- REGISTRATION FORM AREA END -->

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

                            <a href="registration.php" class="theme-btn dark-btn">Subscribe</a>
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