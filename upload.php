<?php
session_start();
$con=mysqli_connect('localhost','root','prakash');
$db=mysqli_select_db($con,'prakashk');
$attendance=$_POST['at'];
$marks=$_POST['mk'];
$reg=$_REQUEST['rad'];
$sq=mysqli_query($con,"update  studentsignup set Attendance='$attendance' where Registration_no='$reg' " );
$sql=mysqli_query($con,"update  studentsignup set marks='$marks' where Registration_no='$reg' " );

header('location:faculty_welcome_page.php');
?>