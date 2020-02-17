<?php
//data is stored on server 
    if (isset($_POST['submit'])){
        session_start();
        $_SESSION['name']=htmlentities($_POST['name']);
        $_SESSION['email'] = htmlentities($_POST['email']);
        header('Location:page2.php');
        
    }
?>
<!DOCTYPE html>
<html>
<head>
 
    <title>PHP sessions</title>
   
</head>
<body>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
        <input type="text" name ="name" placeholder="Enter name">
        <br>
        <input type="email" name = "email" placeholder="Enter Email">
        <br>
        <input type="submit" name = "submit" value="submit">

    </form>

    
</body>
</html>