<?php

require ("../connect.php");
session_start();

$errors = array();
$uploadedFiles = array();
$extension = array("jpeg","jpg","png","gif");
$bytes = 1024;
$KB = 1024;
$totalBytes = $bytes * $KB;
$UploadFolder = "uploads";
$finallink= "";

$counter = 0;

foreach($_FILES["files"]["tmp_name"] as $key=>$tmp_name){
    $temp = $_FILES["files"]["tmp_name"][$key];
    $name = $_FILES["files"]["name"][$key];

    if(empty($temp))
    {
        break;
    }

    $counter++;
    $UploadOk = true;

    if($_FILES["files"]["size"][$key] > $totalBytes)
    {
        $UploadOk = false;
        array_push($errors, $name." file size is larger than the 1 MB.");
    }

    $ext = pathinfo($name, PATHINFO_EXTENSION);
    if(in_array($ext, $extension) == false){
        $UploadOk = false;
        array_push($errors, $name." is invalid file type.");
    }

    if(file_exists($UploadFolder."/".$name) == true){
        $UploadOk = false;
        array_push($errors, $name." file is already exist.");
    }

    if($UploadOk == true){
        move_uploaded_file($temp,$UploadFolder."/".$name);
        array_push($uploadedFiles, $name);
    }
}

if($counter>0){
    if(count($errors)>0)
    {
        echo "<b>Errors:</b>";
        echo "<br/><ul>";
        foreach($errors as $error)
        {
            echo "<li>".$error."</li>";
        }
        echo "</ul><br/>";
    }

    if(count($uploadedFiles)>0){
        echo "<b>Uploaded Files:</b>";
        echo "<br/><ul>";
        foreach($uploadedFiles as $fileName)
        {
            echo "<li>".$fileName."</li>";
						$finallink.= $UploadFolder."/".$fileName." ";

        }
        echo "</ul><br/>";

        echo count($uploadedFiles)." file(s) are successfully uploaded.";
    }
}
else{
    echo "Please, Select file(s) to upload.";
}


if (isset($_POST['first_name'])) {
    $first_name = $mysqli->real_escape_string($_POST['first_name']);
}else{
	die("Error3");
}

if (isset($_POST['last_name'])) {
    $last_name = $mysqli->real_escape_string($_POST['last_name']);
}else{
	die("Error3");
}

if (isset($_POST['email'])) {
    $email = $mysqli->real_escape_string($_POST['email']);
}else{
	die("Error");
}
if (isset($_POST['password'])) {
  $pass = $mysqli->real_escape_string($_POST['password']);
  $pass = hash('sha256', $pass);

}else{
  die("Error2");
}

if (isset($_POST['gender'])) {
    $gender = $mysqli->real_escape_string($_POST['gender']);
}else{
	die("Error");
}

if (isset($_POST['address'])) {
    $address = $mysqli->real_escape_string($_POST['address']);
}else{
	die("Error");
}
if (isset($_POST['birthdate'])) {
    $birthdate = $mysqli->real_escape_string($_POST['birthdate']);
}else{
	die("Error");
}

date_default_timezone_set("America/Chicago");
$clock= date("h:i:sa");

$time= '<pre> User Created:'. date('Y-m-d') .$clock."         By: " ;


$stmt = $mysqli->prepare("Select idusers From users WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($temp);
$count = $stmt->num_rows;

if($count != 0){
	$_SESSION["logged_in"] = false;
	header("Location:register.php");

}else{


	$stmt = $mysqli->prepare("Insert INTO users(firstName,lastName,email,password,gender,address,birthdate,image) VALUES(?,?,?,?,?,?,?,?) ");
  $stmt->bind_param("ssssisss",$first_name,$last_name,$email,$pass,$gender,$address,$birthdate,$finallink);
	$stmt->execute();

  $_SESSION["logged_in"] = true;
	$_SESSION["firt_name"] = $first_name;
  $_SESSION["last_name"] = $last_name;
  $_SESSION["cart"] = null;


  $_SESSION["email"] = $email;
header("Location:../home.php");

}


?>
