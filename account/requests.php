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
            <a href="account.php">My Account</a>
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
                <a href="../home.php">Home</a>
                <a href="../products/shop.php">Shop</a>
                <a href="../contact.php" id="contact">Contact</a>
                <form method="GET" action="../Signout.php">
                    <input id="submit_logout" type="submit" value="Logout">
                </form>
            </div>
        </div>
    </nav>

    <h1>Requests</h1>

<?php
session_start();
 include 'getrequests.php';

    $count=0 ;
    while($count < count($arr)){
    ?>
    <div id="box">
        <p><?=$arr[$count]["name"]?></p>
        <p><?=$arr[$count]["price"]?></p>
        <form id = "formagree" method = "POST" action = "agreerequest.php">
          <input value="<?=$arr[$count]["name"]?>" name="name" type="hidden">
          <input value="<?=$arr[$count]["price"]?>" name="price" type="hidden">
            <input class = "agreeDisagree" type = "submit" value = "Agree">
        </form>
        <form method = "POST" action = "deleterequest.php">
          <input value="<?=$arr[$count]["name"]?>" name="name" type="hidden">
          <input value="<?=$arr[$count]["price"]?>" name="price" type="hidden">
                <input class = "agreeDisagree" type = "submit" value = "Disagree">
            </form>
    </div>
    <?php
  $count++;
} ?>

</body>

</html>
