<html>
<?php
session_start();
if(!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] != true)
{
	header("Location:index.php");
}

?>
<head>
    <title>Home</title>
    <link rel="stylesheet" href="home.css">
    <script src="home.js" defer></script>
</head>

<body>
    <header>
        Made by Joy & Joseph
        <span id="head">
            <a href="account/account.php">My Account</a>
            /
            <img class="icons" src="images/shopping_cart.png" id = "cart">
            /
            <img class="icons" id = "searchpic" src="images/search.png" href="">
        </span>

    </header>

    <nav>
        <a href="home.php"><img id="logo" src="images/olx.png" /></a>

        <form method="GET" action="search/search.php">
            <input id="search" type="text" placeholder="Search for your item...">
            <input id="submit" type="submit" value="Search">
        </form>

        <button id="ad" href="">+ Place an ad</button>

        <div id="nav">
            <a href="">Home</a>
            <a href="products/shop.php">Shop</a>
            <a href="contact.php" id="contact">Contact</a>
        </div>

    </nav>


    <div class="slideshow-container">

        <div class="mySlides fade">
            <div class="numbertext">1 / 4</div>
            <img class="open_image" src="images/clothes.jpg" style="width:100%">

        </div>


        <div class="mySlides fade">
            <div class="numbertext">2 / 4</div>
            <img class="open_image" src="images/purses.jpg" style="width:100%">

        </div>


        <div class="mySlides fade">
            <div class="numbertext">3 / 4</div>
            <img class="open_image" src="images/phones.jpg" style="width:100%">

        </div>

        <div class="mySlides fade">
            <div class="numbertext">4 / 4</div>
            <img class="open_image" src="images/acc.jpg" style="width:100%">

        </div>

        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>

    </div>
    <br>

    <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
        <span class="dot" onclick="currentSlide(4)"></span>
    </div>


    <div id="latest">
        <h2>Latest Products</h2>
        <div id="products">
            <!-- 10 ITEMS -->
            <img class="items open_image" src="images/beanie.jpg">
            <img class="items open_image" src="images/beanie.jpg">
            <img class="items open_image" src="images/beanie.jpg">
            <img class="items open_image" src="images/beanie.jpg">
            <img class="items open_image" src="images/beanie.jpg">
            <img class="items open_image" src="images/beanie.jpg">
            <img class="items open_image" src="images/beanie.jpg">
            <img class="items open_image" src="images/beanie.jpg">
            <img class="items open_image" src="images/beanie.jpg">
            <img class="items open_image" src="images/beanie.jpg">


        </div>
    </div>







    <footer>
        <div class="container">
            <div class="row">
                © Copyright Joy and Joseph (2018) - All Rights Reserved
            </div>
        </div>
        </div>
    </footer>
</body>

</html>
