<?php
require("../connect.php");
session_start();

$email = $_SESSION["email"];
$stmt = $mysqli->prepare("SELECT delivery, cart FROM users where email = ? ");
$stmt->bind_param("s",$email);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($delivery , $cart);
$stmt->fetch();

if($delivery==null){
  $delivery=$_SESSION["checked"];
}
else{
  $delivery.=$_SESSION["checked"];
}

$items =explode(" ",$cart);
$items1 =explode(" ",$delivery);

$newcart=null;
for ($x = 0; $x < count($items); $x++) {
  if(check($items1 , $items[$x])==true){


    $newcart.= $items[$x]. " ";
  }
  }

  function check ($delivery , $name){
    foreach ($delivery as $item){
      if ($item == $name){
        return false;
      }

    }
  return true;

  }

  for ($x = 0; $x < count($items1); $x++) {


    $stmt = $mysqli->prepare("Update ads set delivery = 1  where name = ?");
    $stmt->bind_param("s",$items1[$x]);
    $stmt->execute();

    }



$_SESSION["cart"]= $newcart;
$stmt = $mysqli->prepare("Update users set delivery = ? , cart=? where email = ?");
$stmt->bind_param("sss",$delivery ,$newcart,  $email);
$stmt->execute();


$_SESSION["checked"]=null;

header("Location:cart.php");

 ?>
