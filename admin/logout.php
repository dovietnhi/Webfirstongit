<?php
    session_start();
    unset($_SESSION['user']);
    echo'sai thon tin';
    header('location:login.php');
?>