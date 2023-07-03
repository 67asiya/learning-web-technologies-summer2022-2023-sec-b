<?php
     if(!isset($_POST['submit'])) {header('location: signup.php');}

    $con = mysqli_connect('localhost', 'root', '', 'asiya');
    
    $username = $_POST['username'];
    $role = $_POST['role'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];
    $country = $_POST['country'];
    $address = $_POST['address'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];


    if($password != $cpassword) header('location: signup.php');

    $sql = "INSERT INTO user Values(
            '$username',
            '$firstname',
            '$lastname',
            '$email',
            '$phone',
            '$gender',
            '$address',
            '$country',
            '$password',
            '$role'
        );";

    if(mysqli_query($con, $sql) === false){
        
    }
    else{
        header('locaton: singin.php');
    }

    
?>