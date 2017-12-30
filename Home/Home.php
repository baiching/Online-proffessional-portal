<?php
	session_start();
	include('../config.php');
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
		<li><a href="#">Log Out</a></li>
	</ul>
</div>
<div class="left"></div>
</div>
	<div class="mid">
		<div class="bleft">
	<h4>Name : <?php echo $_SESSION['first_name'].' '.$_SESSION['last_name']; ?></h4>
	<hr>
	<h4>Date of Birth : <?php echo $_SESSION['dob']; ?></h4>
	<hr>
	<h4>Address : <?php echo $_SESSION['address']; ?></h4>
	<hr>
	<h4>Email Address : <?php echo $_SESSION['email']; ?></h4>
	<hr>
	<h4>Educational sattus :  <?php echo $_SESSION['education']; ?></h4>
	<hr>
	<h4>Skils :  <?php echo $_SESSION['skills']; ?></h4>
	<hr>
	<h4>Job Status : <?php echo $_SESSION['job_type']; ?></h4>
	<hr>
	<form action="../EditProf/Home.php">
		<button>Edit Profile</button>
	</form>
	

	</div>
	<div class="bright">
	<div class="imag"><img src="image/prof.png" alt=""></div>
		<button>Change Profile Picture</button>
	<div class="disc">
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore inventore consequatur amet quas voluptatum fuga esse quisquam optio cumque earum itaque veniam aperiam placeat, necessitatibus ex maxime. Ea repellat dolorum assumenda velit vitae impedit, quae natus accusamus, vel veniam provident, sapiente quo non quisquam placeat aperiam ullam quidem earum, error!</p>
	</div>
		
	</div>
	</div>
</div>

</body>
</html>