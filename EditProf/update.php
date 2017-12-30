<?php
session_start();
include('../config.php');
$id = $_SESSION['id'];
    if(!empty(isset($_POST['submit']))){
        
            if(!empty($_POST['first_name'])){
                $_SESSION['first_name'] = $vari = $_POST['first_name'];
                $sql = "UPDATE regester SET first_name='$vari' WHERE id = '$id'";
                mysqli_query($conn, $sql);
                
            }
            if(!empty($_POST['last_name'])){
                $_SESSION['last_name'] = $vari = $_POST['last_name'];
                $sql = "UPDATE regester SET last_name='$vari' WHERE id = '$id';";
                mysqli_query($conn, $sql);
                
            }
            if(!empty($_POST['dob'])){
                $_SESSION['dob'] = $vari = $_POST['dob'];
                $sql = "UPDATE regester SET dob='$vari' WHERE id = '$id';";
                mysqli_query($conn, $sql);
            }
            if(!empty($_POST['address'])){
                $_SESSION['address'] = $vari = $_POST['address'];
                $sql = "UPDATE regester SET address='$vari' WHERE id = '$id';";
                mysqli_query($conn, $sql);
            }
            if(!empty($_POST['education'])){
                $_SESSION['education'] = $vari = $_POST['education'];
                $sql = "UPDATE regester SET education='$vari' WHERE id = '$id';";
                mysqli_query($conn, $sql);
            }
            if(!empty($_POST['skills'])){
                $_SESSION['skills'] = $vari = $_POST['skills'];
                $sql = "UPDATE regester SET skills='$vari' WHERE id = '$id';";
                mysqli_query($conn, $sql);
            }
            if(!empty($_POST['job'])){
                $_SESSION['job_type'] = $vari = $_POST['job'];
                $sql = "UPDATE regester SET job_type='$vari' WHERE id = '$id';";
                mysqli_query($conn, $sql);
            }
            header('location: ../Home/Home.php');
        }
        else{
            echo 'sorry some error occured <a href="Home.php">click here</a> to go back';
        }
    
?>