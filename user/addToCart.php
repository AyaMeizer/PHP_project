



<?php
session_start();
ob_start();
// session_unset();
// session_destroy();

require('../database/create_db.php');


if (isset($_GET['id'])) {
    $sql = "SELECT * FROM products WHERE id='{$_GET['id']}' ";
    $data = $conn->query($sql);
    $result = $data->fetch(PDO::FETCH_ASSOC);


if(!$_SESSION['product']){
     $counter=0;
        $_SESSION['product'][$_GET['id']] = $result ;
        $_SESSION['product'][$_GET['id']][] = $counter ;


}
   



    $getId = $_GET['id'];
    // echo "<pre >";
    // var_dump($_SESSION['product']);

    // echo($_SESSION['product'][$_GET['id']]['id']);
    for ($i = 0; $i <= count($_SESSION['product']); $i++) {
        // echo $_SESSION['product'][$_GET['id']]['id'];
        // echo $_GET['id'];
        if ($_SESSION['product'][$_GET['id']]['id'] === $_GET['id']) {
            $counter = $_SESSION['product'][$_GET['id']][0] + 1;
            $_SESSION['product'][$_GET['id']] = $result;
            $_SESSION['product'][$_GET['id']][0] = $counter;
            unset($_SESSION['dicount']);
            // if()
            header("Location:product_list.php");

            break;
        } else if (count($_SESSION['product']) - 1 == $i) {
            $counter = 0;
            $_SESSION['product'][$_GET['id']] = $result;
            $_SESSION['product'][$_GET['id']][0] = $counter;
            unset($_SESSION['dicount']);

            header("Location:product_list.php");
        }else{
            // $_SESSION['product']=[]; 
        }
    }

    // echo $counter;





}
