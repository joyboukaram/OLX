<?php

require ("../connect.php");
session_start();

if (isset($_POST['result'])) {
    $result = $mysqli->real_escape_string($_POST['result']);
}else{
	die("Error");
}

$email = $_SESSION["email"];
$stmt = $mysqli->prepare("SELECT cart , delivery FROM users where email = ? ");
$stmt->bind_param("s",$email);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($cart , $delivery);
$stmt->fetch();



if($delivery==null){
  $delivery=$_SESSION["checked"];
}
else{
  $delivery.=$_SESSION["checked"];
}

$items =explode(" ",$cart);
$newcart=null;
for ($x = 0; $x < count($items); $x++) {
  if($items[$x] != $result){
    $newcart.= " " .$items[$x];
  }
}



$_SESSION['cart'] =$newcart;

$_SESSION['delivery'].= " ". $result ;
$deliveryToUpload = $_SESSION['delivery'];
$email = $_SESSION["email"];

// $email="joseph@gmail.com" ;
// $deliveryToUpload = "tett" ;

$stmt = $mysqli->prepare("Update users set delivery = ? , cart=? where email = ?");
$stmt->bind_param("sss",$deliveryToUpload ,$newcart,  $email);
$stmt->execute();

$stmt = $mysqli->prepare("Update ads set delivery = 1 where name = ?");
$stmt->bind_param("s" ,$result);
$stmt->execute();


 ?>
