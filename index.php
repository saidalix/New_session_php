<?php
session_start();
include_once 'Server_connection.php';

if(isset($_SESSION['user'])!="")
{
 header("Location: Dashboard.php");
}
if(isset($_POST['btn-login']))
{
 $email = mysql_real_escape_string($_POST['email']);
 $upass = mysql_real_escape_string($_POST['pass']);
 $res=mysql_query("SELECT * FROM users WHERE email='$email'");
 $row=mysql_fetch_array($res);
 if($row['password']==md5($upass))
 {
  $_SESSION['user'] = $row['user_id'];
  header("Location: Dashboard.php");
 }
 else
 {
  ?>
        <script>alert('wrong details');</script>
        <?php
 }
 
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login Form in PHP with Session</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
	<div id="main">
<h1>PHP Login Session Example</h1>
<div id="login">
<h2>Login Form</h2>
<form method="post">
	<label>Email :</label>
<input id="name" type="text" name="email" placeholder="Your Email" required>

	<label>Password :</label>
<input id="password" type="password" name="pass" placeholder="Your Password" required>

	<input type="submit" name="btn-login" value=" Login ">
<center><a href="register.php">Sign Up</a></center>

	</form>
</div>

</body>
</html>

