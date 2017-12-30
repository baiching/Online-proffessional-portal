<?php 
//session_start();
ob_start();
 include('../config.php');
 
     if($_SERVER["REQUEST_METHOD"] == "POST") {
     
     // Check connection
     if (!$conn) {
         
         die("Connection failed: ". mysqli_connect_error());
     }
     else{
         if(isset($_POST['submit'])){
             $first_name = $_POST['fname'];
             $last_name = $_POST['lname'];
             $email = $_POST['uemail'];
             $pass = $_POST['upass'];
         
             $sql = "INSERT INTO regester (first_name, last_name, email ,password)
             VALUES ('$first_name','$last_name ', '$email','$pass')";

             if (mysqli_query($conn, $sql)) {
                 echo "New record created successfully";
                 header('Location: ../index.php');
             } else {
                 echo "Error: " . $sql . "<br>" . mysqli_error($conn);
             }
         }
     }
    
     mysqli_close($conn);
 }
 ob_clean();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
</body>
</html>