<?php
$servername = "localhost";
$username = "root";
// "id18834945_back_end"; //"root" for local or xampp
$password = "";
//"<HFwrpy$85/]JSJA"; //"" for local or xampp
$dbname = "id18834945_mcc_lms";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
?>
