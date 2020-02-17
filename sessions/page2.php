<?php
    session_start();
    $name=$_SESSION['name'];
    $email = $_SESSION['email'];
?>
<!DOCTYPE html>
<html>
<head>
   
    <title>Php Sessions</title>
   
</head>
<body>
    <h5>thankyou <?php echo $name;?>You are subscribed with email<?php echo $email;?></h5>
    <a href="page3.php">go to page3</a>
</body>
</html>