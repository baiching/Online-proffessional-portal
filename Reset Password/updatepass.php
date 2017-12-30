<?php
session_start();
include('../config.php');
if(!empty(isset($_POST[search]))){
    $pass = $_POST['cpass'];
    $id = $_SESSION['id'];
    $sql = "update regester set password='$pass' where id='$id'";
    mysqli_query($conn, $sql);
    header('location: ../Welcome/welcome.php');
}
?>