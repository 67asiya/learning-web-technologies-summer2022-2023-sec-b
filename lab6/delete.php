<?php
    if(!isset($_POST['delete'])) header('location: display.php');
    else{
        $name = $_POST['name'];


        $con = mysqli_connect('localhost', 'root', '', 'product_db');
        $sql = "DELETE FROM products WHERE name='$name';";
        mysqli_query($con, $sql);
        
        header('location: display.php');
    }
?>