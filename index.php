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
    <title>Swiggy - Order Food Online</title>
    <link rel="shortcut icon" href="IMG/swiggy-1.svg" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <a href="index.php" class="logo"><img src="IMG/logo.jpg" height=30px alt=""><i class="utensils"></i>Krisha</a>

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
            <a href="cart.php" id="bag" class="fas fa-shopping-cart"><span>0</span></a>
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

    <section class="form-container">
        <div class="popup-container" id="login-popup">
            <div class="popup">
                <form action="login_register.php" method="post">
                    <h2>
                        <span>CUSTOMER LOGIN</span>
                        <button type="reset" onclick="popup('login-popup')" >X</button>
                    </h2>
                    <input type="text" placeholder="Email or Username" name="email_username">
                    <input type="password" placeholder="Password" name="password">
                    <button class="login-btn" name="login" type="submit">LOGIN</button>
                </form>
            </div>
        </div>
    </section>

    <section class="form-container">
        <div class="popup-container" id="register-popup">
            <div class="register popup">
                <form action="login_register.php" method="post">
                    <h2>
                        <span>CUSTOMER REGISTRATION</span>
                        <button type="reset" onclick="popup('register-popup')">X</button>
                    </h2>
                    <input type="text" placeholder="Full Name" name="fullname" >
                    <input type="text" placeholder="Username" name="username" >
                    <input type="email" placeholder="E- Mail" name="email" >
                    <input type="password" placeholder="Password" name="password" >
                    <button class="register-btn" name="register" type="submit">REGISTER</button>
                </form>
            </div>
        </div>
    </section>

    <section class="home" id="home">
        <div class="content">
            <span>Add A Taste Of Joy </span>
            <p>Swiggy had become the best Indian online food ordering and delivery platform that was founded in July 2014 in Bangalore, and is operated in over 500 Indian cities, as of September 2021. </p>
            <a href="#" class="btn">Order Now</a>
        </div>
        <div class="image">
            <img src="IMG/Home.png" alt="">
        </div>
    </section>

    <section class="speciality" id="speciality">
        <h1 class="heading">Swiggy <span>Special</span></h1>
        <div class="box-container">
            <div class="box">
                <img class="image" src="IMG/p1.jpg" alt="" />
                <div class="content">
                    <img src="IMG/S1.png" alt="" />
                    <h3> Delicost Burger</h3>
                    <p>A burger without cheese is like a hug without a squeeze. You did something today to deserve a burger. You did something today to deserve a burger. Life is too short to miss out on beautiful things like a double cheeseburger. ·  </p>
                </div>
            </div>
            <div class="box">
                <img class="image" src="IMG/p2.jpg" alt="" />
                <div class="content">
                    <img src="IMG/S2.png" alt="" />
                    <h3>Italiano Pizza</h3>
                    <p>The perfect lover is one who turns into a pizza at 4:00 A.M. Tastes chewy and crisp, with marinara sauce and cheese. Its all about the textures combining with the flavour of the sauce to give you a umami effect.
                    </p>
                </div>
            </div>
            <div class="box">
                <img class="image" src="IMG/p3.jpg" alt="" />
                <div class="content">
                    <img src="IMG/S3.png" alt="" />
                    <h3>Cold Ice-Cream</h3>
                    <p>Life is like an ice cream: Enjoy it before it melts. The trick is enjoying it and making the most of it while it's still ice cream. Life is like an ice-cream cone, you have to lick it one day at a time.
                    </p>
                </div>
            </div>
            <div class="box">
                <img class="image" src="IMG/p4.jpg" alt="" />
                <div class="content">
                    <img src="IMG/S4.png" alt="" />
                    <h3>Soft Drinks</h3>
                    <p> The gooey, bubbly sea drowning our American children. If soccer was an American soft drinks, it would be Diet Pepsi. The best brain freeze I'll ever have.
                    </p>
                </div>
            </div>
            <div class="box">
                <img class="image" src="IMG/p5.jpg" alt="" />
                <div class="content">
                    <img src="IMG/S5.png" alt="" />
                    <h3>Licious Sweets</h3>
                    <p>I want to have a good body but not as much as I want dessert. Stressed is dessert spelled backwards. There is only one difference between a long life and a good dinner: that, in the dinner, the sweets come last.
                    </p>
                </div>
            </div>
            <div class="box">
                <img class="image" src="IMG/p6.jpg" alt="" />
                <div class="content">
                    <img src="IMG/S6.png" alt="" />
                    <h3>Healthy Breakfast</h3>
                    <p>Breakfast is always the best time for something juicy, sweet and fresh - it just feels like the right way to open the day. There's no right way, though, when it comes to choosing the fruit.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="popular" id="popular">
        <h1 class="heading"> Today's <span>Menu</span></h1>
        <div class="box-container">
            <div class="box">
                <img src="IMG/burger.jpg" alt="burger">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3> Delicost Burger</h3>
                <p>A burger without cheese is like a hug without a squeeze.</p>
                <a href="#" class="btn add-to-cart">Add to Cart</a>
                <span class="price">$4</span>
            </div>
            <div class="box">
                <span class="price">$6</span>
                <img src="IMG/cakes.jpg" alt="">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h3>Delnise Cakes</h3>
                <p>A slice of my life is but a piece of cake.</p>
                <a href="#" class="btn add-to-cart">Add to Cart</a>
            </div>
            <div class="box">
                <span class="price">$3</span>
                <img src="IMG/namkeen.jpg" alt="">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>Chewda Namkeen</h3>
                <p>Whatever happens in your life, just have a snack.</p>
                <a href="#" class="btn add-to-cart">Add to Cart</a>
            </div>
            <div class="box">
                <span class="price">$5</span>
                <img src="IMG/cupcakes.jpg" alt="">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h3>Johnstone CupCakes</h3>
                <p>Dream as if you'll live forever, eat Cupcakes as if you'll die today.</p>
                <a href="#" class="btn add-to-cart">Add to Cart</a>
            </div>
            <div class="box">
                <span class="price">$10</span>
                <img src="IMG/drinks.jpg" alt="">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h3>Cold Drinks</h3>
                <p>A cold drink is the answer to most problems</p>
                <a href="#" class="btn add-to-cart">Add to Cart</a>
            </div>
            <div class="box">
                <span class="price">$4</span>
                <img src="IMG/pop.jpg" alt="">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>Popsicles</h3>
                <p>Keep cool and enjoy a popsicle.</p>
                <a href="#" class="btn add-to-cart">Add to Cart</a>
            </div>
        </div>
    </section>

    <section class="steps">
        <div class="box">
            <img src="img/step1.png" alt="#" />
            <h3>Choose Your Favorite Food</h3>
        </div>
        <div class="box">
            <img src="img/step2.jpg" alt="#" />
            <h3>Free & Fast Delivery</h3>
        </div>
        <div class="box">
            <img src="img/step3.jpg" alt="#" />
            <h3>Easy Payment Methods</h3>
        </div>
        <div class="box">
            <img src="img/step4.jpg" alt="#" />
            <h3> Enjoy your Food</h3>
        </div>
    </section>

    <section class="gallery" id="gallery">
        <h1 class="heading"> Food <span> Gallery </span></h1>
        <div class="box-container">
            <div class="box">
                <img src="IMG/food1.jpg" alt="" />
                <div class="content">
                    <h3>Chinese Noodles</h3>
                    <p>All the dreamers in all the world are dizzy in the noodle! </p>
                    <a href="#" class="btn">Order Now</a>
                </div>
            </div>
            <div class="box">
                <img src="IMG/food2.jpg" alt="" />
                <div class="content">
                    <h3>Mexican Food</h3>
                    <p>Life without the Mexican Food is like no life at all</p>
                    <a href="#" class="btn">Order Now</a>
                </div>
            </div>
            <div class="box">
                <img src="IMG/food3.jpg" alt="" />
                <div class="content">
                    <h3>Continental Food</h3>
                    <p>Good cookery is not an extravagance but an economy, and many a tasty.</p>
                    <a href="#" class="btn">Order Now</a>
                </div>
            </div>
            <div class="box">
                <img src="IMG/food4.jpg" alt="" />
                <div class="content">
                    <h3>Thai Food</h3>
                    <p>When eating out while on tour, a great place to get vegetarian food is Thai restaurants, as they have lots of options.</p>
                    <a href="#" class="btn">Order Now</a>
                </div>
            </div>
            <div class="box">
                <img src="IMG/food5.jpg" alt="" />
                <div class="content">
                    <h3>Japanese Food</h3>
                    <p>Japanese food makes me feel particularly good</p>
                    <a href="#" class="btn">Order Now</a>
                </div>
            </div>
            <div class="box">
                <img src="IMG/food6.jpg" alt="" />
                <div class="content">
                    <h3>Lebanese Food</h3>
                    <p>Each installation has a witty food related message, sure to make you go "aww" and feel kinda hungry at the same time</p>
                    <a href="#" class="btn">Order Now</a>
                </div>
            </div>
            <div class="box">
                <img src="IMG/food7.jpg" alt="" />
                <div class="content">
                    <h3>Healthy Salad</h3>
                    <p>A salad ain't just a meal; it's a way of life.</p>
                    <a href="#" class="btn">Order Now</a>
                </div>
            </div>
            <div class="box">
                <img src="IMG/food8.jpg" alt="" />
                <div class="content">
                    <h3>Indian Food</h3>
                    <p>Sitting down to a meal with an Indian family is different from sitting down to a meal with a British family.</p>
                    <a href="#" class="btn">Order Now</a>
                </div>
            </div>
            <div class="box">
                <img src="IMG/food9.jpg" alt="" />
                <div class="content">
                    <h3>Fresh cut</h3>
                    <p>People who love to eat are always the best people.</p>>
                    <a href="#" class="btn">Order Now</a>
                </div>
            </div>
        </div>
    </section>

    <section class="review" id="review">
        <h1 class="heading">Customers <span>Reviews</span></h1>
        <div class="box-container">
            <div class="box">
                <i class="fas fa-quote-right"></i>
                <img src="IMG/person3.jpg" alt="" />
                <h3>Chandler Bing</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <p>
                    Swiggy is the best when it comes to ordering food online. I have been ordering from Swiggy for a long time now. 
                </p>
            </div>
            <div class="box">
                <i class="fas fa-quote-right"></i>
                <img src="IMG/person2.jpg" alt="" />
                <h3>Monica Geller</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <p>
                    Apart from some small issues here and there, I have never had a major problem all through my order placement and delivery process.
                </p>
            </div>
            <div class="box">
                <i class="fas fa-quote-right"></i>
                <img src="IMG/person1.jpg" alt="" />
                <h3>Ross Geller</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <p>
                    I recently ordered a butter chicken biryani from my favorite restaurant. This is the best part about Swiggy. I can actually order my favorite food from my favorite restaurant and need not leave my home at the same time.
                </p>
            </div>
        </div>
    </section>

    <section class="order" id="order">
        <h1 class="heading"><span>Order </span> Now</h1>
        <div class="row">
            <div class="image1">
                <img src="IMG/order.jpg" alt="" />
                <div class="centered"><em>Swiggy</em> </div>
            </div>
            <form action="">
                <div class="inputBox">
                    <input type="text" placeholder="Name" />
                    <input type="email" placeholder="Email" />
                </div>
                <div class="inputBox">
                    <input type="number" placeholder="Number" />
                    <input type="text" placeholder="Food Name" />
                </div>
                <textarea placeholder="Address" name="" id="" cols="30" rows="10"></textarea>
                <input type="submit" value="place order " class="btn" />
            </form>
        </div>
    </section>

    <section class="footer">
        <div class="container">
            <div class="box">
                <h3>Locations </h3>
                <a href="#">India</a>
                <a href="#">Germany</a>
                <a href="#">Canada</a>
                <a href="#">USA</a>
                <a href="#">Brazil</a>
            </div>
            <div class="box">
                <h3>Quick Links</h3>
                <a href="#home">Home</a>
                <a href="#speciality">Speciality</a>
                <a href="#popular">Menu</a>
                <a href="#gallery">Gallery</a>
                <a href="#review">Review</a>
                <a href="#order">Order</a>
            </div>
            <div class="box">
                <h3>Contact Info </h3>
                <a href="#">+112-4422-4222</a>
                <a href="#">+233-3344-2222</a>
                <a href="#"> Swiggy.order@gmail.com</a>
                <a href="#">LinkedIn</a>
            </div>
        </div>
    </section>

    <section class="footer2">
        <div class="share">
            <a href="#" class="btn">Facebook</a>
            <a href="#" class="btn">Twitter</a>
            <a href="#" class="btn">LinkedIn</a>
            <a href="https://www.instagram.com" class="btn">Instagram</a>
            <a href="#" class="btn">Pinterest</a>
        </div>
        <hi class="credit" id="credit">
            &copy; Created By <span> Shubham Awasthi </span> | All Rights Reserved!
        </hi>
    </section>

    <div class="loader-container">
        <!-- <img src="IMG/loader.gif" alt="#"/> -->
    </div>
    <script src="script.js"></script>
</body>

</html>

</html>