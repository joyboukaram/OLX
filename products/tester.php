<?php

require("../connect.php");
$arr = [];
$stmt = $mysqli->prepare("SELECT * FROM ads order by price");
$stmt->execute();
$result = $stmt->get_result();
while($row = $result->fetch_assoc()) {
  $arr[] = $row;
  echo $row["name"];
}

$stmt->close();



 ?>
