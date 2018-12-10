<?php
require ("../connect.php");

$email = $_SESSION["email"];

  $stmt = $mysqli->prepare("SELECT cart FROM users where email = ?");
  $stmt->bind_param("s",$email);
  $stmt->execute();
  $stmt->store_result();
  $stmt->bind_result($cart);
  $stmt->fetch();

  $items =explode(" ",$cart);

  foreach($items as $item){



    $arr = [];
    $stmt = $mysqli->prepare("SELECT * FROM ads");
    $stmt->execute();
    $result = $stmt->get_result();
    while($row = $result->fetch_assoc()) {
    if($row["name"] != $item)
      $arr[] = $row;
    }

    $stmt->close();
  }






?>
