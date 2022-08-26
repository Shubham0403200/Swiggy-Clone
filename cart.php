<?php
    require ('connection.php');
    session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carts - Swiggy - Order Food Online</title>
    <link rel="shortcut icon" href="IMG/swiggy-1.svg" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <a href="index.php" class="logo"><img src="IMG/logo.jpg" height=30px alt=""><i class="utensils"></i>Swiggy</a>

        <nav class="navbar">
            <a class="active" href="#home">HOME</a>
            <a href="#speciality">SPECIALITY</a>
            <a href="#popular">MENU</a>
            <a href="#gallery">GALLERY</a>
            <a href="#review">REVIEW</a>
            <a href="#order">ORDER</a>
        </nav>

        <div class="icon">
            <i class="fas fa-bars" id="bar"></i>
            <i class="fas fa-search" id="search-icon"></i>
            <a href="#" class="fas fa-heart"></a>
            <a href="#" id="bag" class="fas fa-shopping-cart"><span>0</span></a>
        </div>

        <?php
            if (isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true)
            {
                echo"
                    <div class='user'>
                        $_SESSION[username] - <a href='logout.php'> Logout </a>
                    </div>
                ";
            }
            else
            {
                echo"
                    <div class='sign-in-up'>
                        <button type='button' onclick=\"popup('login-popup')\" > LOGIN</button>
                        <button type='button' onclick=\"popup('register-popup')\" > REGISTER</button>
                    </div>
                "; 
            }
        ?>
    </header>

    <form action="#" id="search-form">
        <input type="search" placeholder="Search Food / Restaurants" name="" id="search-box">
        <label for="search-box" class="fas fa-search"></label>
        <i class="fas fa-times" id="close"></i>
    </form>


    <div class="products-container">
        <div class="product-header">
            <h5 class="product-title">PRODUCT</h5>
            <h5 class="price">PRICE</h5>
            <h5 class="quantity">QUANTITY</h5>
            <h5 class="total">TOTAL</h5>
        </div>
        <div class="products">

       </div>
    </div>
    <script src="script.js"></script>
</body>


