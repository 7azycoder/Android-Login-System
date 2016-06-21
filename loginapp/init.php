<?php
$host = "localhost";
$user = "lovepreet7";
$password = "lovepreet";
$dbname = "userdb";

$con = mysqli_connect($host,$user,$password,$dbname);

if(!$con)
{
  //die("Error in database connection" . mysqli_connect_error());
}
else {
  //echo "Database connection Success ...";
}
 ?>
