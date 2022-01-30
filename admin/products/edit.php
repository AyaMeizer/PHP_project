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
                                    <a href="index.php">Products Dashboard</a>
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
                                    <a href="create.php">Create Users </a>
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
            <?php


            if ($_SERVER["REQUEST_METHOD"] == "GET") {
                $value = $_GET["id"];
                $sql = $conn->prepare("SELECT * FROM products WHERE id='$value'");
                $sql->execute();

                $data = $sql->fetch(PDO::FETCH_ASSOC);
            }

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $value = $_GET["id"];
                $product_name = $_POST['product_name'];
                $product_price = $_POST['product_price'];
                $product_desc = $_POST['product_desc'];
                $on_sales = $_POST['on_sales'];
                $sales_percentage = $_POST['sales_percentage'];
                $stock = $_POST['stock'];
                $product_img = $_POST['product_img'];
                $cat_id = $_POST['cat_id'];
                $sql = $conn->prepare("UPDATE products SET product_name='$product_name',product_price='$product_price',product_desc='$product_desc',on_sales='$on_sales',sales_percentage='$sales_percentage',stock='$stock',product_img='$product_img',product_desc='$product_desc',on_sales='$on_sales',sales_percentage='$sales_percentage',stock='$stock',cat_id='$cat_id' WHERE id='$value'");
                $sql->execute();

                header('location:index.php');
            }
            ?>
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="card">
                            <div class="card-header">
                                <strong>Products</strong> Form
                            </div>
                            <div class="card-body card-block">
                                <form method="post" class="" action="<?php $_SERVER["PHP_SELF"]; ?>">
                                    <div class="form-group">
                                        <label for="nf-email" class=" form-control-label">Product Name</label>
                                        <input type="text" id="nf-email" name="product_name" value="<?php echo $data["product_name"]; ?>" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="nf-email" class=" form-control-label">Price</label>
                                        <input type="text" id="nf-email" name="product_price" value="<?php echo $data["product_price"]; ?>" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="nf-password" class=" form-control-label">Description</label>
                                        <input type="text" id="nf-password" name="product_desc" value="<?php echo $data["product_desc"]; ?>" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="nf-password" class=" form-control-label">One Sale</label>
                                        <select name="on_sales" class="form-control " required>
                                            <?php
                                            echo
                                            "<option value=0> No</option> </br>
                                            <option  value=1> Yes</option> </br>";
                                            ?>
                                        </select>                                    </div>
                                    <div class="form-group">
                                        <label for="nf-password" class=" form-control-label">Sale Percentage</label>
                                        <input type="number" id="nf-password" name="sales_percentage" value="<?php echo $data["sales_percentage"]; ?>" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="nf-password" class=" form-control-label">Stock</label>
                                        <input type="number" id="nf-password" name="stock" value="<?php echo $data["stock"]; ?>" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="nf-password" class=" form-control-label">Image</label>
                                        <input type="text" id="nf-password" name="product_img" value="<?php echo $data["product_img"]; ?>" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="nf-password" class=" form-control-label">categories</label>
                                        <select class="form-control " name="cat_id" required>
                                            <!-- <option selected>categories</option> -->
                                            <?php
                                            $data = $conn->prepare("SELECT * FROM categories");
                                            $data->execute();
                                            foreach ($data as $e) {
                                                echo "<option  value='$e[id]'> $e[cat_name]</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="card-footer">

                                        <input type="submit" class="btn btn-info" value="Save" name="edit_submit">
                                    </div>
                                </form>




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

                    </div>
                </div>
            </div>
        </div>
</body>

</html>