<?php
    $name = $_POST['name'];
    $buyingprice= $_POST['buyingprice'];
    $sellingprice = $_POST['sellingprice'];
    $display = $_POST['display'];

    $con = mysqli_connect('localhost', 'root', '', 'product_db');
    $sql = "INSERT INTO products VALUES('$name', '$buyingprice', '$sellingprice', '$display');";

    mysqli_query($con, $sql);
    header('location: displayproduct.html');
?>