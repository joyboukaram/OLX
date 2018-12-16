<?php

require("../connect.php");
session_start();

if (isset($_POST['name'])) {
  $name = $mysqli->real_escape_string($_POST['name']);

}else{
  die("Error2");
}

if (isset($_POST['lower_price'])) {
    $lower_price = $mysqli->real_escape_string($_POST['lower_price']);
}else{
  die("Error");
}

if (isset($_POST['seller'])) {
    $seller = $mysqli->real_escape_string($_POST['seller']);
}else{
  die("Error");
}

$stmt = $mysqli->prepare("Select idads From ads WHERE name = ? AND approved=1");
$stmt->bind_param("s", $name);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($temp);
$count = $stmt->num_rows;


if($count == 0){
	$_SESSION["requestprice"] = false;
	header("Location:cart.php");

}else{

  $stmt = $mysqli->prepare("Insert INTO requests(name,price,seller) VALUES(?,?,?) ");
  $stmt->bind_param("sss",$name,$lower_price,$seller);
  $stmt->execute();



  $email = $_SESSION["email"];
  $stmt = $mysqli->prepare("SELECT cart FROM users where email = ? ");
  $stmt->bind_param("s",$email);
  $stmt->execute();
  $stmt->store_result();
  $stmt->bind_result($cart);
  $stmt->fetch();

  $items =explode(" ",$cart);
  $newcart=null;
  for ($x = 0; $x < count($items); $x++) {
    if($items[$x] != $name){
      $newcart.= " " .$items[$x];
    }
  }



  $_SESSION['cart'] =$newcart;

  $_SESSION['delivery'].= " ". $name ;
  $deliveryToUpload = $_SESSION['delivery'];
  $email = $_SESSION["email"];


  $stmt = $mysqli->prepare("Update users set delivery = ? , cart=? where email = ?");
  $stmt->bind_param("sss",$deliveryToUpload ,$newcart,  $email);
  $stmt->execute();

  // $stmt = $mysqli->prepare("Update ads set delivery = 1 where name = ?");
  // $stmt->bind_param("s" ,$result);
  // $stmt->execute();





  header("Location:cart.php");

}
 ?>
