<?php

require ("../connect.php");
session_start();
$_SESSION["expirylogin"]= time();

if (isset($_POST['username'])) {
    $username = $mysqli->real_escape_string($_POST['username']);
}else{
	die("Error1");
}

if (isset($_POST['password'])) {
    $pass = $mysqli->real_escape_string($_POST['password']);
    $pass = hash('sha256', $pass);
}else{
	die("Error2");
}


$stmt = $mysqli->prepare("Select idadminusers From adminusers WHERE username = ? AND password = ? ");
$stmt->bind_param("ss", $username, $pass);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($temp);
$count = $stmt->num_rows;
$stmt->fetch();

if($count == 0){
	$_SESSION["logged_inAdmin"] = false;
	header("Location:login.html");
}else {

  $_SESSION["logged_inAdmin"] = true;
  $_SESSION["id"]= $temp;


	header("Location:admin.php");

}
?>
