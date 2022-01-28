<?php
session_start();
echo "<pre >";
    var_dump($_SESSION['product']);
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
