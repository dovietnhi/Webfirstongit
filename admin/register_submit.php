<?php
    session_start();
    include "config.php";
    if(isset($_POST['submit']) && $_POST['username'] != '' && $_POST['password'] != '' && $_POST['repassword'] != '' ){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $repassword = $_POST['repassword'];
        $level = 0;
        if( $password != $repassword ) {
            $_SESSION['thongbao'] = 'Sai mật khẩu nhập lại';
            header('location:register.php');
            exit();
        }
        $sql = "SELECT * FROM user WHERE username='$username' ";
        $old = mysqli_query($conn, $sql);
        $password = md5($password);
        if( mysqli_num_rows($old) > 0 ) {
            $_SESSION['thongbao'] = "Tài khoản đã tồn tại";
            header("location:register.php");
            exit();
        }
        $sql = "INSERT INTO user (username,password,level) VALUES ('$username','$password','$level')";
        mysqli_query($conn, $sql);
        $_SESSION['thongbao']='Đăng ký thành công';
        header("location:login.php");
        exit();
        
    }else{
        $_SESSION['thongbao']='Vui lòng điền đầy đủ thông tin';
        header("location:register.php");
        exit();
    }
?>