<?php

$servername = "localhost";
$dbname = " if0_37655301_arpitop";
$username = " if0_37655301";
$password = "ARPITOP789";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if(!$conn) {

die(" PROBLEM WITH CONNECTION : " . mysqli_connect_error());

}
  
?>