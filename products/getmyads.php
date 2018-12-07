<?php
require ("../connect.php");
session_start();
$email = $_SESSION["email"];


  $arr = [];
  $stmt = $mysqli->prepare("SELECT * FROM ads where seller= ?");
  $stmt->bind_param("s",$email);
  $stmt->execute();
  $result = $stmt->get_result();
  while($row = $result->fetch_assoc()) {
    $arr[] = $row;
  }

  $stmt->close();




?>
