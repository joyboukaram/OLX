<html>


<head>
    <title>My Account</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="account.css">
    <script src="account.js" defer></script>
</head>

<body>
    <h1>Your Profile Information</h1>
    <?php

include "getprofile.php" ;

$count=0 ;
while($count < count($arr)){

?>

    <div id="box">

        <div id="profile_pic">

            <img id="avatar" src="../register/<?=$arr[$count]["image"]?>">

        </div>


        <div id="box2">
            <div id="user">
                <p><b>Name: </b><span class="capital">
                        <?=$arr[$count]["firstName"] ." ". $arr[$count]["lastName"] ?> </span></p>
                <p><b>Date of Birth: </b>
                    <?=$arr[$count]["birthdate"] ?>
                </p>
                <p><b>Email: </b>
                    <?=$arr[$count]["email"] ?>
                </p>
                <!-- <p><b>Password</b></p> -->
                <p><b>Billing Information:</b><span class="capital"></span></p>
                <p><b>Shipping Address: </b><span class="capital">
                        <?=$arr[$count]["address"] ?></span></p>

                <a href="../products/my_ads.php">My ads</a>
                <br><br>
                <a href="confirm.php">Edit Profile</a>
            </div>
            <a><input type="image" id="back" src="../images/back_button.png"></a>
            <a id = "goToIndex" href = "../index.php">Go back to homepage</a>
        </div>

        <?php
$count++;
} ?>

    </div>





</body>



</html>
