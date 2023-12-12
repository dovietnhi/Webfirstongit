<?php
    session_start();
    if ( !isset($_SESSION["user"])) {
        echo"Đăng nhập đi nhìn gì";
        header("location:register.php");
    }

?>
<h1>đăng nhập để truy cập</h1>
<a href="logout.php">Logout</a>