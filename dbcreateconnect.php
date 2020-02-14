<?php
$servername = "localhost";
$username = "root";
$password = "admin123";

$conn = mysqli_connect($servername,$username,$password);

if(!$conn){
    die("Connection failed: ".mysqli_connect_error());
}

$sql = "CREATE DATABASE sales";
if (mysqli_query($conn,$sql)){
    echo "Database Created Successfully";
} else{
    echo "Database creation error" . mysqli_error($conn);
}
mysqli_close($conn);
?>