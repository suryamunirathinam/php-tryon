<?php 
    require('mysql/con.php');
    $query ="SELECT * FROM posts";
    $result = mysqli_query($conn,$query);
    $posts = mysql_fetch_all($result,MYSQLI_ASSOC);
    var_dump($posts);
    mysqli_free_request($result);
    mysqli_close($conn);

    echo $posts;
    
?>
