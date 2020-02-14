<?php
$servername= "localhost";
$username= "root";
$password= "admin123";
$dbname = "sales";

$conn = mysqli_connect($servername,$username,$password,$dbname);
if (!$conn){
    die("Error in connection".mysqli_connect_error());
}

$sql  = "CREATE TABLE Products(
    p_id INT(6) AUTO_INCREMENT primary key,
    p_name VARCHAR(10),
    p_cost Int(10),
    p_quantity Int(5)

)";
if (mysqli_query($conn,$sql)){
    echo "product table  is created";

}
else{
    echo "Error creating table".mysqli_error($conn);
}

?>
