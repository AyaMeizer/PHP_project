<?php
$pdo=require("connection.php");
$sql="SELECT * FROM categories";
$products =  $conn->prepare($sql);
$products ->execute(); ////////edit condition
// if(!$products->fetchAll(PDO::FETCH_ASSOC)){
    $data ="INSERT INTO categories  (cat_name, cat_desc) 
    VALUES ('aya', 'ekfnm')";//   "INSERT INTO products (product_name ,product_price,product_desc,on_sales,stock,cat_id) VALUES(girl,10,sodjkm,0,1) ";
    $conn->exec($data); ////////edit condition
// }

