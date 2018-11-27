<?php

require ("connect.php");
session_start();

if (isset($_POST['result'])) {
    $result = $mysqli->real_escape_string($_POST['result']);
}else{
	die("Error");
}

$cart = $_SESSION["cart"];
array_push($cart, $result);
$_SESSION["cart"] =$cart;

 ?>
