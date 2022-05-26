
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <link rel="stylesheet" href="<?php echo ROOT_URL ?>view/css/style-admin.css">
</head>
<body>
    <div class="main__login">
        <div class="content__container">
            <h1 class="heading">Đăng nhập quản trị</h1>
            <form autocomplete="off" action="<?php echo ROOT_URL ?>loginadmin/auth" method="post" class="content__form">
            <?php
                if(isset($mess)){
                        echo '<span style="font-size: 20px; color: red;">'.$mess.'</span>';
                    }    
                ?>
                <div class="content__form-group">
                    <input type="text" name="username">
                    <span></span>
                    <label>Tài khoản</label>
                </div>
                <div class="content__form-group">
                    <input type="password" name="password">
                    <span></span>
                    <label>Mật khẩu</label>
                </div>
                <div class="content__form-forgerpass">
                    <a href="#">Quên mật khẩu?</a>
                </div>
                <input class="content__form-btn" type="submit" name="loginadmin" value="Đăng nhập">
            </form>
        </div>
