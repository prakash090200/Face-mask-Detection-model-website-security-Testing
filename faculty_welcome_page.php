<!DOCTYPE html>
<html>
<head>
  <title>marks</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <style type="text/css">
  h1 {
	text-align: center;
	font-family: 'Roboto', sans-serif;
}
.head, 
.left_arm, 
.torso, 
.right_arm, 
.left_leg, 
.right_leg {
	 background-color:green;
}

.head { 
	width: 200px; 
	margin: 0 auto; /* keep it in the center*********/
	height: 150px; 
	border-radius: 200px 200px 0 0; 
	margin-bottom: 10px;
} 
.head:hover {
	width: 300px;
    transition: 1s ease-in-out;
}


.upper_body { 
	width: 300px; 
	height: 150px;/*upper body had been set to a limitation of height as 150px but torso has been taken as 200 means upper body put a limitation to 150 means out of 200 px in torso 50 part can be used by lower body part*/
	display: flex; /* this will keep the arm torso in one line with overall width and height as mention i.e 300px and 150 px*/
	margin:0 auto;
} 

.left_arm, .right_arm { 
	width: 40px; 
	height: 125px;
	border-radius: 100px; 
} 

.left_arm { 
	margin-right: 10px; 
} 

.right_arm { 
	margin-left: 10px; 
} 

.torso { 
	width: 200px; 
	height: 200px;
	border-radius: 0 0 50px 50px; 
} 
.lower_body { 
	width: 200px; 
	height: 200px;
	display:flex;/* This is another useful property. Hmm what do you think it does?*/
	margin: 0 auto;

} 

.left_leg,.right_leg { 
	background-color:green;
	width: 40px; 
	height: 120px;
	border-radius: 0 0 100px 100px; 
} 

.left_leg { 
	margin-left: 30px; 
} 

.left_leg:hover {
	-webkit-transform: rotate(20deg);
    -moz-transform: rotate(20deg);
    -o-transform: rotate(20deg);
    -ms-transform: rotate(20deg);
    transform: rotate(20deg);
}

.right_leg { 
	margin-left: 60px; 
}

.left_eye, .right_eye { 
	width: 20px; 
	height: 20px; 
	border-radius: 15px; 
	background-color: white;  
} 

.left_eye { 
	/* These properties are new and you haven't encountered
	in this course. Check out CSS Tricks to see what it does! */
	position: relative;          /***********/
	top: 100px; 
	left: 40px; 
} 

.right_eye { 
	position: relative; 
	top: 80px; 
	left: 140px; 
}
.robots{
	float:right;/* u can shift the entire robot to right or left now this full robot will act like a single pic inside . robot */

	/* whatever changes u want to make will be seen in the full robot inside the .robot{  } */
}
.col{
	background-color:grey;
	border:2px solid rgba(123,124,233,0.91);
}
#lo{
	color:green;
	display:inline;
	margin-left:50%;
}
</style>
</head>
<body>
	<div class="alert alert-success" role="alert">
		<h3>Welcome ,<?php session_start();
		echo $_SESSION['reg']."(".$_SESSION['name'].")";
		?></h3>
		<h3>Have a Nice Day</h3>
</div>

	<div class="robots">
		<div class="android"> 
			<div class="head"> 
				<div class="eyes"> 
					<div class="left_eye"></div> 
					<div class="right_eye"></div>
				</div> 
			</div> 
			<div class="upper_body"> 
				<div class="left_arm"></div> 
				<div class="torso"></div> 
				<div class="right_arm"></div> 
			</div> 
			<div class="lower_body"> 
				<div class="left_leg"></div> 
				<div class="right_leg"></div> 
			</div> 
		</div>
	</div>
<div class="hi">
	<?php 
$con=mysqli_connect('localhost','root','prakash');
$db=mysqli_select_db($con,'prakashk');
$b="select * from studentsignup";
$check=mysqli_query($con,$b);
echo"<table border='2' cellpadding='6'>
<tr><th>Registration No</th><th>Name</th><th><center>Attendance</center></th><th><center>Marks</center></th><th><center>Upload link</center></th></</tr>";
while($row=mysqli_fetch_array($check)){
	echo "<tr><td><form method='POST' action='upload.php'><input type='radio' name='rad' value='$row[2]'>$row[2]</td><td>".$row[0]." ".$row[1]."</td><td><input type='text' name='at' ></td><td><input type='text' name='mk' ></td><td><input type='submit' value='upload'></td></form></tr>";
}
echo"</table>";
?>
</div><br><br>
<div id="lo">
			<h3><a href="logout.php">LogOut</a></h3>
		</div>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>