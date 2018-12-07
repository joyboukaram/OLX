<html>

<head>
    <title>Place an Ad</title>
    <link rel="stylesheet" href="ad.css">
    <script src="ad.js" defer></script>

    <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
    <meta charset=utf-8 />
</head>

<body>

    <h1>Edit your ad</h1>

    <div id="box">

        <div id="border">
            <form method="POST" action="my_ads.php">
                <input class="input" type="text" placeholder="item name">
                <input class="input" type="number" value="1" min="0" step="0.01" class="currecy">
                <input class="input" type="text" placeholder="description">
                <input class="input" type="text" placeholder="location">
                <select class="input">
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
                    <input class="in"  id = "bla" type='file' multiple onchange="readURL(this);">
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