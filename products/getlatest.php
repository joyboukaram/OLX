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

  if(!isset($_SESSION['search']) || $_SESSION['search'] == null ){
    $stmt = $mysqli->prepare("SELECT * FROM ads where approved=1");

  }
  else{
    $stmt = $mysqli->prepare("SELECT * FROM ads where name=? AND approved=1");
    $stmt->bind_param("s",$_SESSION["search"]);
  }


    $arr = [];
    $stmt->execute();
    $result = $stmt->get_result();
    while($row = $result->fetch_assoc()) {
 if (check($items , $row["name"]) == true){
    $arr[] = $row;
  }
}


function check ($cart , $name){
  foreach ($cart as $item){
    if ($item == $name){
      return false;
    }

  }
return true;

}




  $stmt->close();






?>
