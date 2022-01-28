<?php
session_start();
include "../database/connection.php";

$itemCart = $_SESSION['product'];
echo "<pre >";
// print_r($_SESSION['product']);
// echo $_SESSION['product'][$_GET[4]][0] ;
print_r($_SESSION['loggedUser']);
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
  <!-- icon CSS -->
  <link rel="stylesheet" href="css/flaticon.css">
  <link rel="stylesheet" href="css/themify-icons.css">
  <!-- magnific popup CSS -->
  <link rel="stylesheet" href="css/magnific-popup.css">
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
                    <a class="dropdown-item" href="single-product.php">product details</a>

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
              <div class="dropdown cart">
                <a class="dropdown-toggle" href="#" id="navbarDropdown3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="flaticon-shopping-cart-black-shape"></i>
                </a>
                <!-- <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <div class="single_product">
    
                                    </div>
                                </div> -->
              </div>
            </div>
          </nav>
        </div>
      </div>
    </div>
    <div class="search_input" id="search_input_box">
      <div class="container ">
        <form class="d-flex justify-content-between search-inner">
          <input type="text" class="form-control" id="search_input" placeholder="Search Here">
          <button type="submit" class="btn"></button>
          <span class="ti-close" id="close_search" title="Close Search"></span>
        </form>
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
            <h2>cart list</h2>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- breadcrumb part end-->

  <!--================Cart Area =================-->
  <section class="cart_area section_padding">
    <div class="container">
      <div class="cart_inner">
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">Product</th>
                <th scope="col">Price</th>
                <th scope="col">Quantity</th>
                <th scope="col">Total</th>
                <th scope="col">Delete</th>

              </tr>
            </thead>
            <tbody>


              <?php
                $total=0;
                foreach ($itemCart as $i){

              ?>
                <tr>
                  <td>
                    <div class="media">
                      <div class="d-flex">
                        <img src="<?php echo $i['product_img']; ?>" alt="<?php echo $i['product_name']; ?>" />
                      </div>
                      <div class="media-body">
                        <p><?php echo $i['product_name']; ?></p>
                      </div>
                    </div>
                  </td>
                  <td>
                    <h5><?php
                        if($i['on_sales']==0 ){
                          $pri=$i['product_price'];  
                         echo $pri;    
                        }else if($i['on_sales']==1) {
                          $pri=(1-($i['sales_percentage'])/100)*$i['product_price'];
                        echo $pri;
                        }?>$</h5>
                  </td>
                  <td>
                    <div class="product_count">
                      <form method="POST">
                        <span class="input-number"><a href="./decrement.php?id=<?php  echo $i['id']?>">  <i class="ti-minus"></i></a></span>
                        <input neme="total" class="input-number" type="text" value="<?php echo $i['0']; ?>" min="0" max="10">
                        <span class="input-number"><a href="./increment.php?id=<?php  echo $i['id']?>"> <i class="ti-plus"></i></a></span>
                      </form>
                    </div>
                  </td>
                  <td>
                    <h5>
                      <?php
                        echo $pri*  $i['0'];
                        // echo "gfg";
                       
                        $total=$total+$pri*  $i['0'];
                      ?> $
                      </h5>
                  </td>
                  <td>
                    <a href="./delet.php?id=<?php  echo $i['id']?>">delete</a>
                  </td>
                  
                </tr>


              <?php } ?>

<!-- 
              <tr class="bottom_button">
                <td>
                  <a class="btn_1" href="#">Update Cart</a>
                </td>
                <td></td>
                <td></td>
                <td>
                  <div class="cupon_text float-right">
                    <a class="btn_1" href="#">Close Coupon</a>
                  </div>
                </td>
              </tr> -->
              <tr>
                <td></td>
                <td></td>
                <td>
                  <h5>Subtotal</h5>
                </td>
                <td>
                  <h5><?php echo $total; ?></h5>
                </td>
              </tr>
              <!-- <tr class="shipping_area">
                <td></td>
                <td></td> -->
                <!-- <td>
                  <h5>Shipping</h5>
                </td>
                
                <td>
                  <div class="shipping_box">
                    <ul class="list">
                      <li>
                        Flat Rate: $5.00
                        <input type="radio" aria-label="Radio button for following text input">
                      </li>
                      <li>
                        Free Shipping
                        <input type="radio" aria-label="Radio button for following text input">
                      </li>
                      <li>
                        Flat Rate: $10.00
                        <input type="radio" aria-label="Radio button for following text input">
                      </li>
                      <li class="active">
                        Local Delivery: $2.00
                        <input type="radio" aria-label="Radio button for following text input">
                      </li>
                    </ul>
                    <h6>
                      Calculate Shipping
                      <i class="fa fa-caret-down" aria-hidden="true"></i>
                    </h6>
                    <select class="shipping_select">
                      <option value="1">Bangladesh</option>
                      <option value="2">India</option>
                      <option value="4">Pakistan</option>
                    </select>
                    <select class="shipping_select section_bg">
                      <option value="1">Select a State</option>
                      <option value="2">Select a State</option>
                      <option value="4">Select a State</option>
                    </select>
                    <input class="post_code" type="text" placeholder="Postcode/Zipcode" />
                    <a class="btn_1" href="#">Update Details</a>
                  </div>
                </td> -->
              <!-- </tr> -->
            </tbody>
          </table>
          <div class="checkout_btn_inner float-right">
            <a class="btn_1" href="product_list.php">Continue Shopping</a>
            <a class="btn_1 checkout_btn_1" href="checkout.php">Proceed to checkout</a>
          </div>
        </div>
      </div>
  </section>
  <!--================End Cart Area =================-->
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
                <a href="about.html">About</a>
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
  <script src="js/jquery.form.js"></script>
  <script src="js/jquery.validate.min.js"></script>
  <script src="js/mail-script.js"></script>
  <!-- custom js -->
  <script src="js/custom.js"></script>
</body>

</html>