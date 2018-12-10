<?php
require ("../connect.php");
session_start();


 if (isset($_POST['price'])) {
  $price = $mysqli->real_escape_string($_POST['price']);
  if($price != "All"){
  $_SESSION["price"]= $price ;
}
else{
  $_SESSION["price"]= nothing;
  unset($_SESSION["price"]);

}
}

?>
