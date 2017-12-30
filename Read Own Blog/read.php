<?php
session_start();
include('../config.php');
$id = $_GET['id'];
$sql = "select * from posts where post_id='$id'";
//echo '<h5>'.$_SESSION['post_text'].'</h5>';
$result = mysqli_query($conn, $sql);
while($blogs = $result->fetch_assoc()){
    echo '<h5>'.$blogs['post_text'].'</h5>';
}
/*
echo '<table>';
echo '<p> Blog list </p>';
while($blogs = $result->fetch_assoc()){
    echo '<tr>'
    echo '<td>';
    echo '<a href="read.php">'.$blogs['post_title'].' </a>';
    echo '</td>';
    echo '</tr>'
}
echo '<table>';*/
?>