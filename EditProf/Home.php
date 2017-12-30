<?php
session_start();

if ( $_SESSION['logged_in'] != 1 ) {
  $_SESSION['message'] = "You must log in";
  header("location: ../oops/oops.php"); 
}
else {
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
	<title>Blog</title>
	<link href="https://fonts.googleapis.com/css?family=Indie+Flower|Josefin+Sans:400,600" rel="stylesheet">
	<link rel="stylesheet" href="style.css">
</head>
<body>


<div class="body">
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
			<a href="../Reset Password/ResetPass.php">Password Settings</a>
			</li>
		</ul>
		</li>
		<li><a href="../Welcome/logout.php">Log Out</a></li>
	</ul>
</div>
<div class="left"></div>
</div>
<div class="Body">
	<form action="update.php" method="POST">
		<div class="fname">
		<label for="">First Name : </label>
		<input type="text" placeholder="" name="first_name">
	</div>
	<div class="lname">
		<label for="">Last Name : </label>
		<input type="text" placeholder="" name="last_name">
	</div>
	<div class="dob">
		<label for="">Date of Birth : </label>
		<input type="date" name="dob">
	</div>
	<div class="add">
		<label for="">Address : </label>
		<textarea name="address" id="" cols="50" rows="10"></textarea>
	</div>
	<div class="edu">
		<label for="">Education : </label>
		<textarea name="education" id="" cols="50" rows="10"></textarea>
	</div>
	<div class="skl">
		<label for="">Skillls : </label>
		<textarea name="skills" id="" cols="50" rows="10"></textarea>
	</div>
	<div class="job">
		<label for="">Job Status : </label>
		<textarea name="job" id="" cols="50" rows="10"></textarea>
	</div>
	<!--
	<div class="pass">
		<label for="">Enter Your Password to confirm : </label>
		<input type="password" placeholder="confirm password" name="pass">
	</div>
-->

	<div class="sub">
		<input type="submit" value="Apply change" name="submit">
	</div>
	</form>
</div>

</div>

</body>
</html>