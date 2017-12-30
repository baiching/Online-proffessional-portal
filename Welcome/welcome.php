<?php
session_start();

// Check if user is logged in 
if ( $_SESSION['logged_in'] != 1 ) {
  $_SESSION['message'] = "You must log in";
  header("location: ../oops/oops.php"); 
}
else {
	// storing session value in variable
	$id = $_SESSION['id'];
    $first_name = $_SESSION['first_name'];
    $last_name = $_SESSION['last_name'];
    $email = $_SESSION['email'];
}
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
		<li><a href="welcome.php">Home</a></li>
		<li><a href="../Home/Home.php">Profile</a></li>
		<li><a href="../Write Blog/Blog.php">Blog</a></li>
		<li><a href="../Search/search.php">Search</a></li>
		<li><a href="#">Settings</a>
		<ul>
			<li>
			<a href="#">Search</a>
			<a href="#">Password Settings</a>
			</li>
		</ul>
		</li>
		<li><a href="logout.php">Log Out</a></li>
	</ul>
</div>

</div>
<div class="Body">
<div class="mid">
	<div class="propic"></div>
	<div class="intro">
		<h1>Welcome</h1>
		<p>to your personal online portfolio <br>potal</p>
	</div>
</div>
</div>
</body>
</html>





















