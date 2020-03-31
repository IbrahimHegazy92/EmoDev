<?php 

session_start();

session_destroy();

header("Location: http://Localhost/assignment2/login.php");
?>