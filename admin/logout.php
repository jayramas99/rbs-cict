<?php
include('../session.php');
include('dbcon.php');

mysqli_query($conn,"update user_log set logout_Date = NOW() where user_log_id=(
    SELECT max(user_log_id) FROM user_log
    ) ")or die(mysqli_error());

 session_destroy();
header('location:../index.php'); 
?>