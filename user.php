<?php include 'connect.php'; session_start(); 

if(!isset($_SESSION['email'])){
header('location:login.php'); 

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

        <!-- REGISTERED USER LIST START -->
        <section class="user-list">
            <div class="container">

                <div class="user-list-container">
                    <h1 class="user-heading">
                        User List
                    </h1>
                    <table class="table">
                        <thead>
                            <th>First Name</th>
                            <th>Last name</th>
                            <th>Email</th>
                            <th>Password</th>
                        </thead>
                        <tbody>

                            <?php $sql="Select * from `registration`"; $result=mysqli_query($con,$sql);
                            if($result){ while($row=mysqli_fetch_assoc($result)){ $firstname =
                            $row['firstname']; $lastname = $row['lastname']; $email = $row['email'];
                            $password = $row['password']; echo ' <tr> <td data-label="First
                            Name">'.$firstname.'</td> <td data-label="Last Name">'.$lastname.'</td> <td
                            data-label="Email">'.$email.'</td> <td data-label="Password">'.$password.'</td>
                            </tr>'; } } ?>
                        </tbody>
                    </table>
                    <?php $query = "Select id From registration ORDER by id";
                    $query_run=mysqli_query($con,$query); $row = mysqli_num_rows($query_run); echo
                    '<div class="user-count"> <p>'.$row.' user</p> </div>'; ?>

                </div>
            </div>
        </section>
        <!-- REGISTERED USER LIST END -->

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