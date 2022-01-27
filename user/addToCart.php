<?php
session_start();
include "../database/connection.php";

if (isset($_GET['id'])) {
    $sql = "SELECT * FROM products WHERE id='{$_GET['id']}' ";

    $data = $conn->query($sql);
    $result = $data->fetch(PDO::FETCH_ASSOC);


    $_SESSION['product'][] = $result;
    var_dump($_SESSION['product']);
    


}
