<?php

require ("../connect.php");
session_start();

$id = $_SESSION["id"];

if (isset($_POST['email'])) {
    $email = $mysqli->real_escape_string($_POST['email']);
  }else{
  die("dont try to mess around bro11 ;)");
  }

$stmt = $mysqli->prepare("Select idusers from users where email = ?");
  $stmt->bind_param("s", $email);
  $stmt->execute();
  $stmt->store_result();
  $stmt->bind_result($userid);
  $stmt->fetch();

  $stmt1 = $mysqli->prepare("DELETE FROM users WHERE idusers = ? ");
  $stmt1->bind_param("i",$userid);
  $stmt1->execute();
  $_SESSION["users"]=true;

  header("Location: users.php");

?>