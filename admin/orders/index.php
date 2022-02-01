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
            <div class="logo">
                <a href="../index.php">
                    <img src="../images/icon/logo.png" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Admin Dashboards</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="../users/index.php">Users Dashboard</a>
                                </li>
                                <li>
                                    <a href="../products/index.php">Products Dashboard</a>
                                </li>
                                <li>
                                    <a href="../category/index.php">Categories Dashboard</a>
                                </li>
                                <li>
                                    <a href="../orders/index.php">Orders Dashboard</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Create Dashboards</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="../users/create.php">Create Users </a>
                                </li>
                                <li>
                                    <a href="../products/create.php">Create Products</a>
                                </li>
                                <li>
                                    <a href="../category/create.php">Create Categories </a>
                                </li>
                            </ul>
                        </li>


                    </ul>
                    </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="order_details_iner">
                                    <h3>Order Details</h3>
                                    <table class="table table-borderless">
                                        <thead>
                                            <tr>
                                                <th scope="col" colspan="2">ID</th>
                                                <th scope="col" colspan="2">Product</th>
                                                <th scope="col">Quantity</th>
                                                <th scope="col">Total</th>
                                                <th scope="col">user</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <?php
                                                $sql = $conn->prepare("SELECT * FROM checkout_products INNER JOIN products ON checkout_products.product_id = products.id");
                                                $sql->execute();
                                                // $data= $sql->fetchAll(PDO::FETCH_ASSOC);
                                                $sql3 = $conn->prepare("SELECT * FROM checkout INNER JOIN users ON checkout.user_id = users.id");
                                                $sql3->execute();
                                                $data3 = $sql3->fetchAll(PDO::FETCH_ASSOC);

                                                $sql4 = $conn->prepare("SELECT * FROM checkout
                                                --  INNER JOIN checkout_products ON checkout.id = checkout_products.checkout_id
                                                 ");
                                                $sql4->execute();
                                                $data4 = $sql4->fetchAll(PDO::FETCH_ASSOC);
                                                ?>
                                                <?php
                                                $tot2 = 0;
                                                $i=0;
                                                $sqll = $conn->prepare("SELECT checkout_id FROM checkout_products INNER JOIN products ON checkout_products.product_id = products.id");
                                                $sqll->execute();
                                                $data1= $sqll->fetchAll(PDO::FETCH_ASSOC);
                                                // echo"<pre>";
                                                // print_r($data1);
                                                // echo $data1[0];
                                                foreach ($sql as $item) {
                                                    // if($data1[$i]['id']==$data1[$i+=1]['id']){
                                                    //     echo "rojgkrmgt";
                                                    //     $i+=1;
                                                    // }
                                                    $tot = ($item['quantity'] * $item['product_price'] - $item['sales_percentage'] * $item['product_price'] / 100)
                                                ?>
                                                    <td colspan="2"><span><?php echo $item['checkout_id']?></span></td>
                                                    <td colspan="2"><span><?php echo $item['product_name']?></span></td>
                                                    <td>x<?php echo $item['quantity']; ?></td>
                                                    <td> <span><?php echo '$ ' . $tot; ?></span></td>
                                                    <td> <span><?php
                                                                echo $data3[$i]['username'];
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
                                            <th scope="col" colspan="3"></th>
                                            <th scope="col" colspan="3">Total</th>
                                            <th scope="col" colspan="3"></th>
                                            <th scope="col" colspan="3"></th>
                                            <th><?php
                                                // $sql2 = $conn->prepare("SELECT * FROM checkout WHERE id = $item[checkout_id]");
                                                // $sql2->execute();
                                                // $data = $sql2->fetch(PDO::FETCH_ASSOC);
                                                echo $tot2; ?></th>
                                            <!-- <th scope="col">Total</th> -->
                                        </tr>
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