<?php
session_start();
include('../config.php');
$id = $_SESSION['id'];
$sql = "select * from posts where owner_id='$id'";
$result = mysqli_query($conn, $sql);
$i = 0;

echo '<table>';
echo '<p> Blog list </p>';
//echo '<form action="read.php" method="POST">';
while($blogs = $result->fetch_assoc()){
    echo '<tr>';
    echo '<td>';
    echo '<a href="read.php?id='.$blogs['post_id'].'">'.$blogs['post_title'].'</a> <br/>';
    echo '</td>';
    echo '</tr>';
    //$_SESSION['story'] = $blogs['post_text'];
}
//echo '</form>';
echo '<table>';
?>