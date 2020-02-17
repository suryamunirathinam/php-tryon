<?php
    $loggedIn = true;
    $arr = [1231,123,123,1,234,234,2345,3,4563,6]
    /*if($loggedIn){
        echo 'You are logged in';
        
    }else {
        echo  'you are not logged in';
        }
    echo($loggedIn)?'You are logged in':'you are not logged in ';


    $isRegistered = ($loggedIn==true)?true:false;
    echo $isRegistered;
    $age= 20;
    $score = 15;
    echo 'your score is :'.($score>10?'Average':'Exceptional')

    #nested thing */
?>
<div>
<?php if($loggedIn):?>
    <h1>Welcome user</h1>
<?php else :?>
        <h1>Welcome Guest</h1>
<?php endif;?>
    </div>
<div>
    <?php foreach ($arr as $val):?>
        <?php echo $val; ?>
<?php endforeach; ?> 
</div>