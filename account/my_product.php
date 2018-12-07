<html>

<title> My Product</title>
<link rel="stylesheet" href="my_product.css">
<script src="my_product.js" defer></script>
</head>

<body>
    <header>
        Made by Joy & Joseph
        <span id="head">
            <a href="../account/account.php">My Account</a>
            /
            <a href="">Checkout</a>
            /
            <img class="icons" src="../shopping_cart.png" href="">
            /
            <img class="icons" src="../search.png" href="">
        </span>

    </header>

    <nav>
        <a href="../home.php"><img id="logo" src="../logo.png" /></a>

        <form method="GET" action="search/search.php">
            <input id="search" type="text" placeholder="Search for your item...">
            <input id="submit" type="submit" value="Search">
        </form>

        <button id="ad">+ Place an ad</button>

        <div id="nav">
            <a href="../home.php">Home</a>
            <a href="../account/shop.php">Shop</a>
            <a>About Us</a>
            <a href="../contact.php">Contact</a>
        </div>
    </nav>

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
                <button id="edit">Edit Ad</button>
                
            </form>

            <form method="GET">
                    <button id="edit">Delete Ad</button>
            </form>

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