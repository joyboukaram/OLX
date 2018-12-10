<?php
require ("../connect.php");
session_start();


 if (isset($_POST['date'])) {
  $date = $mysqli->real_escape_string($_POST['date']);
  if($date != "All"){
  $_SESSION["date"]= $date ;
}
else{
  $_SESSION["date"]= nothing;
  unset($_SESSION["date"]);

}
}

?>
