<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
    <title>Đăng nhập</title>
    <script type="text/javascript">
           function Redirect() {
              window.location="http://localhost/loginfw/admin/register.php";
           }
     </script>
</head>
<body>
    <h2 style="text-align:center" >Trang đăng nhập</h2>
    <form action="login_submit.php" method="POST">
        <table style="background-image: url(../fonend/image/b1.png);" >
            <tr>
                <td>Tài khoản</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td>Mật khẩu</td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" value="Đăng nhập" name="submit">
                </td>
            </tr>
            <tr>
                <td class="a">            
                    <?php
                        if( isset($_SESSION['thongbao']) ) {
                        echo $_SESSION['thongbao'];
                        unset($_SESSION['thongbao']);
                        }
                    ?>
                </td>
            </tr>
            <td>
            <form>
                <p>Nếu chưa có tài khoản hãy</p><img src="../fonend/image/dk.jpg" class="dki" onclick="Redirect()">
             </form>
            </td>
        </table>
    </form>
</body>
</html>