<?php
$servername = "localhost";
$password = "";
$db_user = "root";
$db_name = "pillowmart";
try {
        $conn = new PDO("mysql:host=$servername;dbname=$db_name", $db_user, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "the hero aya";
} catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
}


/////////USERS TABLE
$create_users = "CREATE TABLE IF NOT EXISTS `users` (
        `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
        `username` varchar(255) NOT NULL,
        `email` varchar(255) NOT NULL UNIQUE,
        `password` varchar(255) NOT NULL,
        `phone` int(11) NOT NULL,
        `is_admin` tinyint(1) NOT NULL DEFAULT 0
        -- `is_loggedin` tinyint(1) NOT NULL DEFAULT 0
      ) ENGINE=InnoDB ";
$conn->exec($create_users);


/////////CHECKOUT TABLE
$create_checkout = "CREATE TABLE IF NOT EXISTS `checkout` (
            `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
            `total_price` int(11) NOT NULL,
            `address` varchar(255) NOT NULL,
            `date` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
            `user_id` int(11) NOT NULL,
            FOREIGN KEY (user_id) REFERENCES users(id)
             ON DELETE CASCADE
             ON UPDATE CASCADE 
             )
             ENGINE=InnoDB ";
$conn->exec($create_checkout);


/////////CATEGORY TABLE
$create_category = "CREATE TABLE IF NOT EXISTS `categories` (
        `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
        `cat_name` varchar(255)  NOT NULL UNIQUE,
        `cat_desc` varchar(255) NOT NULL
        )ENGINE=InnoDB ";
$conn->exec($create_category);

////////////PRODUCTS TABLE
$create_product = "CREATE TABLE IF NOT EXISTS `products` (
        `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
        `product_name` varchar(255) NOT NULL,
        `product_price` int(11) NOT NULL,
        `product_desc` varchar(255) NOT NULL,
        `on_sales` tinyint(1) NOT NULL DEFAULT 0,
        `sales_percentage` int(11) NOT NULL,
        `stock` int(11) NOT NULL,
        `product_img` varchar(255) NOT NULL,
        `cat_id` int(11) NOT NULL,
        FOREIGN KEY (cat_id) REFERENCES categories(id)
        ON DELETE CASCADE
        ON UPDATE CASCADE 
        )
        ENGINE=InnoDB ";
$conn->exec($create_product);


////////////COMMENTS TABLE
$create_comment = "CREATE TABLE IF NOT EXISTS comments (
        id int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
        comment_desc varchar(255)  NOT NULL,
        comment_username varchar(255) NOT NULL,
        product_id int(11) NOT NULL,
        FOREIGN KEY (product_id) REFERENCES products(id)
        ON DELETE CASCADE
        ON UPDATE CASCADE 
        )
        ENGINE=InnoDB";
$conn->exec($create_comment);


///////////checkout_products TABLE
$create_checkout_product = "CREATE TABLE IF NOT EXISTS `checkout_products` (
        `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
        `quantity` int(11) NOT NULL,
        `product_id` int(11) NOT NULL,
        `checkout_id` int(11) NOT NULL,
        FOREIGN KEY (product_id) REFERENCES products(id)
        ON DELETE CASCADE
        ON UPDATE CASCADE,
        FOREIGN KEY (checkout_id) REFERENCES checkout(id)
        ON DELETE CASCADE
        ON UPDATE CASCADE 
        )
        ENGINE=InnoDB ";
$conn->exec($create_checkout_product);
