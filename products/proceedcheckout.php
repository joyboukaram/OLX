<?php
require("../connect.php");
session_start();

$email = $_SESSION["email"];
$stmt = $mysqli->prepare("SELECT delivery FROM users where email = ? ");
$stmt->bind_param("s",$email);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($delivery);
$stmt->fetch();

if($delivery==null){
  $delivery=$_SESSION["checked"];
}
else{
  $delivery.=$_SESSION["checked"];
}



$stmt = $mysqli->prepare("Update users set delivery = ? , cart=? where email = ?");
$stmt->bind_param("sss",$deliveryToUpload ,$newcart,  $email);
$stmt->execute();

$_SESSION["checked"]=null;


 ?>
