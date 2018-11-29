<?php
require("../connect.php");
session_start();

if (isset($_POST['result'])) {
    $result = $mysqli->real_escape_string($_POST['result']);
}else{
	die("Error");
}

  $_SESSION["price"] +=$result ;
  echo $_SESSION["price"] ;











 ?>
