<?php
require ("../connect.php");
session_start();

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
if($check !== false) {

	$uploadOk = 1;
} else {
	echo "File is not an image.";
	$uploadOk = 0;
}

if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}

if ($_FILES["fileToUpload"]["size"] > 100000000000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}

if($imageFileType != "JPG" && $imageFileType != "png" && $imageFileType != "PNG" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}


if ($uploadOk == 0) {
echo "here";
  }



  if (isset($_POST['name'])) {
      $name = $mysqli->real_escape_string($_POST['name']);
  }else{
  	die("Error3");
  }

  if (isset($_POST['price'])) {
      $price = $mysqli->real_escape_string($_POST['price']);
  }else{
  	die("Error3");
  }

  if (isset($_POST['description'])) {
      $description = $mysqli->real_escape_string($_POST['description']);
  }else{
  	die("Error");
  }
  if (isset($_POST['location'])) {
    $location = $mysqli->real_escape_string($_POST['location']);

  }else{
    die("Error2");
  }

  if (isset($_POST['category'])) {
      $category = $mysqli->real_escape_string($_POST['category']);
  }else{
  	die("Error");
  }

$email= $_SESSION["email"];
  $stmt = $mysqli->prepare("Insert INTO ads(name,price,description,location,categorie,image,seller) VALUES(?,?,?,?,?,?,?) ");
  $stmt->bind_param("sssssss",$name,$price,$description,$location,$category,$target_file,$email);
  $stmt->execute();
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        $_SESSION["done"] = true;
				header("Location:../home.php");
      }


?>
