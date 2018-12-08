<html>
<?php
session_start();
$price = 0;

?>

<head>
    <title>My Cart</title>
    <link rel="stylesheet" href="cart.css">
    <link rel="stylesheet" href="modal.css">
    <link rel="stylesheet" href="product.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js" defer></script>
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
            <form method="GET" action="../Signout.php">
                <input id="submit_logout" type="submit" value="Logout">
            </form>
        </div>

    </nav>

    <h1>Cart</h1>

    <?php
include 'getcart.php';
$count = 0;
while ($count < count($arr)) {

    ?>
    <div id="box">

        <img onclick="document.getElementById('<?=$arr[$count]['name']?>').style.display='block'" class="prod_image items"
            src="<?=$arr[$count]["image"]?>">


        <div id="<?=$arr[$count]['name']?>" class="modal">
            <!-- Modal content -->
            <div class="modal-content">
                <span onclick="document.getElementById('<?=$arr[$count]['name']?>').style.display = 'none' " class="close">&times;</span>
                <section id="modalbox">
                    <div id="images_grid">
                        <img class="product_image" id="image1" src="<?=$arr[$count]['image']?>">
                        <img class="product_image" id="image2" src="<?=$arr[$count]['image']?>">
                    </div>
                    <div id="details">
                        <h3 class="h3modal"><i>Name:</i>
                            <?=$arr[$count]['name']?>
                        </h3>
                        <h3 class="h3modal"><i>Price:</i>
                            <?=$arr[$count]['price']?>
                        </h3>
                        <h3 class="h3modal"><i>Category</i>
                            <?=$arr[$count]['categorie']?>
                        </h3>
                        <h3 class="h3modal"><i>Location:</i>
                            <?=$arr[$count]['location']?>
                        </h3>
                        <h3 class="h3modal"><i>Description:</i></h3>
                        <ul>
                            <?=$arr[$count]['description']?>
                        </ul>
                        <h3 class="h3modal"><i>Seller:</i>
                            <?=$arr[$count]['seller']?>
                        </h3>
                    </div>
                </section>
            </div>
        </div>


        <div class="div_margin">
            <div id="new_div">
                <p><b>
                        <?=$arr[$count]["name"]?></b></p>
                <p><b>
                        <?=$arr[$count]["description"]?></b></p>
                <p><b>
                        <?=$arr[$count]["price"]?></b></p>
            </div>
            <div id="checkbox">
                <form method="GET" name="Cart">
                    <input class="checkbox" id="check" value="<?=$arr[$count]["price"]?>" type="checkbox" name="buy">
                </form>
            </div>
        </div>
    </div>
    <?php
$count++;
}
?>
    <div id="total">
        <p><b>Total</b></p>
        <p id="price"></p>
    </div>

</body>



</html>