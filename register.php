<?php
session_start();
if(isset($_SESSION['user'])!="")
{
 header("Location: home.php");
}
include_once 'Server_connection.php';

if(isset($_POST['btn-signup']))
{
 $uname = mysql_real_escape_string($_POST['uname']);
 $email = mysql_real_escape_string($_POST['email']);
 $upass = md5(mysql_real_escape_string($_POST['pass']));
 
 if(mysql_query("INSERT INTO users(username,email,password) VALUES('$uname','$email','$upass')"))
 {
  ?>
        <script>alert('successfully registered ');</script>
        <?php
 }
 else
 {
  ?>
        <script>alert('error while registering you...');</script>
        <?php
 }
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login & Registration System</title>
<link rel="stylesheet" href="style.css" type="text/css" />

</head>
<body>
	<div id="main">
<h1>Registration Session Example</h1>
<div id="login">
	<h2>Register Form</h2>
<form method="post">
	<label>UserName :</label>
<input id="name" type="text" name="uname" placeholder="User Name" required />

	<label>Email :</label>
<input id="email" type="text" name="email" placeholder="Your Email" required />

	<label>Password :</label>
<input id="password" type="password" name="pass" placeholder="Your Password" required />
<br />
<input type="submit" name="btn-signup" value=" Login ">
<center><a href="index.php">Sign In Here</a></center>

</form>
</div>
</body>
</html>


	

