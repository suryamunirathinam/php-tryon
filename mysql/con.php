<?php
$conn =mysqli_connect('localhost','root','admin123','phpblog');
//check connection 
if(mysqli_connect_errno()){
    echo "failed to connect" .mysql_connect_errno();

}
else{
    echo "connected successfully";
    $query ="SELECT * FROM posts";
$result = mysqli_query($conn,$query);
$posts = mysql_fetch_all($result,MYSQLI_ASSOC);
var_dump($posts);
mysqli_free_request($result);
echo $posts;
mysqli_close($conn);


}




?>