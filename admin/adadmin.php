<?php

require ("../connect.php");
session_start();


if (isset($_POST['username'])) {
    $username = $mysqli->real_escape_string($_POST['username']);
}else{
	die("Error3");
}


if (isset($_POST['name'])) {
    $name = $mysqli->real_escape_string($_POST['name']);
}else{
	die("Error");
}
if (isset($_POST['password'])) {
  $pass = $mysqli->real_escape_string($_POST['password']);
  $pass = hash('sha256', $pass);

}else{
  die("Error2");
}



$stmt = $mysqli->prepare("Select idadminusers From adminusers WHERE username = ?");
$stmt->bind_param("s", $username);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($temp);
$count = $stmt->num_rows;

if($count != 0){
	$_SESSION["logged_in"] = false;
	header("Location:index.php");

}else{


	$stmt = $mysqli->prepare("Insert INTO adminusers(username,name,password) VALUES(?,?,?) ");
  $stmt->bind_param("sss",$username,$name,$pass);
	$stmt->execute();

header("Location:index.php");

}


?>
