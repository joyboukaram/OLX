<?php

require ("connect.php");
session_start();

if (isset($_POST['result'])) {
    $result = $mysqli->real_escape_string($_POST['result']);
}else{
	die("Error");
}


// if(!is_array($_SESSION['cart']))
//   {
//     $_SESSION['cart'] = array();
//     array_push($_SESSION['cart'], $result);
//   }
//
//   else{
// array_push($_SESSION['cart'], $result);
// }
if($_SESSION['cart']== null || $_SESSION['cart']== ""){
  $_SESSION['cart']= $result ;

}
else{
  $_SESSION['cart'].= " ". $result ;

}
$cartToUpload = $_SESSION['cart'];
echo $cartToUpload ;
$email = $_SESSION["email"];

// $email="joseph@gmail.com" ;
// $cartToUpload = "tett" ;

$stmt = $mysqli->prepare("Update users set cart = ? where email = ?");
$stmt->bind_param("ss",$cartToUpload , $email);
$stmt->execute();




 ?>
