<?php
require ("../connect.php");

$arr = [];
$stmt = $mysqli->prepare("SELECT * FROM users");
$stmt->execute();
$result = $stmt->get_result();
while($row = $result->fetch_assoc()) {
  $arr[] = $row;
}
if(!$arr) echo('No rows');
$stmt->close();

?>
