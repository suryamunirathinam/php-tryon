<?php
$servername = "localhost";
$username = "root";
$password = "admin123";
$dbname= "sales";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}else{
    echo "success";
}


$sql = "INSERT INTO Products(p_name,p_cost,p_quantity) 
        values('glass',1000,12)";
if(mysqli_query($conn,$sql)){
    echo "new records have been inserted correctly";
}else{
    echo "record insertion error".$mysqli_error($conn);
}
?>
