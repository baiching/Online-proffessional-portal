<?php 

require 'config.php';
session_start();

$email = $_POST['email'];
$sql = "SELECT * FROM regester WHERE email='$email'";
$result = mysqli_query($conn, $sql);

if ( $result->num_rows == 0 ){
    $_SESSION['message'] = "User with that email doesn't exist!";
    header("location: oops/oops.php");
}
else {
    $user = $result->fetch_assoc();

    if ( password_check($_POST['pass'], $user['password']) ) {

        $_SESSION['id'] = $user['id'];
        $_SESSION['email'] = $user['email'];
        $_SESSION['first_name'] = $user['first_name'];
        $_SESSION['last_name'] = $user['last_name'];
        $_SESSION['address'] = $user['address'];
        $_SESSION['dob'] = $user['dob'];
        $_SESSION['education'] = $user['education'];
        $_SESSION['skills'] = $user['skills'];
        $_SESSION['job_type'] = $user['job_type'];
        $_SESSION['password'] = $user['password'];
        
        // user is logged in
        $_SESSION['logged_in'] = true;

        header("location: Welcome/welcome.php");
    }
    else {
        $_SESSION['message'] = "You have entered wrong password, try again!";
        header("location: oops/oops.php");
    }
}

function password_check($p, $ps){
  if($p == $ps){
    return true;
  }
  else{
    return false;
  }
}
?>