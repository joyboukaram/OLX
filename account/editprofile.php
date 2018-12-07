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
	die("Error2342");
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
	die("Erroreew");
}

if (isset($_POST['address'])) {
    $address = $mysqli->real_escape_string($_POST['address']);
}else{
	die("Errorffw");
}
if (isset($_POST['birthdate'])) {
    $birthdate = $mysqli->real_escape_string($_POST['birthdate']);
}else{
	die("Errorew");
}

date_default_timezone_set("America/Chicago");
$clock= date("h:i:sa");

$time= '<pre> User Created:'. date('Y-m-d') .$clock."         By: " ;

$email = $_SESSION["email"];
	$stmt = $mysqli->prepare("Update users SET firstName= ? , lastName=? , password=?,gender=?,address=?,birthdate=?  where email = ?");
  $stmt->bind_param("ssssiss",$first_name,$last_name,$pass,$gender,$address,$birthdate,$email);
	$stmt->execute();

  $_SESSION["logged_in"] = true;
	$_SESSION["firt_name"] = $first_name;
  $_SESSION["last_name"] = $last_name;

  $_SESSION["email"] = $email;
header("Location:../home.php");




?>
