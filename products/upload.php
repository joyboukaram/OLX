<?php
require ("../connect.php");
session_start();

// if (isset($_POST['fileToUpload'])) {
// 		$fileToUpload = $mysqli->real_escape_string($_POST['fileToUpload']);
// }else{
// 	die("Error3");
// }
//
// $filesToUpload = explode (" " , $fileToUpload);
//



$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

// Check if image file is a actual image or fake image

$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
if($check !== false) {

	$uploadOk = 1;
} else {
	echo "File is not an image.";
	$uploadOk = 0;
}

// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 100000000000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "JPG" && $imageFileType != "png" && $imageFileType != "PNG" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
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

$id= 1;
  $stmt = $mysqli->prepare("Insert INTO ads(name,price,description,location,categorie,image,users_idusers) VALUES(?,?,?,?,?,?,?) ");
  $stmt->bind_param("ssssssi",$name,$price,$description,$location,$category,$target_file,$id);
  $stmt->execute();
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        $_SESSION["done"] = true;
				header("Location:../home.php");
      }


?>
