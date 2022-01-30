<!-- <?php
        include "../database/connection.php";
        $edit = "SELECT * FROM users";
        $data = $conn->query($edit);
        $result = $data->fetch(PDO::FETCH_ASSOC);
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
                                    <a class="nav-link" href="about.html">about</a>
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
                                        <a class="dropdown-item" href="confirmation.php">confirmation</a>
                                        <a class="dropdown-item" href="elements.php">elements</a>
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

                                <li class="nav-item">
                                    <a class="nav-link" href="contact.php">Contact</a>
                                </li>
                            </ul>
                        </div>
                        <div class="hearer_icon d-flex align-items-center">
                            <a id="search_1" href="javascript:void(0)"><i class="ti-search"></i></a>
                            <a href="cart.php">
                                <i class="flaticon-shopping-cart-black-shape"></i>
                            </a>
                            <!-- <div class="dropdown cart">
                                <a class="dropdown-toggle" href="cart" id="navbarDropdown3" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="flaticon-shopping-cart-black-shape"></i>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <div class="single_product">
    
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>

    </header>
    <!-- Header part end-->

    <!-- breadcrumb part start-->
    <section class="breadcrumb_part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner">
                        <h2>Your Profile</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb part end-->




    <div class="row">
        <div class="col-12">

        </div>





        <div class="col-lg-8" style='margin-left: 280px;
             display: flex;
             align-items: center;
             flex-direction: column'>
            <form class="form-contact contact_form" action="<?php echo $_SERVER["PHP_SELF"] ?>" method="POST" id="contactForm">
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <input class="form-control" name="username" id="name" type="text" value="<?php echo $result['username'] ?>" placeholder='Name'>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <input class="form-control" name="email" id="" type="text" placeholder='Email' value="<?php echo $result['email'] ?>" readonly>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <input class="form-control" name="password" id="" type="text" value="<?php echo $result['password'] ?>" placeholder='Password'>
                        </div>

                        <div class="form-group">
                            <input class="form-control" name="phone" id="" type="number" value="<?php echo $result['phone'] ?>" placeholder='Phone'>
                        </div>
                    </div>
                </div>
                <div class="form-group mt-3">
                    <input type="submit" class="btn_3 button-contactForm" name="update">
                </div>
            </form>

            <?php


            if ($_SERVER['REQUEST_METHOD'] == "POST") {
                $userName = $_POST['username'];
                $password = $_POST['password'];
                $phone = $_POST['phone'];
                $sql = "UPDATE users SET username='$userName', password='$password', phone='$phone'";
                $conn->exec($sql);
                echo "<script>window.location.href='http://localhost/PHP-project/PHP_project/user/userProfile.php'</script>";
            }

            ?>

        </div>
        <div class="col-lg-4">

        </div>
    </div>
    </section>


    <div class="main-content" style='margin-left: 150px ;
       
         
             '>
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="order_details_iner">

                            <h3 style='margin:5%  40%;
           
             flex-direction: column'>Order Details</h3>
                            <table class="table table-borderless">
                                <thead>
                                    <tr>

                                        <th scope="col" colspan="2">Product</th>
                                        <th scope="col">Quantity</th>
                                        <th scope="col">Total</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <?php
                                        $sql = $conn->prepare("SELECT * FROM checkout_products INNER JOIN products ON checkout_products.product_id = products.id");
                                        $sql->execute();
                                        $sql3 = $conn->prepare("SELECT * FROM checkout INNER JOIN users ON checkout.user_id = users.id");
                                        $sql3->execute();
                                        $data3 = $sql3->fetch(PDO::FETCH_ASSOC);

                                        $sql4 = $conn->prepare("SELECT * FROM checkout
                                                --  INNER JOIN checkout_products ON checkout.id = checkout_products.checkout_id
                                                 ");
                                        $sql4->execute();
                                        $data4 = $sql4->fetchAll(PDO::FETCH_ASSOC);
                                        ?>
                                        <?php
                                        $tot2 = 0;
                                        foreach ($sql as $item) {
                                            $tot = ($item['quantity'] * $item['product_price'] - $item['sales_percentage'] * $item['product_price'] / 100)
                                        ?>

                                            <td colspan="2"><span><?php echo $item['product_name'] ?></span></td>
                                            <td>x<?php echo $item['quantity']; ?></td>
                                            <td> <span><?php echo '$ ' . $tot; ?></span></td>
                                            <td> <span><?php
                                                        echo $data3['username'];
                                                        $tot2 += $tot;
                                                        ?></span></td>
                                    </tr>

                                </tbody>
                                <tfoot>
                                </tfoot>
                            <?php
                                        };
                            ?>
                            </table>
                            <table class="table table-borderless">
                                <tr>
                                    <hr />
                                    <th scope="col" colspan="2"></th>
                                    <th scope="col" colspan="2">Total</th>
                                    <th scope="col" colspan="2"></th>
                                    <th scope="col" colspan="2"></th>
                                    <th><?php

                                        echo $tot2; ?></th>

                                </tr>
                            </table>
                        </div>
                    </div>
                </div>








            </div>
        </div>
    </div> <!-- ================ contact section end ================= -->

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
    <!-- <script src="js/jquery.form.js"></script> -->
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>
    <!-- custom js -->
    <script src="js/custom.js"></script>
</body>

</html> -->