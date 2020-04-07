<?php
session_start();
$ok=$_POST['reg'];
$new=$_POST['pass'];
$con=mysqli_connect('localhost','root','prakash');
$db=mysqli_select_db($con,'prakashk');
$sql=mysqli_query($con," update studentsignup set password='$new' where Registration_no ='$ok' ");
header('location:login.php');
?>