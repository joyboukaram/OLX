<?php
require("../connect.php");

session_start();



if (isset($_POST['name'])) {
  $name = $mysqli->real_escape_string($_POST['name']);

}else{
  die("Error2");
}

if (isset($_POST['price'])) {
    $price = $mysqli->real_escape_string($_POST['price']);
}else{
  die("Error");
}


$stmt = $mysqli->prepare("Select idrequests From requests WHERE name = ? AND price=?");
$stmt->bind_param("si", $name , $price);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($id);
$count = $stmt->num_rows;
$stmt->fetch();

if($count == 0){
	$_SESSION["faileddelete"] = false;
	header("Location:requests.php");

}else{

  $stmt = $mysqli->prepare("Update ads set delivery = 1 , price=?  where name = ?");
  $stmt->bind_param("is" ,$price, $name);
  $stmt->execute();


	$stmt = $mysqli->prepare("DELETE FROM requests WHERE idrequests = ?  ");
  $stmt->bind_param("i",$id);
	$stmt->execute();

  header("Location:requests.php");
}
 ?>
