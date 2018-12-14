<html>

<head>
    <title>My Account</title>
    <link rel="stylesheet" href="edit_profile.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body>

    <h1>Edit your Information</h1>
    <?php
include "getprofile.php";

$count=0 ;
while($count < count($arr)){

?>

    <form method="POST" action="editprofile.php">
        <input class="input" type="text" placeholder="first name" name="first_name" value='<?=$arr[$count]["firstName"]?>'>
        <input class="input" type="text" placeholder="last name" name="last_name" value='<?=$arr[$count]["lastName"]?>'>
        <input class="input" type="text" placeholder="phone" name="phone">
        <input class="input" type="password" placeholder="Enter new or old password" name="password">
        <select name="gender" class="input" required>
            <option class="gender" <?php if($arr[$count]["gender"]=="0" ) echo "selected" ?> value="0">Male</option>
            <option class="gender" <?php if($arr[$count]["gender"]=="1" ) echo "selected" ?> value="1">Female</option>
        </select>
        <input class="input" type="email" placeholder="email" name="email" value='<?=$arr[$count]["email"]?>'>
        
        <input class="input center" type="date" placeholder="expiry date">
        <input class="input" type="text" placeholder="shipping address" name="address" value='<?=$arr[$count]["address"]?>'>
        <p>Date of birth</p>
        <input class="input center" type="date" name="birthdate" value='<?=$arr[$count]["birthdate"]?>'>

        <input id="submit" type="submit" value="Done">

    </form>

    <?php
  $count++;
} ?>
</body>

</html>