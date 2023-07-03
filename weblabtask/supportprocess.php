<?php
     if(!isset($_POST['submit'])) {header('location: support.php');}
     $con = mysqli_connect('localhost', 'root', '', 'asiya');

     $email = $_POST['email'];
     $query = $_POST['query'];

     $sql = "INSERT INTO query(sendermail, query) Values( '$email', '$query')";

     
    if(mysqli_query($con, $sql) === false){
       echo 'error';
    }
    else{
        header('location: support.php');
    }

    
?>
