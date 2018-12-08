<html>

<head>
    <title>Welcome!</title>
    <link rel="stylesheet" href="index.css" />
    <script src="index.js" defer></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/normalize.css">
<link rel="stylesheet" href="css/main.css">
<script src="js/vendor/modernizr-2.6.2.min.js"></script>
    <style type="text/css">
		.back-link a {
			color: #4ca340;
			text-decoration: none;
			border-bottom: 1px #4ca340 solid;
		}

		.back-link a:hover,
		.back-link a:focus {
			color: #408536;
			text-decoration: none;
			border-bottom: 1px #408536 solid;
		}

		h1 {
			height: 100%;
			/* The html and body elements cannot have any padding or margin. */
			margin: 0;
			font-size: 14px;
			font-family: 'Open Sans', sans-serif;
			font-size: 32px;
			margin-bottom: 3px;
		}

		.entry-header {
			text-align: left;
			margin: 0 auto 50px auto;
			width: 80%;
			max-width: 978px;
			position: relative;
			z-index: 10001;
		}

	</style>
</head>


<div class = "demo">
	<div id="demo-content">
		<div id="loader-wrapper">
			<div id="loader"></div>

			<div class="loader-section section-left"></div>
			<div class="loader-section section-right"></div>

        </div>
        
    </div>

</div>

</div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>
    window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')
</script>
<script src="js/main.js"></script>
    
        <body>

    <header>
    Made by Joy & Joseph
    <span id="head">
        <a href="./login/login.php">Sign in</a>
        /
       <a href="login/login.php"> <img class="icons" id = "shopping_cart" src="images/shopping_cart.png"></a>
        /
        <img class="icons" id = "searchpic" src="images/search.png">
    </span>

</header>

<nav>
    <a href="index.php"><img id="logo" src="images/olx.png" /></a>

    <form method="GET" action="search/search.php">
        <input id="search" type="text" placeholder="Search for your item...">
        <input id="submit" type="submit" value="Search">
    </form>

    <button id="ad">+ Place an ad</button>

    <div id="nav">
        <a href="">Home</a>
        <a href="login/login.php">Shop</a>
        <a href="./contact.php">Contact</a>
    </div>

</nav>



<div class="slideshow-container">

    <div class="mySlides fade">
        <div class="numbertext">1 / 4</div>
        <img src="images/veloster.jpg" style="width:100%">

    </div>


    <div class="mySlides fade">
        <div class="numbertext">2 / 4</div>
        <img src="images/tv.jpg" style="width:100%">

    </div>


    <div class="mySlides fade">
        <div class="numbertext">3 / 4</div>
        <img src="images/oven.png" style="width:100%">

    </div>

    <div class="mySlides fade">
        <div class="numbertext">4 / 4</div>
        <img src="images/laptop.png" style="width:100%">

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
