<?php

require ("../connect.php");
session_start();
$_SESSION["expirylogin"]= time();

if (isset($_POST['email'])) {
    $email = $mysqli->real_escape_string($_POST['email']);
}else{
	die("Error");
}

if (isset($_POST['password'])) {
    $pass = $mysqli->real_escape_string($_POST['password']);
    $pass = hash('sha256', $pass);
}else{
	die("Error");
}


$stmt = $mysqli->prepare("Select * From users WHERE email = ? AND password = ? ");
$stmt->bind_param("ss", $email, $pass);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($temp);
$count = $stmt->num_rows;
$stmt->fetch();

if($count == 0){
	$_SESSION["logged_in"] = false;
	header("Location:index.php");
}else {

  $_SESSION["logged_in"] = true;
	$_SESSION["firt_name"] = $first_name;
  $_SESSION["last_name"] = $last_name;
  $_SESSION['cart'] = array();
  $_SESSION["email"] = $email;

	header("Location:../home.php");

}
?>
