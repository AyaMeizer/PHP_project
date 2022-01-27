<?php
$pdo=require("connection.php");
$sql="SELECT * FROM categories";
$categories =  $conn->prepare($sql);
$categories ->execute();
if(!$categories->fetchAll(PDO::FETCH_ASSOC)){
    echo "hi";
    $data ="INSERT INTO categories (cat_name, cat_desc) 
    VALUES ('bedroom pillows', 'Medical pillows for sleeping')";
    $conn->exec($data);

    $data ="INSERT INTO categories (cat_name, cat_desc) 
    VALUES ('decorative pillows', 'pillows for decoration and furniture')";
    $conn->exec($data);

    $data ="INSERT INTO categories (cat_name, cat_desc) 
    VALUES ('travel / car pillows', 'pillows for cars or travelling issues')";
    $conn->exec($data);
}

$sql="SELECT * FROM products";
$products =  $conn->prepare($sql);
$products ->execute();
if(!$products->fetchAll(PDO::FETCH_ASSOC)){
    echo "hi";
    $data2 ="INSERT INTO products (product_name,product_price,product_desc,on_sales,sales_percentage,stock,product_img,cat_id) 
    VALUES ('Embroidered Pillow',5 ,'Hand-made silk embroidered pillow',1,20,10,'https://cdn-ssl.s7.disneystore.com/is/image/DisneyShopping/6504047395760',2)";
    $conn->exec($data2);

    $data2 ="INSERT INTO products (product_name,product_price,product_desc,on_sales,sales_percentage,stock,product_img,cat_id) 
    VALUES ('Printed face Pillow',5,'Quotation printed on the face of pillow',0,0,15,'https://target.scene7.com/is/image/Target/GUEST_bb7f538d-3f4f-4a35-b00c-245e77be0c61',2)";
    $conn->exec($data2);

    $data2 ="INSERT INTO products (product_name,product_price,product_desc,on_sales,sales_percentage,stock,product_img,cat_id) 
    VALUES ('Colorful Pillow',7,'wool special design on pillow',0,0,20,'https://pyxis.nymag.com/v1/imgs/818/04d/1dc05203d12a5b8dab2cb6e440ced47db4.rsquare.w600.jpg',2)";
    $conn->exec($data2);

}
