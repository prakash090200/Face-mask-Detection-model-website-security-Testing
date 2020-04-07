<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style type="text/css">
    .box{
border:4px solid yellow;
outline-style:solid;
outline-color:yellow;
width:50%;
text-align:center;
background-color:lightyellow;
margin:0 auto;
}
#header{
  background-color:black;
  color:#f5f5f6;
}
#sub{
  background-color:white;
  font-size:24px;
  padding:10px 15px;
  border-radius:180px;
  border:2px solid #00FFFF;
}
  #sub:hover{
    background-color:#00FFFF;

  }
a{
  margin:0 auto;
}
</style>

  </head>
  <body>
  <div class="box">
  <form method="post" action="c3.php">
<h1 id="header"><strong>Change Password</strong></h1><br><br><br>
<h4>Registration No:   <input  type="text" name="reg" placeholder="reg_no" required ></h4>
<h4> New Password:    <input type="password" name="pass" placeholder="password" required ></h4>
<h4> Confirm Password:    <input type="password" name="cpass" placeholder="confirm password" required ></h4>
<h6><input id="sub" type="submit" value="Change"></h6><br>
<form>
</div>
<br><br><br><br>
<h4 style="color:tomato;text-align:center;"><a href="first.php"><h4 style="color:tomato;">Back to Home</a><h4>
  </body>
  </html>



