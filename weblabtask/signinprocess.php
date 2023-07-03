<?php
     if(!isset($_POST['submit'])) {header('location: signin.php');}
     $con = mysqli_connect('localhost', 'root', '', 'asiya');

     $username = $_POST['username'];
     $password = $_POST['password'];

     $sql = "SELECT * FROM user where (username='$username' or email='$username') && password='$password';";
     
     $res = mysqli_query($con, $sql);
     $users = mysqli_num_rows($res);

     if( $users == 1){
        header('location: query.php');
     }
     else header('location: signin.php');

?>