<?php
session_start();
ob_start();

require('../database/create_db.php');

if ($_SESSION['product'] != []) {
  $itemCart = $_SESSION['product'];
} else {
  $itemCart = null;
}
// echo "<pre>";
// var_dump($_SESSION['product']);
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
  <link rel="stylesheet" href="cart.css">
</head>
<style>
  #cart-icon i {
    font-size: 70px !important;
    color: #000;
  }

  #cart-icon span {
    position: absolute;
    top: 13px;
    right: 3px;
    font-size: 18px;
    color: red;
  }
</style>

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
                    <a class="dropdown-item" href="single-product.php?id=4">product details</a>

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
  <section class="breadcrumb_part">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="breadcrumb_iner">
            <h2>checkout</h2>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- breadcrumb part end-->

  <!--================Checkout Area =================-->
  <section class="checkout_area section_padding">
    <div class="container">

      <div class="cupon_area">
        <form method="GET" action="checkout.php">
          <input type="text" placeholder="Enter coupon code" name="coupon" value="" />
          <!-- <a href= "./coupon.php"> -->
          <button type="submit" class="tp_btn">
            Apply Coupon
          </button>


          <!-- </a>   -->
        </form>

      </div>
      <div class="billing_details">
        <div class="row">
          <div class="col-lg-8">
            <h3>Billing Details</h3>
            <form class="row contact_form" method="POST">
              <div class="col-md-6 form-group p_star">
                <input type="text" class="form-control" id="first" name="name" placeholder="First name" required />

              </div>
              <div class="col-md-6 form-group p_star">
                <input type="text" class="form-control" id="last" name="name" placeholder="Last name" required />

              </div>

              <div class="col-md-6 form-group p_star">
                <input type="text" class="form-control" id="number" name="number" placeholder="Phone number" required />

              </div>
              <div class="col-md-6 form-group p_star">
                <input type="text" class="form-control" id="email" name="compemailany" placeholder="Email Address" required />

              </div>

              <div class="col-md-12 form-group p_star">
                <input type="text" class="form-control" id="add1" name="address" placeholder="Address" required />

              </div>

              <div class="col-md-12 form-group">

                <textarea class="form-control" name="message" id="message" rows="1" placeholder="Order Notes"></textarea><br>
                <input type="submit" class="btn_3" name="checkout" value="Checkout" />
              </div>
            </form>
          </div>
          <div class="col-lg-4">
            <div class="order_box">
              <h2>Your Order</h2>
              <ul class="list">
                <li>
                  <a href="#">Product
                    <span>Total</span>
                  </a>
                </li>
                <?php
                $total = 0;
                if ($itemCart) {
                  foreach ($itemCart as $i) {

                ?>
                    <li>
                      <a href="#"><?php echo $i['product_name']; ?>
                        <span class="middle">x <?php echo $i['0']; ?></span>
                        <span class="last"> <?php
                                            // echo $i['product_price']* $i['0'];
                                            // echo "gfg";
                                            $pri = (1 - ($i['sales_percentage']) / 100) * $i['product_price'];
                                            // echo $pri;
                                            $total1 = $pri *  $i['0'];
                                            echo $total1;
                                            ?> $</span>
                      </a>
                    </li>
                <?php $total = $total + $total1;
                  }
                } ?>
              </ul>
              <ul class="list list_2">
                <li>
                  <a href="#">Subtotal
                    <span><?php

                          echo $total;
                          ?>$</span>
                  </a>
                </li>
                <li>
                  <a href="#">Discount
                    <span><?php
                          $finleTotal = $total;
                          $per = 0;
                          if ($_SERVER["REQUEST_METHOD"] == "GET") {
                            // $total=0;
                            // echo $total;
                            if ($itemCart) {


                              foreach ($itemCart as $i) {
                                // $total=$total+$i['product_price']*  $i['0'];
                                if (isset($_GET['coupon'])) {
                                  $valueCoupon = $_GET['coupon'];

                                  $coupon = 'coupon..';
                                  $itemCart = $_SESSION['product'];
                                  $des = 0.2;
                                  if ($valueCoupon == $coupon) {
                                    $per = $total * $des;
                                    $_SESSION['discount'] = [];
                                    $_SESSION['discount'][] = $per;
                                    // echo $per;
                                    $finleTotal = $total - $per;
                                  }
                                }
                              }
                            }
                          }

                          echo $per; ?>$</span>
                  </a>
                </li>
                <li>
                  <a href="#">Total
                    <span><?php



                          echo $finleTotal; ?>$</span>
                  </a>
                </li>
              </ul>
              <div class="payment_item">
                <div class="radion_btn">
                  <input type="radio" id="f-option5" name="selector" required />
                  <label for="f-option5">Pay on delivery</label>
                  <div class="check"></div>
                </div>
                <p>
                  Please send a check to Store Name, Store Street, Store Town,
                  Store State / County, Store Postcode.
                </p>
              </div>
              <div class="creat_account">
                <input type="checkbox" id="f-option4" name="selector" required />
                <label for="f-option4">I’ve read and accept the </label>
                <a href="#">terms & conditions*</a>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php

  // print_r($_SESSION['discount']);
  // unset($_SESSION['loggedUser']);
  // $_SESSION['loggedUser'] = [];  // 


  // echo "<pre>";
  // var_dump($_SESSION['product']);
  // echo "</pre>";


  if (isset($_POST['checkout'])) {


  if ($_SESSION['loggedUser'] == []) {

    echo "<script>alert('Please Login')</script>";
  } else {
    $userId = $_SESSION['loggedUser'][1];
    $address = $_POST['address'];

    // echo $per;
    if ($finleTotal !== 0) {

      if ($_SESSION['discount'] != []) {
        $y = $_SESSION['discount'][0];
      } else {
        $y = 0;
      }

      $sql = "INSERT INTO `checkout` (`total_price`,`address`,`user_id`,`coupon_discount`) VALUES ('$finleTotal','$address',$userId,$y)";
      $conn->exec($sql);
      $last_id = $conn->lastInsertId();
      // unset($_SESSION['product']);
      $_SESSION['discount'] = [];
      // echo "<script>alert('Payment Completed , Thank You')</script>";
    }
  }
  foreach ($_SESSION['product'] as $product) {
    $userId = $_SESSION['loggedUser'][1];
    $sql2 = "INSERT INTO checkout_products (quantity,product_id,checkout_id) VALUES ('$product[0]','$product[id]',$last_id)";
    $conn->exec($sql2);
  
  }

  $_SESSION['product'] = [];
  // header("Location:checkout.php");
  echo "<script>
    alert('Payment Completed , Thank You')
    window.location.href='./checkout.php'

    </script>";

  }


  ?>

  <!--================End Checkout Area =================-->

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


</body>

</html>