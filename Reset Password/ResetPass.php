<?php
	session_start();
	include('../config.php');
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Welcome to your Portfolio</title>
	<link href="https://fonts.googleapis.com/css?family=Indie+Flower|Josefin+Sans:400,600" rel="stylesheet">
	<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="menu">
<div class="right">
	<ul>
		<li><a href="../Welcome/welcome.php">Home</a></li>
		<li><a href="../Home/Home.php">Profile</a></li>
		<li><a href="../Write Blog/Blog.php">Blog</a></li>
		<li><a href="#">Settings</a>
		<ul>
			<li>
			<a href="../Search/search.php">Search</a>
			<a href="ResetPass.php">Password Settings</a>
			</li>
		</ul>
		</li>
		<li><a href="#">Log Out</a></li>
	</ul>
</div>

</div>
<div class="web-body">

	<div class="regbox">
	<div class="regin">
		<h2>Reset Password</h2>
		<p>Enter the current password then new password  , then reenter the new password to confirm reset</p>
	</div>
	<form action="updatepass.php" method="POST">
		<div class="name">
			<input type="text" id = "curpass" placeholder="Enter current password" name="curpass">
			<input type="text" id = "npass" placeholder="Enter new Password" name="npass">
			<input type="text" id = "cpass" placeholder="Confirm Password" name="cpass">
		</div>
		<div class="regest">
			<input type="submit" value="Confirm Change" name="search">
		</div>
		</div>
	</form>
	
	
</div>
</body>
</html>






















