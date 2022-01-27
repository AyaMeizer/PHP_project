<?php
$pdo=require("connection.php");
$sql="SELECT * FROM categories";
$categories =  $conn->prepare($sql);
$categories ->execute();
if(!$categories->fetchAll(PDO::FETCH_ASSOC)){
    echo "hi";
    $data ="INSERT INTO categories (cat_name, cat_desc) 
    VALUES ('sleeping pillows', 'Medical cushions for sleeping')";
    $conn->exec($data);

    $data ="INSERT INTO categories (cat_name, cat_desc) 
    VALUES ('decorative cushions', 'cushions for decoration and furniture')";
    $conn->exec($data);

    $data ="INSERT INTO categories (cat_name, cat_desc) 
    VALUES ('travel / car pillows', 'cushions for cars or travelling issues')";
    $conn->exec($data);
}

$sql="SELECT * FROM products";
$products =  $conn->prepare($sql);
$products ->execute();
if(!$products->fetchAll(PDO::FETCH_ASSOC)){
    echo "hi";
    $data2 ="INSERT INTO products (product_name,product_price,product_desc,on_sales,sales_percentage,stock,product_img,cat_id) 
    VALUES ('Embroidered cushion',5 ,'Hand-made silk embroidered cushion',1,20,10,'https://cdn-ssl.s7.disneystore.com/is/image/DisneyShopping/6504047395760',2)";
    $conn->exec($data2);

    $data2 ="INSERT INTO products (product_name,product_price,product_desc,on_sales,sales_percentage,stock,product_img,cat_id) 
    VALUES ('Printed face cushion',5,'Quotation printed on the face of cushion',0,0,15,'https://target.scene7.com/is/image/Target/GUEST_bb7f538d-3f4f-4a35-b00c-245e77be0c61',2)";
    $conn->exec($data2);

    $data2 ="INSERT INTO products (product_name,product_price,product_desc,on_sales,sales_percentage,stock,product_img,cat_id) 
    VALUES ('Colorful cushion',7,'wool special design on cushion',0,0,20,'https://pyxis.nymag.com/v1/imgs/818/04d/1dc05203d12a5b8dab2cb6e440ced47db4.rsquare.w600.jpg',2)";
    $conn->exec($data2);

    $data2 ="INSERT INTO products (product_name,product_price,product_desc,on_sales,sales_percentage,stock,product_img,cat_id) 
    VALUES ('Colorful hand-made cushion',8,'wool special design on cushion',1,10,25,'https://target.scene7.com/is/image/Target/GUEST_b71fd21f-7e43-43ad-bff2-d13bcfde064d',2)";
    $conn->exec($data2);

    $data2 ="INSERT INTO products (product_name,product_price,product_desc,on_sales,sales_percentage,stock,product_img,cat_id) 
    VALUES ('relax forever pillow',10,'medical and pillow',1,20,35,'https://www.adairs.com.au/globalassets/catalogue/adairs-kids/pillows/43760_nlow/43760_nlow_zoom_1.jpg',1)";
    $conn->exec($data2);

    $data2 ="INSERT INTO products (product_name,product_price,product_desc,on_sales,sales_percentage,stock,product_img,cat_id) 
    VALUES ('sleep well pillow',10,'Sleeping Pillows 2 Pack Hypoallergenic Anti-Dust Pillow Down Alternative Quality Bed Pillows for Back Stomach and Side Sleepers Standard Size Washable',1,20,30,'https://m.media-amazon.com/images/I/719rYHfWHHS._AC_SX425_.jpg',1)";
    $conn->exec($data2);

    $data2 ="INSERT INTO products (product_name,product_price,product_desc,on_sales,sales_percentage,stock,product_img,cat_id) 
    VALUES ('happy night pillow',10,'best gel foam pillow| Enjoy free shipping',1,20,40,'https://m.media-amazon.com/images/I/51yJ7BnUhxL.jpg',1)";
    $conn->exec($data2);

}
