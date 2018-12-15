<?php

require ("../connect.php");
session_start();

$id = $_SESSION["id"];

if (isset($_POST['id'])) {
    $adminid = $mysqli->real_escape_string($_POST['id']);
  }else{
  die("dont try to mess around bro11 ;)");
  }


  $stmt1 = $mysqli->prepare("DELETE FROM adminusers WHERE idadminusers = ? ");
  $stmt1->bind_param("i",$adminid);
  $stmt1->execute();
  $_SESSION["book_nurse"]=true;

  header("Location: index.php");

?>