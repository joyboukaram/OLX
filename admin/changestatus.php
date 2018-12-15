<?php

require ("../connect.php");
session_start();

$id = $_SESSION["id"];

if (isset($_POST['username'])) {
    $username = $mysqli->real_escape_string($_POST['username']);
  }else{
  die("dont try to mess around bro11 ;)");
  }

  echo $username;

$stmt = $mysqli->prepare("Select idads from ads where name = ?");
  $stmt->bind_param("s", $username);
  $stmt->execute();
  $stmt->store_result();
  $stmt->bind_result($idads);
  $stmt->fetch();

  $stmt1 = $mysqli->prepare("UPDATE ads SET status = 1 WHERE idads = ? ");
  $stmt1->bind_param("i",$idads);
  $stmt1->execute();
  $_SESSION["update_ads"]=true;

  header("Location: ads.php");

?>