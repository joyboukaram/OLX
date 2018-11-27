<html>
<?php
session_start();
if(!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] != true)
{
	header("Location:index.php");
}

?>
<head>
    <title>Place an Ad</title>
    <link rel="stylesheet" href="ad.css">
    <script src="ad.js" defer></script>

    <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
    <meta charset=utf-8 />
</head>

<body>

    <h1>Place an ad</h1>

    <div id="box">

        <div id="border">
            <form method="POST" action="upload.php" novalidate="novalidate" enctype="multipart/form-data">
                <input class="input" type="text" name="name" placeholder="item name" required>
                <input class="input" type="number" name="price" value="1" min="0" step="0.01" class="currecy" required>
                <input class="input" type="text" name="description" placeholder="description" required>
                <input class="input" type="text" name="location" placeholder="location" required>
                <select class="input" name="category" required>
                    <option value="accessories">Accessories</option>
                    <option value="cars">Cars</option>
                    <option value="children">Children Gadgets</option>
                    <option value="electronics">Electronics</option>
                    <option value="home">Home and Garden</option>
                    <option value="makeup">Makeup</option>
                    <option value="men">Men's Clothing</option>
                    <option value="sports">Sports and Outdoors</option>
                    <option value="women">Women's Clothing</option>
                    <option value="services">Services</option>
                </select>

                <div class="image-upload">
                    <input class="in"  id = "bla" type='file' name="fileToUpload" multiple onchange="readURL(this);" accept="image/*" required>
                   <br> <img class="in" id="blah" src="#" alt="your image" />

                    <div id="submitBorder">
                        <input id="submit" type="submit" value="Submit">
                    </div>
            </form>

        </div>
    </div>
    </form>
    </div>

    </div>

</body>

</html>