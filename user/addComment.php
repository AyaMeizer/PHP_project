
<?php
require('../database/create_db.php');
if (!isset($_SESSION)) {
    session_start();
}

?>


<?php

if (@$_SESSION['loggedUser'] == []) {
    echo "<script>
    alert('Please Login')
    window.location.href='./login.php'

    </script>";
} else {


    include "../database/connection.php";
    if (@isset($_POST['submitq']) && @isset($_POST['message'])) {
        //    echo $_POST['commmenttt'];

        @$message = $_POST['message'];
        @$idproduct = $_POST['commmenttt'];
        @$iduser = $_SESSION['loggedUser'][1];
        @$data = "INSERT INTO `comments` ( `comment_desc`, `user_id`, `product_id`) VALUES ('$message',$iduser,$idproduct)";
        @$conn->exec($data);
        header("location:single-product.php?id=$idproduct");
    }
}
?>