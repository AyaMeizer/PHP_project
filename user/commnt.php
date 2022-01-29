<?php
session_start();
include "../database/connection.php";
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
    <div class="comments-area">
        <!-- <h4>05 Comments</h4> -->
       
        <div class="comment-list">
            <div class="single-comment justify-content-between d-flex">
                <div class="user justify-content-between d-flex">
                    
                    <div class="desc">
                        <p class="comment">
                            <?php
                             $data=$conn->prepare("SELECT comments.comment_desc,comments.user_id,
                             comments.product_id,products.id
                             from comments Inner Join products on products.id = comments.user_id 
                             WHERE comments.product_id=1");
                         // $_GET[id]
                             $data->execute();
                             $result = $data->fetch(PDO::FETCH_ASSOC);
                                     foreach($data as $element){?>
                                         <div class="review_item">
                                           <div class="media"> 
                                          <div class='media-body'>
                                           <h4><?php echo $element['user_id'] ;?></h4>
                                        </div>
                                       </div>
                                             <p><?php echo $element['comment_desc'] ;?></p>
                                             <?php   } ?>
                         
                                             <?php
                                               if($_SERVER["REQUEST_METHOD"]=="POST"){
                                               if(isset($_SESSION['loggedUser'] )){
                                               $message=$_POST['message'];
                                               $idproduct=$_GET['id'];
                                               $iduser=$_SESSION['loggedUser']['id'];
                                               $data="INSERT INTO comments(user_id,comments,product_id) 
                                                VALUE ('$iduser','$message' ,'$idproduct')";
                                                $stmt = $pdo->prepare($data);
                                                $stmt->execute();
                                                }
                                                else{
                                                   echo '<script type="text/javascript">alert("is not loggin")</script>';
                                                }
                                                }
                            ?>
                        </p>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="comment-form">
        <h4>Leave a Comment</h4>
        <form class="form-contact comment_form" action="#" id="commentForm" method="GET" >
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <textarea class="form-control w-100" name="message" id="comment" cols="30" rows="9" placeholder="Write Comment"></textarea>
                    </div>
                </div>
                
            
            </div>
            <div class="form-group mt-3">
                <a href="single-product.php?id=$getId" class="btn_3 button-contactForm">Send Comment</a>
            </div>
        </form>
    </div>
    < <!--::footer_part end::-->

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