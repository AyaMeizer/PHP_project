<?php
if (!isset($_SESSION)) {
  session_start();
}
require('../database/create_db.php');
$itemCart = $_SESSION['product'];

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
<style>
  .cart_area h2 {
    text-align: center;
    font-family: "Poppins", sans-serif
  }
</style>

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
            <h2>cart list</h2>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- breadcrumb part end-->

  <!--================Cart Area =================-->




  <section class="cart_area section_padding">
    <?php
    if (!$itemCart) {
      echo "<h2>Your Cart Is Empty</h2>";
    } else {





    ?>

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
                $total = 0;
                foreach ($itemCart as $i) {

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
                          if ($i['on_sales'] == 0) {
                            $pri = $i['product_price'];
                            echo $pri;
                          } else if ($i['on_sales'] == 1) {
                            $pri = (1 - ($i['sales_percentage']) / 100) * $i['product_price'];
                            echo $pri;
                          } ?>$</h5>
                    </td>
                    <td>
                      <div class="product_count">
                        <form method="POST">
                          <span class="input-number"><a href="./decrement.php?id=<?php echo $i['id'] ?>"> <i class="ti-minus"></i></a></span>
                          <input style="width: 70px;" neme="total" class="input-number" type="text" value="<?php echo $i['0']; ?>" min="0" max="10">
                          <span class="input-number"><a href="./increment.php?id=<?php echo $i['id'] ?>"> <i class="ti-plus"></i></a></span>
                        </form>
                      </div>
                    </td>
                    <td>
                      <h5>
                        <?php
                        echo $pri *  $i['0'];
                        // echo "gfg";

                        $total = $total + $pri *  $i['0'];
                        ?> $
                      </h5>
                    </td>
                    <td>
                      <a href="./delet.php?id=<?php echo $i['id'] ?>">
                        <button style="height: 40px; width: 100px;background-color: #9e474794;color: white;border: none;border-radius: 7px;font-size: 1.05rem;cursor: pointer;">Delete</button>
                      </a>
                    </td>






                  </tr>
                <?php } ?>
                <tr>
                  <td></td>
                  <td></td>
                  <td>
                    <h5>Subtotal</h5>
                  </td>
                  <td>
                    <h5><?php echo $total; ?> $ </h5>
                  </td>
                </tr>

              </tbody>
            </table>
            <div class="checkout_btn_inner float-right">
              <a class="btn_1" href="product_list.php">Continue Shopping</a>
              <a class="btn_1 checkout_btn_1" href="checkout.php">Proceed to checkout</a>
            </div>
          </div>
        </div>
      <?php } ?>
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
  <script src="js/jquery.form.js"></script>
  <script src="js/jquery.validate.min.js"></script>
  <script src="js/mail-script.js"></script>
  <!-- custom js -->
  <script src="js/custom.js"></script>
</body>

</html>