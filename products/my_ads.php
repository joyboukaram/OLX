<html>

<head>
    <title>My ads</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="ads.css">
    <link rel="stylesheet" href="product.css">
    <link rel="stylesheet" href="modal.css">
    <script src="ads.js" defer></script>
    <script src="modal.js" defer></script>

</head>

<body>

    <header>
        <span id="makers">Made by Joy & Joseph</span>
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

        <form method="POST" action="../search.php">
            <input id="search" name="search" type="text" placeholder="Search for your item...">
            <input id="submit" type="submit" value="Search">
        </form>


        <button id="ad" href="">+ Place an ad</button>
        <div>
            <div id="nav">
                <a href="../home.php">Home</a>
                <a href="shop.php">Shop</a>
                <a href="../contact.php" id="contact">Contact</a>
                <form method="GET" action="../Signout.php">
                    <input id="submit_logout" type="submit" value="Logout">
                </form>
            </div>
        </div>
    </nav>

    <h1>My ads</h1>

    <div id="products">
        <?php
include 'getmyads.php';
$count=0 ;
while($count < count($arr)){


  $images = explode(" " ,$arr[$count]['image']);
  $countimage = count($images);

?>
        <img class="myads" onclick="document.getElementById('<?=$arr[$count]['name']?>').style.display='block'" class="items"
            src="<?=$images[0]?>">

        <div id="<?=$arr[$count]['name']?>" class="modal">

            <!-- Modal content -->
            <div class="modal-content">
                <span onclick="document.getElementById('<?=$arr[$count]['name']?>').style.display = 'none' " class="close">&times;</span>
                <section id="modalbox">
                    <div id="images_grid">


                      <?php
                      $counter = 0;
                      while($counter < $countimage-1) {
                    ?>
                        <img class="product_image" id="image1" src="<?=$images[$counter]?>">
                        <?php
                        $counter++;
                      } ?>
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

                        <div id="editCart">
                        <form action="SetAdToEdit.php" method="POST">
                            <button value="<?=$arr[$count]['idads']?>" name="id" id="editAdd" class="hello adds"><img width="8%"
                                    src="../images/cart.png">Edit Add</button>
</form>
                        </div>

                        <div id="deleteCart">
                            <form action = "deleteMyAd.php" method = "POST">
                        <button value="<?=$arr[$count]['idads']?>" name= "id" id="deleteAdd" class=" adds"><img width="8%"
                                    src="../images/cart.png">Delete Add</button>
</form>
                        </div>
                        <!-- <form id="addCart"> -->


                        <!-- </form> -->


                        <!-- <button id = "go_to_cart" class="hidden add_to_cart"><img width="8%" src="images/cart.png"> Go to Cart</button> -->

                    </div>
                </section>
            </div>
        </div>

        <?php
$count++;
      }
?>

    </div>


</body>


</html>
