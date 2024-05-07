<?php
    session_start();
    include 'classes/user.class.php';

    $user = new User();

    $user->unique_id = $_SESSION['unique_id'];
    $user->status = 'Offline';
    $user->update_status();

 
    session_destroy();
    header('location: ../login.php');
?>