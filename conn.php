<?php
$error="";
$link= mysqli_connect("localhost","root","","educot");
if (mysqli_connect_error()){
    die("Connection failed: ".$link->connect_error);
}
if (mysqli_connect_errno())
  {
  $error= "Failed to connect to MySQL: " . mysqli_connect_error();
  die();
  }
?>