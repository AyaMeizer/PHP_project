<?php
// require("../database/connection.php");
// require('../database/create_db.php');

ob_start();

if(isset($_GET['logOut']))
{
        unset($_SESSION['loggedUser']);
        session_destroy();
        // header('location:product_list.php');
         
}
?>

<form method="GET">
         <input type="submit" class="btn_3 button-contactForm" name="logOut" value="LogOut">
</form>