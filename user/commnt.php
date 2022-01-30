<?php
// session_start();
require('../database/create_db.php');

// echo ($_SESSION['loggedUser'][1]);
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
<style>
    .comment {
        width: 50%;
        margin: 0 auto;
    }
</style>

<body>
    <div class="comment">
        <div class="comment-form">
            <h4>Leave a Comment</h4>
            <form class="form-contact comment_form" id="commentForm" method="POST">
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <textarea class="form-control w-100" name="message" id="comment" cols="30" rows="9" placeholder="Write Comment"></textarea>
                        </div>
                    </div>


                </div>
                <div class="form-group mt-3">
                    <input type="submit" name="submit" value="Send Comment" class="btn_3 button-contactForm" />

                </div>
            </form>
            <?php
            // if ($_SESSION['product'] == []) {
            if (isset($_POST['submit'])) {
                $message = $_POST['message'];
                $idproduct = $_GET['id'];
                $iduser = $_SESSION['loggedUser'][1];
                $data = "INSERT INTO `comments` ( `comment_desc`, `user_id`, `product_id`) VALUES ('$message',$iduser,$idproduct)";
                $conn->exec($data);
            }
            //  else {
            // echo '<script type="text/javascript">alert("is not loggin")</script>';
            // }
            // }


            ?>
        </div>



        <div>
            <!-- <h4>05 Comments</h4> -->

            <div>
                <div>
                    <div>

                        <div>
                            <p class=>
                                <?php

                                $id = $_GET['id'];

                                $data = $conn->prepare("SELECT comments.comment_desc,comments.user_id,
                                comments.product_id,products.id,users.username,users.id
                                from comments  Join products on products.id = comments.product_id join users on users.id=comments.user_id
                                WHERE comments.product_id=$id");


                                $data->execute();
                                $result = $data->fetch(PDO::FETCH_ASSOC);



                                foreach ($data as $element) {


                                ?>
                            <div class="review_item">
                                <div class="media">
                                    <div class='media-body'>
                                        <h4><?php echo $element['username'] ?></h4>
                                    </div>
                                </div>
                                <p><?php echo $element['comment_desc']; ?></p>


                            </div>
                        <?php   } ?>


                        </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>


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