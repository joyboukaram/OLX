<?php
require ("../connect.php");

$arr = [];
$count=0;
$stmt = $mysqli->prepare("SELECT * FROM ads");
$stmt->execute();
$result = $stmt->get_result();
while($row = $result->fetch_assoc()) {
  $arr[] = $row;
  $count++;
}
if(!$arr) echo('No rows');
$stmt->close();

?>