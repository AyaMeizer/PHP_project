<?php


if (!isset($_SESSION)) {
    session_start();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="cart.css">
</head>

<body>
    <div class="hearer_icon d-flex align-items-center">


        <a href="cart.php">
            <button class="button">
                <span class="icon">
                    <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20' fill='currentColor'>
                        <path d='M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z' />
                    </svg>
                </span>
                <span>Your Cart</span>
                <span class="badge">


                    <?php
                    if (isset($_SESSION['product'])) {
                        if (count($_SESSION['product']) !== 0) {

                            echo count($_SESSION['product']);
                        } else if(!$_SESSION['product']) {
                            echo "<small>Empty</small>";
                        }
                    } else {
                        $_SESSION['product'] = [];
                    }


                    ?>


                </span>
            </button>

        </a>
    </div>
</body>

</html>