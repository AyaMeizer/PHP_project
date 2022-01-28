<?php
session_start();




if (isset($_GET['id'])) {
    foreach ($_SESSION['product'] as $index => $value) {
        // echo $index;
        if ($index == $_GET['id']) {
            echo "ahmad";
            unset($_SESSION['product'][$index]);
        }
    }
    header('location:cart.php');
}
