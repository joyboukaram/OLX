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
echo $finallink ;


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

  if (isset($_POST['hidecontact'])) {
      $hidecontact = $mysqli->real_escape_string($_POST['hidecontact']);
  }else{
    die("Error");
  }


$email= $_SESSION["email"];
  $stmt = $mysqli->prepare("Insert INTO ads(name,price,description,location,categorie,image,seller,hideContact) VALUES(?,?,?,?,?,?,?,?) ");
  $stmt->bind_param("sssssssi",$name,$price,$description,$location,$category,$finallink,$email,$hidecontact);
  $stmt->execute();

	$_SESSION["done"] = true;
  header("Location:../home.php");


?>
