<?php
    session_start();
    print_r($_SESSION);
    $name = $_SESSION['name'];
    $email = $_SESSION['email'];
?>
<!DOCTYPE html>
<html>
<head>

    <title>Php Sessions</title>
    
</head>
<body>
    <h1>Hello <?php echo $name;?><h1>
    <h4><?php echo $email ?></h4>
</body>
</html>