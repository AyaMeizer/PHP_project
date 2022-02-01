<?php
session_start();
require('../database/create_db.php');

// session_unset();
// session_destroy();
?>
<!doctype html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>pillloMart</title>
    <link rel="icon" href="img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="css/all.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="css/slick.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/register.css">
</head>

<body>
    <!--::header part start::-->
    <?php
        include 'nav.php';
    ?>
    <!-- Header part end-->

    <!-- breadcrumb part start-->
    <section class="breadcrumb_part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner">
                        <h2>Register</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb part end-->

    <!--================register_part Area =================-->
    <section class="login_part section_padding ">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <div class="login_part_text text-center">
                        <div class="login_part_text_iner">
                            <h2>Are you an old customer to our Shop?</h2>
                            <p>There are advances being made in science and technology
                                everyday, and a good example of this is the</p>
                            <a href="login.php" class="btn_3">Log In Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="login_part_form">
                        <div class="login_part_form_iner">
                            <h3>Welcome to our website ! <br>
                                Please Sign up now</h3>

                                       
   <?php

    if (isset($_POST['register'])) {
        $email = $_POST['email'];
        $username = $_POST['name'];
        $pass = $_POST['password'];
        $repassword = $_POST['repassword'];
        $phone = $_POST['phone'];
        $regex = "/^[^ ]+@[^ ]+\.[a-z]{2,3}$/";
        $flag = false;
        if (preg_match($regex, $email) && strlen($pass) >= 8 && $repassword === $pass) {
            
                $servername = "localhost";
                $password = "";
                $db_user = "root";
                $db_name = "pillowmart";
                    try {
                        $conn = new PDO("mysql:host=$servername;dbname=$db_name", $db_user, $password);
                        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $stmt = $conn->prepare("SELECT * FROM `users` WHERE `email`='" . $email . "'");
                $stmt->execute();

                if ($stmt->rowCount()) {
                    echo("This email already exists");
                }
                $sqlInsert = "INSERT INTO `users` (`email`,`username`,`password`,`phone`, `is_admin`) 
                VALUES ('$email','$username','$pass', $phone, 0)";

                $conn->exec($sqlInsert);    
               echo "<script>window.location.href='login.php'</script>";
            } catch (PDOException $e) {
            }
        }
    } 

    ?>

                            <form class="row contact_form"  method="post" novalidate="novalidate" id="form">
                                <div class="col-md-12 form-group p_star">
                                    <input type="text" class="form-control" id="name" name="name" 
                                        placeholder="Username">
                                        <br>
                                            <small id="usernameMessage">Message</small>
                                         <br>
                                </div>
                                <div class="col-md-12 form-group p_star">
                                    <input type="email" class="form-control" id="email" name="email" 
                                        placeholder="Email">
                                        <br>
                                          <small id="emailMessage">Message</small>
                                         <br>
                                </div>
                                <div class="col-md-12 form-group p_star">
                                    <input type="password" class="form-control" id="password" name="password" 
                                        placeholder="Password">
                                        <br>
                                             <small id="passwordMessage">Message</small>
                                      <br>
                                </div>
                                <div class="col-md-12 form-group p_star">
                                    <input type="password" class="form-control" id="confPassword" name="repassword" 
                                        placeholder="Confirm Password">
                                        <br>
                                             <small id="repasswordMessage">Message</small>
                                       <br>
                                </div>
                                <div class="col-md-12 form-group p_star">
                                    <input type="number" class="form-control" id="phone" name="phone" 
                                        placeholder="Phone">
                                        <br>
                                             <small id="phoneMessage">Message</small>
                                       <br>
                                </div>
                                <div class="col-md-12 form-group">
                                    <input type="submit" name="register" value="submit" class="btn_3" id='sub-btn'>
                                        Register
                                    </input>
                                    <a class="lost_pass" href="login.php">you already have account?</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================login_part end =================-->

    <!--::footer_part start::-->
    <footer class="footer_part">
        <div class="footer_iner section_bg">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-lg-8">
                        <div class="footer_menu">
                            <div class="footer_logo">
                                <a href="index.php"><img src="img/logo.png" alt="#"></a>
                            </div>
                            <div class="footer_menu_item">
                                <a href="index.php">Home</a>
                                <a href="about.php">About</a>
                                <a href="product_list.php">Products</a>
                                <a href="#">Pages</a>
                                <a href="blog.php">Blog</a>
                                <a href="contact.php">Contact</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="social_icon">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-google-plus-g"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="copyright_part">
            <div class="container">
                <div class="row ">
                    <div class="col-lg-12">
                        <div class="copyright_text">
                            <P><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></P>
                            <div class="copyright_link">
                                <a href="#">Turms & Conditions</a>
                                <a href="#">FAQ</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--::footer_part end::-->

    <!-- jquery plugins here-->
    <script src="js/jquery-1.12.1.min.js"></script>
    <!-- popper js -->
    <script src="js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- easing js -->
    <script src="js/jquery.magnific-popup.js"></script>
    <!-- swiper js -->
    <script src="js/swiper.min.js"></script>
    <!-- swiper js -->
    <script src="js/mixitup.min.js"></script>
    <!-- particles js -->
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <!-- slick js -->
    <script src="js/slick.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>
    <!-- custom js -->
    <script src="js/custom.js"></script>
    <script src="Register.js"></script>
</body>
    
</html>