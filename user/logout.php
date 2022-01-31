<?php
// require("../database/connection.php");
// require('../database/create_db.php');
session_start();
ob_start();

if(isset($_GET['logOut']))
{
        unset($_SESSION['loggedUser']);
        session_destroy();
        header('location:product_list.php');
}
?>



