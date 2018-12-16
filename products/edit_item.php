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

    <?php
include 'getAdToEdit.php';
$count=0 ;
while($count < count($arr)){
$images = explode(" " ,$arr[$count]['image']);
$countimage = count($images);
//	echo $countimage;


?>
    <div id="box">

        <div id="border">
            <form method="POST" action="editad.php" novalidate="novalidate" enctype="multipart/form-data" name="formUploadFile">
                <input class="input" type="text" placeholder="item name" value="<?=$arr[$count]["name"]?>" name="name">
                <input class="input" type="number"  value="<?=$arr[$count]["price"]?>" min="0" step="0.01" name="price" class="currecy">
                <input class="input" type="text" value="<?=$arr[$count]["description"]?>" name="description" placeholder="description">
                <input class="input" type="text" value="<?=$arr[$count]["location"]?>" name="location" placeholder="location">
                <select name="category" class="input">
                    <option value="accessories" <?php if($arr[$count]["categorie"]=="accessories" ) echo "selected" ?>>Accessories</option>
                    <option value="cars"  <?php if($arr[$count]["categorie"]=="cars" ) echo "selected" ?>>Cars</option>
                    <option value="children"  <?php if($arr[$count]["categorie"]=="children" ) echo "selected" ?>>Children Gadgets</option>
                    <option value="electronics"  <?php if($arr[$count]["categorie"]=="electronics" ) echo "selected" ?>>Electronics</option>
                    <option value="home"  <?php if($arr[$count]["categorie"]=="home" ) echo "selected" ?>>Home and Garden</option>
                    <option value="makeup"  <?php if($arr[$count]["categorie"]=="makeup" ) echo "selected" ?>>Makeup</option>
                    <option value="men"  <?php if($arr[$count]["categorie"]=="men" ) echo "selected" ?>>Men's Clothing</option>
                    <option value="sports"  <?php if($arr[$count]["categorie"]=="sports" ) echo "selected" ?>>Sports and Outdoors</option>
                    <option value="women"  <?php if($arr[$count]["categorie"]=="women" ) echo "selected" ?>>Women's Clothing</option>
                    <option value="services"  <?php if($arr[$count]["categorie"]=="services" ) echo "selected" ?>>Services</option>
                </select>
                <div class="image-upload">
                    <input class="in" id="bla" type='file' name="files[]" multiple onchange="readURL(this);" accept="image/*"
                        required>
                <br>

                    <?php
                    $counter = 0;
                    while($counter < $countimage-1) {
                      ?>
                      <img width="200px" height="200px"  class="product_image in" id="blah" src="<?=$images[$counter]?>"> <br>
                      <?php
                      $counter++;
                    }

                  $count++;
                  }
                   ?>
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
