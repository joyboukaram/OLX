<?php
require ("../connect.php");


$email= $_SESSION["email"];
$arr = [];
$count=0;
$stmt = $mysqli->prepare("SELECT * FROM requests WHERE seller= ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();
while($row = $result->fetch_assoc()) {
  $arr[] = $row;
  $count++;
}
if(!$arr) echo('');
$stmt->close();

?>
