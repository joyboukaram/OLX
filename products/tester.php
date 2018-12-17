<?php

require ("../connect.php");
session_start();

if (isset($_POST['result'])) {
    $result = $mysqli->real_escape_string($_POST['result']);
}else{
	die("Error");
}

$email = $_SESSION["email"];
$stmt = $mysqli->prepare("SELECT cart FROM users where email = ?");
$stmt->bind_param("s",$email);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($cart);
$stmt->fetch();



// if(!is_array($_SESSION['cart']))
//   {
//     $_SESSION['cart'] = array();
//     array_push($_SESSION['cart'], $result);
//   }
//
//   else{
// array_push($_SESSION['cart'], $result);
// }
if($cart== null){
$cart= $result ;
}
else{
  $cart.= " ". $result ;

}

// $email="joseph@gmail.com" ;
// $cartToUpload = "tett" ;

$stmt = $mysqli->prepare("Update users set cart = ? where email = ?");
$stmt->bind_param("ss",$cart , $email);
$stmt->execute();




 ?>
