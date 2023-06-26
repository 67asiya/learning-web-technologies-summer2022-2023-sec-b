<?php
    if(!isset($_POST['update'])) header('location: display.php');
    else{
        $name = $_POST['name'];
        $pre_name = $_POST['pre_name'];
        $b_p = $_POST['buyingprice'];
        $s_p = $_POST['sellingprice'];
        
        if(isset($_POST['display'])) $display = 'true';
        else $display = 'false';



        $con = mysqli_connect('localhost', 'root', '', 'product_db');
        $sql = "UPDATE products set name='$name', buyingprice='$buyingprice', sellingprice='$sellingprice', display='$display' where name='pre_name'";
        mysqli_query($con, $sql);

        header('location: display.php');
    }

?>