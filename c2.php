
<?php
session_start();
$con=mysqli_connect('localhost','root','prakash');
$db=mysqli_select_db($con,'prakashk');
$un=$_POST['reg'];
$ps=$_POST['pass'];
$b="select * from studentsignup where Registration_no='$un' && password='$ps'";
$check=mysqli_query($con,$b);
$num=mysqli_num_rows($check);
if($num==1){
	$_SESSION['registration']=$un;
   header('location:welcome.php');
   }
else
{
	header('location:sign.php');
}
?>

