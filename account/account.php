<html>


<head>
    <title>My Account</title>
    <link rel="stylesheet" href="account.css">
    <script src = "account.js" defer></script>
</head>

<body>
    <h1>Your Profile Information</h1>

    <div id="box">

        <div id="profile_pic">

            <img id="avatar" src="../images/avatar.png">

        </div>
<?php

include "getprofile.php" ;

$count=0 ;
while($count < count($arr)){

?>

        <div id="box2">
            <div id="user">
                <p><b>Name:</b><?=$arr[$count]["firstName"] ." ". $arr[$count]["lastName"] ?>  </p>
                <p><b>Age:</b></p>
                <p><b>Date of Birth:</b><?=$arr[$count]["birthdate"] ?> </p>
                <p><b>Email:</b><?=$arr[$count]["email"] ?> </p>
                <!-- <p><b>Password</b></p> -->
                <p><b>Billing Information:</b></p>
                <p><b>Shipping Address:</b></p>

                <a href="../products/my_ads.php">My ads</a>
                <br><br>
                <a href="confirm.php">Edit Profile</a>
            </div>
            <a><input type="image" id="back" src="../images/back_button.png"></a>
        </div>

<?php
$count++;
} ?>

    </div>





</body>



</html>
