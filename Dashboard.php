<?php
session_start();
include_once 'Server_connection.php';

if(!isset($_SESSION['user']))
{
 header("Location: index.php");
}
$res=mysql_query("SELECT * FROM users WHERE user_id=".$_SESSION['user']);
$userRow=mysql_fetch_array($res);
?>

<!DOCTYPE html>
<html>
<head>
<title>Your Home Page</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="profile">
<b id="welcome">Welcome - <?php echo $userRow['username']; ?></i></b>
<b id="logout"><a href="logout.php?logout">Sign Out</a></b>
</div>
</body>
</html>
