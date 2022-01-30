<?php
session_start();
// session_unset();
// session_destroy();

require('../database/create_db.php');


if (isset($_GET['id'])) {
    $sql = "SELECT * FROM products WHERE id='{$_GET['id']}' ";
    $data = $conn->query($sql);
    $result = $data->fetch(PDO::FETCH_ASSOC);
   
    $counter;
        // $_SESSION['product'][$_GET['id']] = $result ;
        // $_SESSION['product'][$_GET['id']][] = $counter ;
  
    $getId=$_GET['id'];
    // echo "<pre >";
    // var_dump($_SESSION['product']);
  
    for ($i=0; $i< count($_SESSION['product']);$i++ ){
 
        if($_SESSION['product'][$_GET['id']]['id']===$_GET['id'] && $_SESSION['product'][$_GET['id']][0]>1){
            $counter=$_SESSION['product'][$_GET['id']][0]-1;
            $_SESSION['product'][$_GET['id']] = $result ;
            $_SESSION['product'][$_GET['id']][0] = $counter ;
            // if()
            header("Location:cart.php");
            break;
        }
        else {
            unset($_SESSION['product'][$_GET['id']]);
            header("Location:cart.php");
        }
   

    }
    
    

    
    

}
