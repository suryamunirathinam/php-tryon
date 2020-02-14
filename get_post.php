<?php
    #echo $_GET['name'];
    #echo "<br>";
    #echo $_GET['email'];
    echo $_POST['name'];
    $email =htmlentities($_GET['email']);
      //isset htmlentries
    echo $_SERVER['QUERY_STRING'];
    //echo $_REQUEST['name']; not a good practise this will work whether the form is post or get
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My website</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" />
</head>
<body>
    <form method ="POST" action="get_post.php">
        <div>
            <label>Name</label><br>
            <input type="text" name ="name">
        </div>
        <div>
                <label>Email</label><br>
                <input type="email" name ="email">
        </div>
        <input type="submit" value="submit">
    </form>
    <ul>
        <li>
            <a href ="get_post.php?email=surya4e4@gmail.com">surya4e4</a>

        </li>
        <li>
            <a href ="get_post.php?email=suryamunirathinam@gmail.com">suryamuni</a>
</li>
    </ul>
<h1><?php echo "{$email}'s Profile";?></h1>
    
</body>
</html>