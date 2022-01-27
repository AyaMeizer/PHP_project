<?php
session_start();
// session_unset();
// session_destroy();
include "../database/connection.php";
// include './addToCart.php';

if (isset($_GET['id'])) {
    // $sql = "SELECT * FROM products WHERE id= $_GET[id] ";
    // $data = $conn->query($sql);
    // $result = $data->fetch(PDO::FETCH_ASSOC);
   
    // $counter;
        // $_SESSION['product'][$_GET['id']] = $result ;
        // $_SESSION['product'][$_GET['id']][] = $counter ;
  
    $getId=$_GET['id'];
    echo "<pre >";
    var_dump($_SESSION['product']);
  echo count($_SESSION['product']);
    // echo($_SESSION['product'][$_GET['id']]['id']);
    // for ($i=0; $i < count($_SESSION['product']);$i++ ){
        // echo "/iiii";
        // echo $_SESSION['product'][$_GET['id']]['id'];
        // echo "/";
        // echo $_GET['id'];
        // if(isset($_SESSION['product'][$_GET['id']]) && $_SESSION['product'][$_GET['id']] == $_GET['id']){
            // echo $_SESSION['product'][$i]['id'];
            // echo $_GET['id'];
            // array_splice($_SESSION['cart'], $index,1);
            
            array_splice($_SESSION['product'], $_GET['id'] , 1);
        // }else{
            // echo "errrr";
        // }
            // echo "hgjk";

            // if()
            // header("Location:http://localhost/project7/PHP_project/user/cart.php");

            // break;
        // }
        // else if(count($_SESSION['product'])-1 ==$i){
        // $counter=1;
        // $_SESSION['product'][$_GET['id']] = $result ;
        // $_SESSION['product'][$_GET['id']][] = $counter ;
        // header('Location:http://localhost/project7/PHP_project/user/cart.php');


        

    }
    
    // echo $counter;
    

    
    


