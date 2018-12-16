<?php
require ("../connect.php");
session_start();

$id = $_SESSION["adtoedit"];

$arr = [];
$stmt = $mysqli->prepare("SELECT * FROM ads where idads= ?");
$stmt->bind_param("i",$id);
$stmt->execute();
$result = $stmt->get_result();
while($row = $result->fetch_assoc()) {
  $arr[] = $row;
}

$stmt->close();

 ?>
