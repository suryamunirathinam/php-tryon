<?php
    if (isset($_POST['submit'])){
        $username = htmlentities($_POST['username']);
        setcookie('username',$username,time()+3600);
        header('Location:page2.php');
    }
?>
<!DOCTYPE html>
<html>
<head>

    <title>Cookies</title>
    
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
    <input type="text" name = "username" placeholder="enter yourname">
    <br>
    <input type="submit" name ="submit" value= "submit">
    </form>
</body>
</html>