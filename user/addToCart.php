<?php
include "../database/connection.php";


if (isset($_GET['id'])) {

    $sql = "SELECT * FROM products WHERE id='{$_GET['id']}' ";




$sql = "INSERT INTO  checkout (username, email, password,Date_Created) VALUES ('$username', '$email', '$password','$createDate')";
}



?>