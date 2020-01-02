<?php 
session_start();
$con=mysqli_connect('localhost','root','prakash');
$db=mysqli_select_db($con,'prakashk');
$r=$_POST['ra'];
echo $r;
?>