<?php
session_start();

require('../database/create_db.php');

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
    <style>
        .img-fluid {
            width: 80em !important;
            height: 50em;
            align-items: center;
        }
    </style>
</head>

<body>
    <!--::header part start::-->
    <header class="main_menu home_menu">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="index.php"> <img src="img/logo.png" alt="logo"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="menu_icon"><i class="fas fa-bars"></i></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="about.php">about</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="blog.php" id="navbarDropdown_1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        product
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown_1">
                                        <a class="dropdown-item" href="product_list.php"> product list</a>
                                        <a class="dropdown-item" href="single-product.php?id=1">product details</a>

                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="blog.php" id="navbarDropdown_3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        pages
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown_2">
                                        <a class="dropdown-item" href="login.php">
                                            login

                                        </a>
                                        <a class="dropdown-item" href="checkout.php">product checkout</a>
                                        <a class="dropdown-item" href="cart.php">shopping cart</a>
                                   
                                    </div>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="blog.php" id="navbarDropdown_2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        blog
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown_2">
                                        <a class="dropdown-item" href="blog.php"> blog</a>
                                        <a class="dropdown-item" href="single-blog.php">Single blog</a>
                                    </div>
                                </li>

                            </ul>
                        </div>
                     
                       <!-- Cart Icon -->
                       <?php
                        require 'cartIcon.php';
                        ?>
                    </nav>
                </div>
            </div>
        </div>
    
    </header>
    <!-- Header part end-->

    <!-- breadcrumb part start-->
    <section class="breadcrumb_part single_product_breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb part end-->

    <!--================Single Product Area =================-->
    <div class="product_image_area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="product_img_slide owl-carousel">

                        <?php
                        if (isset($_GET['id'])) {
                            $sql = "SELECT * FROM products WHERE id='{$_GET['id']}' ";
                            $data = $conn->query($sql);
                            $result = $data->fetch(PDO::FETCH_ASSOC);
                            //  echo ($result);
                        ?>
                            <div class="single_product_img">
                                <img src="<?php echo $result['product_img']; ?>" alt="#" class="img-fluid" width=15px height=20px>
                            </div>
         
                    </div>
                </div>


                <div class="col-lg-8">
                    <div class="single_product_text text-center">
                        <h3><?php echo $result['product_name']; ?></h3>
                        <p>
                            <?php echo $result['product_desc']; ?> 
                        </p>
                        <p>
                            <?php

                            if ($result['on_sales'] == 0) {
                                echo "<h3>" ;
                                echo $result['product_price']  ;
                                 echo" $ ". "</h3>" ;

                                // echo $result['product_price'];
                            } else if ($result['on_sales'] == 1) {
                                echo "<h3>";
                                echo "  Sale From  "."<del>";
                                echo $result['product_price'] ;
                                echo " $" ."</del>" ." to " ;
                                echo (1 - ($result['sales_percentage']) / 100) * $result['product_price'] . " $";
                                echo "</h3>";
                            }
                            ?> 
                        </p>
                        <div class="card_area">
                            <!-- <div class="product_count_area">
                    <p>Quantity</p>
                    <div class="product_count d-inline-block">
                        <span class="product_count_item inumber-decrement"> <i class="ti-minus"></i></span>
                        <input class="product_count_item input-number" type="text" value="1" min="0" max="10">
                        <span class="product_count_item number-increment"> <i class="ti-plus"></i></span>
                    </div>
                    <p>From <?php echo $result['product_price']  ?>$ </p>
                </div> -->
                            <div class="add_to_cart">
                                <a href="./addToCart.php?id=<?php echo $result['id']; ?>" class="btn_3">add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>

            </div>
        </div>
    </div>
    <!--================End Single Product Area =================-->
    <!-- subscribe part here -->

   
    <!-- subscribe part end -->

    <!--::footer_part start::-->


    <div>
        <div>
            <div>


                <?php

                include "commnt.php";
                ?>



            </div>
        </div>
    </div>

    <footer class="footer_part">

        <div class="copyright_part">
            <div class="container">
                <div class="row ">
                    <div class="col-lg-12">
                        <div class="copyright_text">
                            <P>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;<script>
                                    document.write(new Date().getFullYear());
                                </script> All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </P>
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
</body>

</html>