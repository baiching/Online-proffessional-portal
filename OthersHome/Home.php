<?php
session_start();
/*
if ( $_SESSION['logged_in'] != 1 ) {
  $_SESSION['message'] = "You must log in";
  header("location: ../oops/oops.php"); 
}
else {
	$id = $_SESSION['id'];
    $first_name = $_SESSION['first_name'];
    $last_name = $_SESSION['last_name'];
    $email = $_SESSION['email'];
}*/
include('../config.php');
$id = $_GET['id'];
$sql = "select * from regester where id='$id'";
$results = mysqli_query($conn, $sql);
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
	<div class="mid">
		<div class="bleft">
			<?php while($info = $results->fetch_assoc()){ ?>
	<h4>Name : <?php echo $info['first_name'].' '.$info['last_name']; ?></h4>
	<hr>
	<h4>Date of Birth : <?php echo $info['dob']; ?></h4>
	<hr>
	<h4>Address : <?php echo $info['address']; ?></h4>
	<hr>
	<h4>Email Address : <?php echo $info['email']; ?></h4>
	<hr>
	<h4>Educational sattus :  <?php echo $info['education']; ?></h4>
	<hr>
	<h4>Skillls :  <?php echo $info['skills']; ?></h4>
	<hr>
	<h4>Job Status : <?php echo $info['job_type']; ?></h4>
	<hr>
			<?php } ?>
	<button>Blog List</button>

	</div>
	<div class="bright">
	<div class="imag"><img src="image/prof.png" alt=""></div>
	<div class="disc">
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore inventore consequatur amet quas voluptatum fuga esse quisquam optio cumque earum itaque veniam aperiam placeat, necessitatibus ex maxime. Ea repellat dolorum assumenda velit vitae impedit, quae natus accusamus, vel veniam provident, sapiente quo non quisquam placeat aperiam ullam quidem earum, error!</p>
	</div>
		
	</div>
	</div>
</div>

</body>
</html>