<html>
<?php
session_start();
echo $_SESSION['cart'][0];
echo $_SESSION['cart'][1];

 ?>
<head>
    <title>My Cart</title>
    <link rel="stylesheet" href="cart.css">
    <script src="cart.js" defer></script>

</head>

<body>

    <header>
        Made by Joy & Joseph
        <span id="head">
            <a href="../account/account.php">My Account</a>
            /
            <img class="icons" src="../images/shopping_cart.png" id="cart">
            /
            <img class="icons" src="../images/search.png" id="searchpic">
        </span>

    </header>

    <nav>
        <a href="../home.php"><img id="logo" src="../images/olx.png" /></a>

        <form method="GET" action="search/search.php">
            <input id="search" type="text" placeholder="Search for your item...">
            <input id="submit" type="submit" value="Search">
        </form>

        <button id="ad" href="">+ Place an ad</button>

        <div id="nav">
            <a href="../home.php">Home</a>
            <a href="shop.php">Shop</a>
            <a href="../contact.php">Contact</a>
        </div>

    </nav>

    <h1>Cart</h1>

    <div id="box">

        <img class="prod_image" src="../images/beanie.jpg">
        <div class="div_margin">
            <div id="new_div">
                <p><b>Name</b></p>
                <p><b>Description</b></p>
                <p><b>Price</b></p>
            </div>
            <div id="checkbox">
                <form method="GET">
                    <input id="check" type="checkbox" name="buy">
                </form>
            </div>
        </div>
    </div>

        <div id = "total">
            <p><b>Total</b></p>
            <p id = "price">100</p>
        </div>

</body>



</html>
