<?php
$pdo = require("connection.php");
$sql = "SELECT * FROM categories";
$categories =  $conn->prepare($sql);
$categories->execute();
if (!$categories->fetchAll(PDO::FETCH_ASSOC)) {
    echo "hi";
    $data = "INSERT INTO categories (cat_name, cat_desc) 
    VALUES ('sleeping pillows', 'Medical pillow for sleeping')";
    $conn->exec($data);

    $data = "INSERT INTO categories (cat_name, cat_desc) 
    VALUES ('decorative cushions', 'cushions for decoration and furniture')";
    $conn->exec($data);

    $data = "INSERT INTO categories (cat_name, cat_desc) 
    VALUES ('travel / car pillows', 'pillow for cars or travelling issues')";
    $conn->exec($data);

    $data = "INSERT INTO categories (cat_name, cat_desc) 
    VALUES ('medical pillow', 'pillow for medical issues')";
    $conn->exec($data);
}

$sql = "SELECT * FROM products";
$products =  $conn->prepare($sql);
$products->execute();
if (!$products->fetchAll(PDO::FETCH_ASSOC)) {
    echo "hi";
    $data2 = "INSERT INTO products (product_name,product_price,product_desc,on_sales,sales_percentage,stock,product_img,cat_id) 
    VALUES ('Embroidered cushion',5 ,'Hand-made silk embroidered cushion',1,20,10,'https://cdn-ssl.s7.disneystore.com/is/image/DisneyShopping/6504047395760',2)";
    $conn->exec($data2);

    $data2 = "INSERT INTO products (product_name,product_price,product_desc,on_sales,sales_percentage,stock,product_img,cat_id) 
    VALUES ('Printed face cushion',5,'Quotation printed on the face of cushion',0,0,15,'https://target.scene7.com/is/image/Target/GUEST_bb7f538d-3f4f-4a35-b00c-245e77be0c61',2)";
    $conn->exec($data2);

    $data2 = "INSERT INTO products (product_name,product_price,product_desc,on_sales,sales_percentage,stock,product_img,cat_id) 
    VALUES ('Colorful cushion',7,'wool special design on cushion',0,0,20,'https://pyxis.nymag.com/v1/imgs/818/04d/1dc05203d12a5b8dab2cb6e440ced47db4.rsquare.w600.jpg',2)";
    $conn->exec($data2);

    $data2 = "INSERT INTO products (product_name,product_price,product_desc,on_sales,sales_percentage,stock,product_img,cat_id) 
    VALUES ('Colorful hand-made cushion',8,'wool special design on cushion',1,10,25,'https://target.scene7.com/is/image/Target/GUEST_b71fd21f-7e43-43ad-bff2-d13bcfde064d',2)";
    $conn->exec($data2);

    $data2 = "INSERT INTO products (product_name,product_price,product_desc,on_sales,sales_percentage,stock,product_img,cat_id) 
    VALUES ('relax forever pillow',10,'medical sleeping pillow',1,20,35,'https://www.adairs.com.au/globalassets/catalogue/adairs-kids/pillows/43760_nlow/43760_nlow_zoom_1.jpg',1)";
    $conn->exec($data2);

    $data2 = "INSERT INTO products (product_name,product_price,product_desc,on_sales,sales_percentage,stock,product_img,cat_id) 
    VALUES ('sleep well pillow',10,'Sleeping Pillows 2 Pack Hypoallergenic Anti-Dust Pillow Down Alternative Quality Bed Pillows',1,20,30,'https://m.media-amazon.com/images/I/719rYHfWHHS._AC_SX425_.jpg',1)";
    $conn->exec($data2);

    $data2 = "INSERT INTO products (product_name,product_price,product_desc,on_sales,sales_percentage,stock,product_img,cat_id) 
    VALUES ('happy night pillow',10,'best gel foam pillow| Enjoy free shipping',1,20,40,'https://m.media-amazon.com/images/I/51yJ7BnUhxL.jpg',1)";
    $conn->exec($data2);

    $data2 = "INSERT INTO products (product_name,product_price,product_desc,on_sales,sales_percentage,stock,product_img,cat_id) 
    VALUES ('black cat car pillow',15,'best car cotton pillow| Enjoy free shipping',0,0,50,'https://m.media-amazon.com/images/I/71U6X50rFyL._AC_SY355_.jpg',3)";
    $conn->exec($data2);

    $data2 = "INSERT INTO products (product_name,product_price,product_desc,on_sales,sales_percentage,stock,product_img,cat_id) 
    VALUES ('rabbit car pillow',17,'best car cotton pillow| Enjoy free shipping',0,0,50,'https://m.media-amazon.com/images/I/61TRfB1NfpL._AC_SS450_.jpg',3)";
    $conn->exec($data2);

    $data2 = "INSERT INTO products (product_name,product_price,product_desc,on_sales,sales_percentage,stock,product_img,cat_id) 
    VALUES ('minimouse car headerset pillow',14,'best car cotton pillow| Enjoy free shipping',1,20,55,'https://cf.shopee.co.th/file/6e3a179178cc3a6731494a0256986cef',3)";
    $conn->exec($data2);

    $data2 = "INSERT INTO products (product_name,product_price,product_desc,on_sales,sales_percentage,stock,product_img,cat_id) 
    VALUES ('medical pillow',14,'memory foam cotton pillow| Enjoy free shipping',1,20,55,'https://www.dynamictechnomedicals.com/wp-content/uploads/2017/04/Relxzon-Related.jpg',4)";
    $conn->exec($data2);

    $data2 = "INSERT INTO products (product_name,product_price,product_desc,on_sales,sales_percentage,stock,product_img,cat_id) 
    VALUES ('medical pillow',14,'memory foam cotton pillow| Enjoy free shipping',1,20,55,'https://20fd661yccar325znz1e9bdl-wpengine.netdna-ssl.com/wp-content/uploads/2020/11/coisum-cervical-memory-foam-neck-pillow-neck-pillow.jpg',4)";
    $conn->exec($data2);
}

    $sql = "SELECT * FROM users";
    $users =  $conn->prepare($sql);
    $users->execute();
    if(!$users->fetchAll(PDO::FETCH_ASSOC)){
        $data3 = "INSERT INTO users (username,email,password,is_admin,phone) 
        VALUES ('Admin','admin@admin.com' ,'admin1234',1,0)";
        $conn->exec($data3);
    }
