<?php
require("../connect.php");
session_start();

if (isset($_POST['result'])) {
    $result = $mysqli->real_escape_string($_POST['result']);
}else{
	die("Error");
}

$items =explode(" ",$result);
  $_SESSION["price"] += $items[0];
  $_SESSION["checked"] .=" ". $items[1];


  echo $_SESSION["price"] ;


?>
