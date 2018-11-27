<html>

<head>
    <title>Shop</title>
    <link rel="stylesheet" href="shop.css">
    <link rel="stylesheet" href="modal.css">
    <link rel="stylesheet" href="product.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="shop.js" defer></script>
    <script src = "modal.js" defer></script>
    <script src = "product.js" defer></script>

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
        <a href="home.php"><img id="logo" src="../images/olx.png" /></a>

        <form method="GET" action="search/search.php">
            <input id="search" type="text" placeholder="Search for your item...">
            <input id="submit" type="submit" value="Search">
        </form>

        <button id="ad">+ Place an ad</button>

        <div id="nav">
            <a href="../home.php">Home</a>
            <a href="shop.php">Shop</a>
            <a href="../contact.php">Contact</a>
        </div>

    </nav>

    <div id="box">
        <h2 id="search_by_category">Search by Category</h2>

        <div id="stuff">
            <a class="category" id="jewelry_link">Accessories</a>
            <br><br>
            <a class="category" id="cars_link">Cars</a>
            <br><br>
            <a class="category" id="children_link">Children gadgets</a>
            <br><br>

            <a class="category" id="electronics_link">Electronics</a>
            <br><br>
            <a class="category" id="home_link">Home and Garden</a>
            <br><br>
            <a class="category" id="beauty_link">Makeup</a>
            <br><br>
            <a class="category" id="men_link">Men's Clothing</a>
            <br><br>
            <a class="category" id="sports_link">Sports and Outdoors</a>
            <br><br>
            <a class="category" id="women_link">Women's Clothing</a>
            <br><br>
            <a class="category" id="bags_link">Services</a>
        </div>

        <div id="latest">
            <h3 class="h3shop">WHAT'S NEW</h3>
            <div id="whats_new">
                <img class="new_image" src="../images/monkey.jpg" width="100%">

                <img class="new_image" src="../images/monkey.jpg" width="100%">
                <img class="new_image" src="../images/monkey.jpg" width="100%">
                <img class="new_image" src="../images/monkey.jpg" width="100%">
            </div>
        </div>
    </div>


    <br>
    <br>

    <button id="filter">Filter</button>
    <div id="sort_div" class="hidden">
        <form>
            <div id="formsearch">
                <p class="sort_by_cat">Sort by Price</p>
                <p class="sort_by_cat">Sort by Date</p>
                <p class="sort_by_cat">Sort by Location</p>

                <div id="open_price_filter">
                    <input type="radio" name="price" value="low to high"> Low to high<br>
                    <input type="radio" name="price" value="high to low"> High to low
                </div>

                <div id="open_date_filter">
                    <input type="radio" name="date" value="Oldest to most recent">Oldest to
                    most
                    recent<br>
                    <input type="radio" name="date" value="Most recent to oldest">Most recent to oldest
                </div>

                <div id="open_location_filter">
                    <input type="radio" name="location" value="Furthest to nearest">Furthest
                    to
                    nearest<br>
                    <input type="radio" name="location" value="Nearest to furthest">Nearest to furthest<br>
                </div>
            </div>
            <input id="form_button" type="submit" value="done">
        </form>

    </div>


    <div id="women" class="hidden">
        <h2 class="cat_h2">Women's Clothing</h2>



        <div id="products">

            <img class="items new_image" src="../images/purse.jpg">
            <img class="items new_image" src="../images/purse.jpg">
            <img class="items new_image" src="../images/purse.jpg">
            <img class="items new_image" src="../images/purse.jpg">
            <img class="items new_image" src="../images/purse.jpg">
            <img class="items new_image" src="../images/purse.jpg">
            <img class="items new_image" src="../images/purse.jpg">
            <img class="items new_image" src="../images/purse.jpg">
            <img class="items new_image" src="../images/purse.jpg">

        </div>
    </div>

    <div id="men" class="hidden">
        <h2 class="cat_h2">Men's Clothing</h2>

        <div id="products">

            <img class="items new_image" src="../images/military.jpg">
            <img class="items new_image" src="../images/military.jpg">
            <img class="items new_image" src="../images/military.jpg">
            <img class="items new_image" src="../images/military.jpg">
            <img class="items new_image" src="../images/military.jpg">
            <img class="items new_image" src="../images/military.jpg">
            <img class="items new_image" src="../images/military.jpg">
            <img class="items new_image" src="../images/military.jpg">
            <img class="items new_image" src="../images/military.jpg">

        </div>
    </div>

    <div id="electronics" class="hidden">
        <h2 class="cat_h2">Electronics</h2>

        <div id="products">

            <img class="items new_image" src="../images/acc.jpg">
            <img class="items new_image" src="../images/acc.jpg">
            <img class="items new_image" src="../images/acc.jpg">
            <img class="items new_image" src="../images/acc.jpg">
            <img class="items new_image" src="../images/acc.jpg">
            <img class="items new_image" src="../images/acc.jpg">
            <img class="items new_image" src="../images/acc.jpg">
            <img class="items new_image" src="../images/acc.jpg">
            <img class="items new_image" src="../images/acc.jpg">

        </div>
    </div>

    <div id="jewelry" class="hidden">
        <h2 class="cat_h2">Accessories</h2>

        <div id="products">

            <img class="items new_image" src="../images/beanie.jpg">
            <img class="items new_image" src="../images/beanie.jpg">
            <img class="items new_image" src="../images/beanie.jpg">
            <img class="items new_image" src="../images/beanie.jpg">
            <img class="items new_image" src="../images/beanie.jpg">
            <img class="items new_image" src="../images/beanie.jpg">
            <img class="items new_image" src="../images/beanie.jpg">
            <img class="items new_image" src="../images/beanie.jpg">
            <img class="items new_image" src="../images/beanie.jpg">

        </div>
    </div>

    <div id="home" class="hidden">
        <h2 class="cat_h2">Home and Garden</h2>

        <div id="products">

            <img class="items new_image" src="../images/clothes.jpg">
            <img class="items new_image" src="../images/clothes.jpg">
            <img class="items new_image" src="../images/clothes.jpg">
            <img class="items new_image" src="../images/clothes.jpg">
            <img class="items new_image" src="../images/clothes.jpg">
            <img class="items new_image" src="../images/clothes.jpg">
            <img class="items new_image" src="../images/clothes.jpg">
            <img class="items new_image" src="../images/clothes.jpg">
            <img class="items new_image" src="../images/clothes.jpg">

        </div>
    </div>



    <div id="children" class="hidden">
        <h2 class="cat_h2">Children gadgets</h2>



        <div id="products">
            <img class="items new_image" src="../images/phones.jpg">
            <img class="items new_image" src="../images/phones.jpg">
            <img class="items new_image" src="../images/phones.jpg">
            <img class="items new_image" src="../images/phones.jpg">
            <img class="items new_image" src="../images/phones.jpg">
            <img class="items new_image" src="../images/phones.jpg">
            <img class="items new_image" src="../images/phones.jpg">
            <img class="items new_image" src="../images/phones.jpg">
            <img class="items new_image" src="../images/phones.jpg">

        </div>
    </div>

    <div id="sports" class="hidden">
        <h2 class="cat_h2">Sports and Outdoors</h2>

        <div id="products">
            <img class="items new_image" src="../images/jeans.jpg">
            <img class="items new_image" src="../images/jeans.jpg">
            <img class="items new_image" src="../images/jeans.jpg">
            <img class="items new_image" src="../images/jeans.jpg">
            <img class="items new_image" src="../images/jeans.jpg">
            <img class="items new_image" src="../images/jeans.jpg">
            <img class="items new_image" src="../images/jeans.jpg">
            <img class="items new_image" src="../images/jeans.jpg">
            <img class="items new_image" src="../images/jeans.jpg">
        </div>
    </div>

    <div id="beauty" class="hidden">
        <h2 class="cat_h2">Makeup</h2>

        <div id="products">
            <img class="items new_image" src="../images/purse.jpg">
            <img class="items new_image" src="../images/purse.jpg">
            <img class="items new_image" src="../images/purse.jpg">
            <img class="items new_image" src="../images/purse.jpg">
            <img class="items new_image" src="../images/purse.jpg">
            <img class="items new_image" src="../images/purse.jpg">
            <img class="items new_image" src="../images/purse.jpg">
            <img class="items new_image" src="../images/purse.jpg">
            <img class="items new_image" src="../images/purse.jpg">
        </div>
    </div>

    <div id="cars" class="hidden">
        <h2 class="cat_h2">Cars</h2>
        <div id="products">
            <img class="items new_image" src="../images/shoes.jpg">
            <img class="items new_image" src="../images/shoes.jpg">
            <img class="items new_image" src="../images/shoes.jpg">
            <img class="items new_image" src="../images/shoes.jpg">
            <img class="items new_image" src="../images/shoes.jpg">
            <img class="items new_image" src="../images/shoes.jpg">
            <img class="items new_image" src="../images/shoes.jpg">
            <img class="items new_image" src="../images/shoes.jpg">
            <img class="items new_image" src="../images/shoes.jpg">
        </div>
    </div>

    <div id="bags" class="hidden">
        <h2 class="cat_h2">Services</h2>

        <div id="products">
            <img id="myBtn" class="items new_image" src="../images/dress.jpg">
            <img class="items new_image" src="../images/dress.jpg">
            <img class="items new_image" src="../images/dress.jpg">
            <img class="items new_image" src="../images/dress.jpg">
            <img class="items new_image" src="../images/dress.jpg">
            <img class="items new_image" src="../images/dress.jpg">
            <img class="items new_image" src="../images/dress.jpg">
            <img class="items new_image" src="../images/dress.jpg">
            <img class="items new_image" src="../images/dress.jpg">
        </div>
    </div>

    <!-- <button id="myBtn">Open Modal</button> -->

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <section id="modalbox">
        <div id="images_grid">
            <img class="product_image" id="image1" src="../images/avatar.png">
            <img class="product_image" id="image2" src="../images/avatar.png">
        </div>
        <div id="details">
        <h2 id = "item_added" class = "hidden">Item added!</h2>
            <h3 class = "h3modal"><i>Name:</i> item</h3>
            <h3 class = "h3modal"><i>Price:</i> $5.00</h3>
            <h3 class = "h3modal"><i>Category</i> electronics</h3>
            <h3 class = "h3modal"><i>Location:</i> place</h3>
            <h3 class = "h3modal"><i>Description:</i></h3>
            <ul>
                <li>Year of production: </li><br>
                <li>blablabla</li><br>
                <li>blablabla</li><br>
                <li>blablabla</li><br>
                <li>blablabla</li><br>


                <li>blablabla</li><br>
                <li>blablabla</li>
            </ul>
            <h3 class = "h3modal"><i>Seller:</i> person</h3>
            <form method="POST">
                <button id = "add_to_cart" class="add_to_cart"><img width="8%" src="../images/cart.png"> Add to Cart</button>
            </form>


            <button id = "go_to_cart" class="hidden add_to_cart"><img width="8%" src="../images/cart.png"> Go to Cart</button>

        </div>
    </section>
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
