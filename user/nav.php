<?php
require('../database/create_db.php');

if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
?>

<!doctype html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


	<!-- --------------- -->
    <meta name="theme-color" content="#000000" />
    <meta
      name="description"
      content="Web site created using bootstrap and php"
    />
    <meta name="theme-color" content="#000000" />

    <meta
      name="description"
      content="pillowmart is an online platform for buying different pillows and picking different items we provide. You can choose whatever you want in simple steps."
    />

    <meta
      name="keywords"
      content=" pillowmart , pillow , sleep , relaxation , php, mysql"
    />
    <meta name="author" content="Pillowmart team" />

<!-- ----------------- -->

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
    <!-- icon CSS -->
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <!-- magnific popup CSS -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- nice select CSS -->
    <link rel="stylesheet" href="css/nice-select.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="css/style.css">
	
</head>

<body>
    <!--::header part start::-->
    <header class="main_menu home_menu">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="index.php"> <img src="img/logo.png" alt="logo"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="menu_icon"><i class="fas fa-bars"></i></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php">Home</a>
                                </li>
                                
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="blog.php" id="navbarDropdown_1"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        product
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown_1">
                                        <a class="dropdown-item" href="product_list.php"> product list</a>
                                        <a class="dropdown-item" href="single-product.php?id=6">product details</a>
                                        
                                    </div>
                                </li>
                                <!-- <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="blog.php" id="navbarDropdown_3"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        pages
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown_2">
                                      
                                        <a class="dropdown-item" href="checkout.php">product checkout</a>
                                        <a class="dropdown-item" href="cart.php">shopping cart</a>
                                        <a class="dropdown-item" href="about.php">about</a>   
                                    </div>
                                </li>                               -->

								<?php
								if (isset($_SESSION['loggedUser'])){
									echo"<li class='nav-item dropdown'>
                                    <a class='nav-link dropdown-toggle' href='blog.php' id='navbarDropdown_3'
                                        role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                                        Profile
                                    </a>
                                    <div class='dropdown-menu' aria-labelledby='navbarDropdown_2'>
                                      
                                        <a class='dropdown-item' href='checkout.php'>product checkout</a>
                                        <a class='dropdown-item' href='cart.php'>shopping cart</a>
                                      <a class='dropdown-item' href='userProfile.php'>Profile</a>

                                    </div>
                                </li>";
								}else {

									echo "<li class='nav-item'>
									<a class='nav-link' href='login.php'>Login</a>
									</li>";
									
									echo "<li class='nav-item'>
									<a class='nav-link' href='register.php'>Register</a>
									</li>";
								};
								?>

								

								
								<li class="nav-item" style='margin:auto ;'>
                                    <?php
					   				require 'cartIcon.php';
					   				?>
                                </li>
                            </ul>
                        </div>
						<?php
                       
					//    require 'cartIcon.php';
					   ?>
                    </nav>
                </div>
            </div>
        </div>
    
    </header>
    <!-- Header part end-->

    <!-- breadcrumb part start-->
 
	<!-- breadcrumb part end-->
	
	<!-- Start Sample Area -->

	<!-- End Sample Area -->

	<!-- Start Button -->
	
	<!-- End Button -->

	<!-- Start Align Area -->
	
	<!-- End Align Area -->

	<!--::footer_part start::-->
    
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
	</body>
	
	</html>