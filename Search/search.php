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
			<a href="search.php">Search</a>
			<a href="../Reset Password/ResetPass.php">Password Settings</a>
			</li>
		</ul>
		</li>
		<li><a href="../Welcome/logout.php">Log Out</a></li>
	</ul>
</div>

</div>
<div class="web-body">

	<div class="regbox">
	<div class="regin">
		<h2>Search</h2>
		<p>Enter the Name of the person whom you want te search</p>
	</div>
	<form action="results.php" method="POST">
		<div class="name">
			<input type="text" id = "name" placeholder="Enter Name" name="uname">
		</div>
		<div class="regest">
			<input type="submit" value="Search" name="search">
		</div>
		</div>
	</form>
	
	
</div>
</body>
</html>






















