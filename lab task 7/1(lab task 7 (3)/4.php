<?php
 if(!isset($_POST['gender'])){
    echo 'Must be selected one';
    return;
}
    $gender = $_POST['Gender'];
    echo " Gender is " . $gender;
   
?>