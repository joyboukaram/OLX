<?php

require ("connect.php");
session_start();

if (isset($_POST['result'])) {
    $result = $mysqli->real_escape_string($_POST['result']);
}else{
	die("Error");
}


if(!is_array($_SESSION['cart']))
  {
    $_SESSION['cart'] = array();
    array_push($_SESSION['cart'], $result);
  }

  else{
array_push($_SESSION['cart'], $result);
}





 ?>
