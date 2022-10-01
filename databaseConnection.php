<?php
$server = 'localhost';
$username= 'root';
$password = '';
$database='ajaxpractice';
$conn= mysqli_connect($server,$username,$password,$database);

if(!$conn){
  die("connection failed:".mysqli_connect_error());
}
echo "connected successfully";

?>

