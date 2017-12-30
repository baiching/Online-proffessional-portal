<?php
    session_start();
    include('../config.php');
    
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(!empty(isset($_POST['search']))){
            $username = $_POST['uname'];

            $sql = ("select * from regester where (first_name LIKE '%".$username."%')");
            $search_result = mysqli_query($conn, $sql);

            if ( $search_result->num_rows == 0 ){
                $_SESSION['message'] = "no resuls Found";
               
                echo '<h4> no resuls Found. <a href="search.php">Click here</a> to redirect to search page </h4>';
            }
            else {
                while($user = $search_result->fetch_assoc()){
                    echo '<a href="../OthersHome/Home.php?id='.$user['id'].'">'.$user['first_name'].' '.$user['last_name'].'</a> <br/>';
                }
            }

        }
    }
?>