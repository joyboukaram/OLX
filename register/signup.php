<?php

require ("../connect.php");
session_start();


if (isset($_POST['first_name'])) {
    $first_name = $mysqli->real_escape_string($_POST['first_name']);
}else{
	die("Error3");
}

if (isset($_POST['last_name'])) {
    $last_name = $mysqli->real_escape_string($_POST['last_name']);
}else{
	die("Error3");
}

if (isset($_POST['email'])) {
    $email = $mysqli->real_escape_string($_POST['email']);
}else{
	die("Error");
}
if (isset($_POST['password'])) {
  $pass = $mysqli->real_escape_string($_POST['password']);
  $pass = hash('sha256', $pass);

}else{
  die("Error2");
}

if (isset($_POST['gender'])) {
    $gender = $mysqli->real_escape_string($_POST['gender']);
}else{
	die("Error");
}

if (isset($_POST['address'])) {
    $address = $mysqli->real_escape_string($_POST['address']);
}else{
	die("Error");
}
if (isset($_POST['birthdate'])) {
    $birthdate = $mysqli->real_escape_string($_POST['birthdate']);
}else{
	die("Error");
}

date_default_timezone_set("America/Chicago");
$clock= date("h:i:sa");

$time= '<pre> User Created:'. date('Y-m-d') .$clock."         By: " ;


$stmt = $mysqli->prepare("Select idusers From users WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($temp);
$count = $stmt->num_rows;

if($count != 0){
	$_SESSION["credentials"] = false;
	header("Location:register.php");

}else{


	$stmt = $mysqli->prepare("Insert INTO users(firstName,lastName,email,password,gender,address,birthdate) VALUES(?,?,?,?,?,?,?) ");
  $stmt->bind_param("ssssiss",$first_name,$last_name,$email,$pass,$gender,$address,$birthdate);
	$stmt->execute();

  $_SESSION["logged_in"] = true;
	$_SESSION["firt_name"] = $first_name;
  $_SESSION["last_name"] = $last_name;
$_SESSION["credentials"] = true;
header("Location:../home.php");

}


?>
