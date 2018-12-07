<html>

<title>Product</title>
<link rel="stylesheet" href="product.css">
<script src="product.js" defer></script>
</head>

<body>
    <header>
        Made by Joy & Joseph
        <span id="head">
            <a href="../account/account.php">My Account</a>
            /
            <img class="icons" src="../images/shopping_cart.png" id = "cart">
            /
            <img class="icons" src="../images/search.png" id = "searchpic">
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
    <h2 id = "item_added" class = "hidden">Item added!</h2>
    <section id="box">
        <div id="images_grid">
            <img class="product_image" id="image1" src="../images/avatar.png">
            <img class="product_image" id="image2" src="../images/avatar.png">
        </div>
        <div id="details">
            <h3><i>Name:</i> item</h3>
            <h3><i>Price:</i> $5.00</h3>
            <h3><i>Category</i> electronics</h3>
            <h3><i>Location:</i> place</h3>
            <h3><i>Description:</i></h3>
            <ul>
                <li>Year of production: </li><br>
                <li>blablabla</li><br>
                <li>blablabla</li><br>
                <li>blablabla</li><br>
                <li>blablabla</li><br>
                
                
                <li>blablabla</li><br>
                <li>blablabla</li>
            </ul>
            <h3><i>Seller:</i> person</h3>
            <form method="POST">
                <button id = "add_to_cart" class="add_to_cart"><img width="8%" src="../images/cart.png"> Add to Cart</button>
            </form>

            
            <!-- <button id = "go_to_cart" class="hidden add_to_cart"><img width="8%" src="../images/cart.png"> Go to Cart</button> -->

        </div>
    </section>


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