<?php
require ("../connect.php");


$email = $_SESSION["email"];
$stmt = $mysqli->prepare("SELECT cart FROM users where email = ? ");
$stmt->bind_param("s",$email);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($cart);
$stmt->fetch();

$items =explode(" ",$cart);

$arr = [];

foreach($items as $item){

  $stmt = $mysqli->prepare("SELECT * FROM ads where name = ?");
  $stmt->bind_param("s",$item);
  $stmt->execute();
  $result = $stmt->get_result();
  while($row = $result->fetch_assoc()) {
    $arr[] = $row;
  }

  $stmt->close();




}

?>
