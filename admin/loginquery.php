<?php

session_start();
require "../connect.php";

if (isset($_POST['name'])) {
    $name = $mysqli->real_escape_string($_POST['name']);
} else {
    die("error1");
}

if (isset($_POST['password'])) {
    $password = $mysqli->real_escape_string($_POST['password']);
    $password = hash('sha256', $password);
} else {
    die("error2");
}

$stmt = $mysqli->prepare("Select idadminusers From adminusers WHERE username = ? AND password = ?");
$stmt->bind_param("ss", $name, $password);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($id);
$count = $stmt->num_rows;
$stmt->fetch();

if ($count != 0) {
    $_SESSION["logged_inadmin"] = true;
    $_SESSION["id"] = $id;
    header("Location:index.php");
} else {
    $_SESSION["logged_indadmin"] = false;
   header("Location:wrong.php");
}
