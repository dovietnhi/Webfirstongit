<?php
    session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Đăng Ký</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <h2 style="text-align:center" >Trang đăng ký</h2>
    <form action="register_submit.php" method="POST">
        <table style="background-image: url(../fonend/image/sk1.jpg);"  >
        
            <tr>
                <td>Tên đăng ký</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td>Mật khẩu</td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <td>Nhập lại mật khẩu</td>
                <td><input type="password" name="repassword"></td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" value="Đăng ký" name="submit">
                    <input type="reset">
                </td>
            </tr>
            <tr>
            <td class="a">           <?php
            if( isset($_SESSION['thongbao']) ) {
                echo $_SESSION['thongbao'];
                unset($_SESSION['thongbao']);
            }
        ?></td>
            </tr>
        </table>

    </form>
    
</body>
</html>