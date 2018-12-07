<?php
require("../connect.php");
session_start();
$email = $_SESSION["email"];


$stmt = $mysqli->prepare("SELECT * FROM users where email = ?");
$stmt->bind_param("s",$email);
$stmt->execute();
$result = $stmt->get_result();
while($row = $result->fetch_assoc()) {
  $arr[] = $row;
  break;
}

$stmt->close();


?>
