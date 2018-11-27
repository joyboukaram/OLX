<?php 
session_start();
ob_start();

foreach($_SESSION as $key => $val) 
{
	unset($_SESSION[$key]);
}
header("Location:adminFirst.php");
?>