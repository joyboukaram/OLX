<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Requests</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="requests.css" />
    <script src="requests.js" defer></script>
</head>

<body>
    <header>
        <span id="makers"> Made by Joy & Joseph</span>
        <span id="head">
            <a href="account/account.php">My Account</a>
            /
            <img class="icons" src="../images/shopping_cart.png" id="cart">
            /
            <img class="icons" id="searchpic" src="../images/search.png" href="">
        </span>

    </header>

    <nav>
        <a href="../home.php"><img id="logo" src="../images/olx.png" /></a>

        <form method="POST" action="../search.php">
            <input id="search" name="search" type="text" placeholder="Search for your item...">
            <input id="submit" type="submit" value="Search">
        </form>

        <button id="ad" href="">+ Place an ad</button>
        <div>
            <div id="nav">
                <a href="">Home</a>
                <a href="../products/shop.php">Shop</a>
                <a href="../contact.php" id="contact">Contact</a>
                <form method="GET" action="../Signout.php">
                    <input id="submit_logout" type="submit" value="Logout">
                </form>
            </div>
        </div>
    </nav>

    <h1>Requests</h1>

    <div id="box">
        <p>NAME OF PRODUCT</p>
        <p>PRICE</p>
        <form id = "formagree" method = "POST" action = "">
            <input class = "agreeDisagree" type = "submit" value = "Agree">
        </form>
        <form method = "POST" action = "">
                <input class = "agreeDisagree" type = "submit" value = "Disagree">
            </form>
    </div>

</body>

</html>