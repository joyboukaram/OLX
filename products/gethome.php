<?php
require ("../connect.php");

//$email = $_SESSION["email"];
$stmt = $mysqli->prepare("SELECT cart FROM users where email = ?");

$stmt->bind_param("s",$email);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($cart);
$stmt->fetch();

$items =explode(" ",$cart);

foreach($items as $item){



  $arr = [];
  if(isset($_SESSION['price']) && $_SESSION['price'] == "low" )
  {
  $stmt = $mysqli->prepare("SELECT * FROM ads where categorie='home' order by price");
} else if(isset($_SESSION['price']) && $_SESSION['price'] == "high" ){
  $stmt = $mysqli->prepare("SELECT * FROM ads where categorie='home' order by price desc");
}
  else if(isset($_SESSION['date']) && $_SESSION['date'] == "old" ){
    $stmt = $mysqli->prepare("SELECT * FROM ads where categorie='home' order by idads");
  }  else if(isset($_SESSION['date']) && $_SESSION['date'] == "new" ){
      $stmt = $mysqli->prepare("SELECT * FROM ads where categorie='home' order by idads desc");
    }
else{
  $stmt = $mysqli->prepare("SELECT * FROM ads where categorie= 'home'");
}
  $stmt->execute();
  $result = $stmt->get_result();
  while($row = $result->fetch_assoc()) {
  if($row["name"] != $item)
    $arr[] = $row;
  }

  $stmt->close();
}



?>
