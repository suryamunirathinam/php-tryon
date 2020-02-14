
<!DOCTYPE html>
<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  email:<input type = "email" name ="Email">
  <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = $_POST['fname'];
    if (empty($name)) {
        echo "Name is empty";
    } else {
        echo $name;
    }
    $email = $_POST['Email'];
    if (empty($email)){
        echo "Email is Empty";
    }else{
        echo $email;
    }
}
?>

</body>
</html>
