<?php
session_start();
unset($_SERVER['name']);# to remove one 
session_destroy(); # destroy all 

?>