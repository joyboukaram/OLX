<?php

require ("../connect.php");
session_start();

if (isset($_POST['usernameToDelete'])) {
    $username = $mysqli->real_escape_string($_POST['usernameToDelete']);
}else{
	die("Error1");
}



$stmt = $mysqli->prepare("Select idusers From users WHERE username = ?");
$stmt->bind_param("s", $username);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($id);
$count = $stmt->num_rows;

if($count == 0){
	$_SESSION["deleteUser"] = false;
	header("Location:admin.php");

}else{

	$stmt = $mysqli->prepare("DELETE FROM users WHERE username = ?");
  	$stmt->bind_param("s",$username);
	$stmt->execute();
	$_SESSION["deleteUser"] = true;
  	header("Location:admin.php");
}
?>
