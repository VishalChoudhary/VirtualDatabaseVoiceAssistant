<?php

$con=mysqli_connect('localhost','root');

if($con){
    echo "Connection Successful";
}else{
    echo "Connection UnSuccessful";
}

$voltage= $_POST['voltage'];
$current= $_POST['current'];
$frequency= $_POST['frequency'];


$query1="INSERT INTO `sensor`.`power`(`voltage`,`current`,`frequency`) 
VALUES ('$voltage','$current','$frequency')";

mysqli_query($con,$query1);

$speed= $_POST['speed'];

$query2="INSERT INTO `sensor`.`motor`(`speed`) 
VALUES ('$speed')";

mysqli_query($con,$query2);

header('location:index.php');
?>