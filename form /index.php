
<?php
$msg='';
$msgClass = '';
if (filter_has_var(INPUT_POST,'submit')){
    echo 'submitted';
    $name = htmlspecialchars($_POST['name']);
    $email=htmlspecialchars($_POST['email']);
    $message=htmlspecialchars($_POST['message']);
    //
    if(!empty($email)&&(!empty($name))&&(!empty($message))){
        //echo 'passed';
        if(filter_has_var($email,FILTER_VALIDATE_EMAIL) === false){
            $msg ="Please enter a valid email";
            $msgClass ="alert-danger";
        }
        else{
            echo "passed";
        }
    }
    else{
        //failed
        $msg='please fill all the fields';
        $msgClass='alert-danger';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
        <title>Contact form </title>
        <link rel = "stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.4.1/cosmo/bootstrap.min.css">

</head>
<body>
    <nav class ="navbar navbar-default">
        <div class ="container">
            <?php if ($msg != ''):?>
                <div class="alert<?php echo $msgClass;?>"></div>
                <?php echo $msg ;?>
            </div>
            <?php endif;?>
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">Mywebsite</a>
            </div>
        </div> 
    </nav>
    <form method = "post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" class = "form-control" 
            value="<?php echo isset($_POST['name'])?$name :'';?>">
            
        </div>
        <div class= "form-group">
            <label>Email</label>
            <input type="text" name="email" class="form-control" 
            value = "<?php echo isset($_POST['email'])?$email :'';?>">
        </div>
        <div class="form-group">
            <label>Message</label>
            <textarea name="message" class="form-control">
                <?php echo isset($_POST[$message])?$message:'';?>
            </textarea>
        </div>
        <br>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
</body>
</html>