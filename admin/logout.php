<?php
require_once("../connect.php");
session_start();

ob_start();
foreach($_SESSION as $key => $val){
	unset($_SESSION[$key]);
}
session_destroy();

header('Location: login.php');
?>

