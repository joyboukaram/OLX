<?php
require ("../connect.php");
session_start();

if (isset($_POST['id'])) {
    $id = $mysqli->real_escape_string($_POST['id']);
}else{
	die("Error1");
}
$email = $_SESSION["email"];



$stmt = $mysqli->prepare("Select name From ads WHERE idads= ? AND seller = ?");
$stmt->bind_param("is",$id,$email);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($name);
$count = $stmt->num_rows;
echo "$name";

if($count == 0){
//	$_SESSION["deleteAd"] = false;
	header("Location:my_ads.php.php");

}else{
   $_SESSION["adtoedit"]= $id;
  	header("Location:edit_item.php");
}


?>
