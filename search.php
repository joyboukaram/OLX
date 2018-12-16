<?php
require("connect.php");
session_start();

if (isset($_POST['search'])) {
    $search = $mysqli->real_escape_string($_POST['search']);
}else{
	die("Error");
}

$_SESSION["search"]= $search;

header("Location:home.php");



 ?>
