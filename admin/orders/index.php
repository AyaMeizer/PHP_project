<?php
ob_start();
require('../../database/create_db.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Tables</title>

    <!-- Fontfaces CSS-->
    <link href="../css/font-face.css" rel="stylesheet" media="all">
    <link href="../vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="../vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="../vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="../vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="../vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="../vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="../vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="../vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="../vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="../vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="../vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="../css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="../index.html">
                            <img src="../images/icon/logo.png" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Admin Dashboards</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="index.php">Users Dashboard</a>
                                </li>
                                <li>
                                    <a href="index.html">Products Dashboard</a>
                                </li>
                                <li>
                                    <a href="index.html">Categories Dashboard</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="chart.html">
                                <i class="fas fa-chart-bar"></i>Charts</a>
                        </li>
                        <li>
                            <a href="table.html">
                                <i class="fas fa-table"></i>Tables</a>
                        </li>
                        <li>
                            <a href="form.html">
                                <i class="far fa-check-square"></i>Forms</a>
                        </li>
                        <li>
                            <a href="calendar.html">
                                <i class="fas fa-calendar-alt"></i>Calendar</a>
                        </li>
                        <li>
                            <a href="map.html">
                                <i class="fas fa-map-marker-alt"></i>Maps</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Pages</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="login.html">Login</a>
                                </li>
                                <li>
                                    <a href="register.html">Register</a>
                                </li>
                                <li>
                                    <a href="forget-pass.html">Forget Password</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-desktop"></i>UI Elements</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="button.html">Button</a>
                                </li>
                                <li>
                                    <a href="badge.html">Badges</a>
                                </li>
                                <li>
                                    <a href="tab.html">Tabs</a>
                                </li>
                                <li>
                                    <a href="card.html">Cards</a>
                                </li>
                                <li>
                                    <a href="alert.html">Alerts</a>
                                </li>
                                <li>
                                    <a href="progress-bar.html">Progress Bars</a>
                                </li>
                                <li>
                                    <a href="modal.html">Modals</a>
                                </li>
                                <li>
                                    <a href="switch.html">Switchs</a>
                                </li>
                                <li>
                                    <a href="grid.html">Grids</a>
                                </li>
                                <li>
                                    <a href="fontawesome.html">Fontawesome Icon</a>
                                </li>
                                <li>
                                    <a href="typo.html">Typography</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <a href="../index.php" style='margin:15px 50px 0;'>
                <img src="../../user/img/logo.png" alt="logo" style="width:170px;">
            </a>
            <div class="">
                <nav class="navbar-sidebar">
                    <!-- <ul class=""> -->
                    <a style="color: black; margin:5px 0; margin:5px 0; font-weight:bold;" href="#">
                        <i class="fas fa-tachometer-alt"></i>Admin Dashboards
                    </a>
                    <ul class="list-unstyled navbar__unstyled js-unstyled" style="list-style: none;">
                        <a href="../users/index.php">
                            <li style="color: black; margin:5px 0;">
                                Users Dashboard
                            </li>
                        </a>
                        <a href="../products/index.php">
                            <li style="color: black; margin:5px 0;">
                                Products Dashboard
                            </li>
                        </a>
                        <a href="../category/index.php">
                            <li style="color: black; margin:5px 0;">
                                Categories Dashboard
                            </li>
                        </a>
                        <a href="index.php">
                            <li style="color: black; margin:5px 0;">
                                Orders Dashboard
                            </li>
                        </a>
                    </ul>
                    <a class="js-arrow" style="color: black; margin:50px 0 5px 0; font-weight: bold;" href="#">
                        <i class="fas fa-tachometer-alt"></i>Create Dashboards</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <a href="../users/create.php">
                            <li style="color: black; margin:5px 0;">
                                Create Users

                            </li>
                        </a>
                        <a href="../products/create.php">
                            <li style="color: black; margin:5px 0;">
                                Create Products
                            </li>
                        </a>
                        <a href="../category/create.php">
                            <li style="color: black; margin:5px 0;">
                                Create Categories
                            </li>
                        </a>
                    </ul>
                    </li>


                    </ul>
                    </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR -->









        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <?php



            $aya = $conn->prepare("SELECT * From checkout");
            $aya->execute();
            $resultA = $aya->fetchAll(PDO::FETCH_ASSOC);

            ?>
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="order_details_iner">
                                    <h3>Order Details</h3>
                                    <table class="table table-borderless">

                                        <?php

                                        if ($resultA == []) {
                                            echo "<h1>No Orders Yet </h1>";
                                        } else {



                                        ?>
                                            <thead>
                                                <tr>
                                                <th scope="col" colspan="2">Subtotal Price</th>
                                                <th scope="col" colspan="2">Coupon Discount</th>
                                                <th scope="col" colspan="2">Total Price</th>
                                                    <th scope="col">Address</th>
                                                    <th scope="col">Date</th>
                                                    <th scope="col">User Name</th>
                                                    <th scope="col">Details</th>
                                                    <!-- <th scope="col" colspan="5">Total</th> -->
                                                </tr>
                                            </thead>
                                        <?php } ?>

                                        <tbody>
                                            <tr>
                                                <?php

                                             

                                                foreach ($resultA as $item) {
                                                    // if ($item['checkout_id'] !== $resultR[$loop]['checkout_id']) {

                                                ?>
                                                    <td colspan="2"><span><?php echo $item['total_price']." $"?></span></td>
                                                    <td colspan="2"><span><?php echo $item['coupon_discount']." $"?></span></td>
                                                    <td colspan="2"><span><?php
                                                    $subtotal= $item['total_price']-$item['coupon_discount'];
                                                    echo ($subtotal)." $"?></span></td>
                                                    <td>x<?php echo $item['address']; ?></td>
                                                    <td><?php echo $item['date']; ?></td>
                                                    <td> <span><?php 
                                                    $ryahnah = $conn->prepare("SELECT * FROM users Where id=$item[user_id]");
                                                    $ryahnah->execute();
                                                    $resultR = $ryahnah->fetch(PDO::FETCH_ASSOC);
                                                    echo $resultR['username']; ?></span></td>
                                                    <td>
                                                        <a href="details.php?id=<?php echo $item['id']?>"> view
                                                        </a>
                                                    </td>
                                            </tr>
                                        </tbody>

                                    <?php
                                                };
                                    ?>
                                    </table>

                                </div>
                            </div>
                        </div>








                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>

    <!-- Jquery JS-->
    <script src="../vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="../vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="../vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="../vendor/slick/slick.min.js">
    </script>
    <script src="../vendor/wow/wow.min.js"></script>
    <script src="../vendor/animsition/animsition.min.js"></script>
    <script src="../vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="../vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="../vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="../vendor/circle-progress/circle-progress.min.js"></script>
    <script src="../vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="../vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="../vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="../js/main.js"></script>

</body>

</html>
<!-- end document-->