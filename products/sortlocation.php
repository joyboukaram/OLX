<?php
require ("../connect.php");
session_start();


 if (isset($_POST['location'])) {
  $location = $mysqli->real_escape_string($_POST['location']);
  if($location != "All"){
  $_SESSION["location"]= $location ;
}
else{
  $_SESSION["location"]= nothing;
  unset($_SESSION["location"]);

}
}

?>
