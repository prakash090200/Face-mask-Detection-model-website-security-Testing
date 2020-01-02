<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
hello boYS

<?php
/*
session_start();
$con=mysqli_connect('localhost','root','prakash');
$db=mysqli_select_db($con,'prakashk');
$ok=$_SESSION['registration'];
$sql=mysqli_query($con,"select first_name,last_name from studentsignup where Registration_no ='$ok'");
while($row=mysqli_fetch_array($sql,MYSQLI_NUM)){
	echo " ".$ok."(".$row[0]." ".$row[1].")";
}

?>
*/
//<?php
session_start();
  $con=mysqli_connect('localhost','root','prakash');
$db=mysqli_select_db($con,'prakashk');
$ok=$_SESSION['registration'];
$sql=mysqli_query($con,"select * from studentsignup where Registration_no ='$ok' ");
while($row=mysqli_fetch_array($sql)){
	echo " ".$ok."(".$row[0]." ".$row[1].")";
}
?>
</body>
</html>
