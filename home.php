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
    <link rel="stylesheet" href="products/modal.css">
    <link rel="stylesheet" href="products/product.css">
    <script src="home.js" defer></script>
    <script src = "products/modal.js" defer></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js" defer></script>
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
            <form method = "GET" action = "Signout.php">
                <input id = "submit_logout" type = "submit" value="Logout">
            </form>
        </div>

    </nav>

    <h1>Welcome <span id = "name"><?=$_SESSION["firt_name"]?> <?=$_SESSION["last_name"]?></span></h1>


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
					<?php
include 'products/getads.php';
$count=0 ;
while($count < count($arr)){

?>
            <img onclick="document.getElementById('<?=$arr[$count]['name']?>').style.display='block'" class="items" src="products/<?=$arr[$count]['image']?>">

<div id="<?=$arr[$count]['name']?>" class="modal">

<!-- Modal content -->
<div class="modal-content">
  <span onclick="document.getElementById('<?=$arr[$count]['name']?>').style.display = 'none' " class="close">&times;</span>
  <section id="modalbox">
      <div id="images_grid">
          <img class="product_image" id="image1" src="products/<?=$arr[$count]['image']?>">
          <img class="product_image" id="image2" src="products/<?=$arr[$count]['image']?>">
      </div>
      <div id="details">
      <h2 id = "item_added" class = "hidden">Item added!</h2>
          <h3 class = "h3modal"><i>Name:</i> <?=$arr[$count]['name']?></h3>
          <h3 class = "h3modal"><i>Price:</i><?=$arr[$count]['price']?></h3>
          <h3 class = "h3modal"><i>Category</i> <?=$arr[$count]['categorie']?></h3>
          <h3 class = "h3modal"><i>Location:</i> <?=$arr[$count]['location']?></h3>
          <h3 class = "h3modal"><i>Description:</i></h3>
          <ul>
              <?=$arr[$count]['description']?>
          </ul>
          <h3 class = "h3modal"><i>Seller:</i> <?=$arr[$count]['seller']?></h3>
          <!-- <form id="addCart"> -->


              <button value="<?=$arr[$count]['name']?>" id= "addtocart" class="hello add_to_cart"><img width="8%" src="images/cart.png"> Add to Cart</button>
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
