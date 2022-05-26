<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="./css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo ROOT_URL ?>view/css/login_signup.css">
    <link rel="stylesheet" href="<?php echo ROOT_URL ?>view/css/base.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
</head>

<body>
    <div class="container">
        <div class="box">
            <img src="<?php echo ROOT_URL ?>view/images/banner/dangnhap.png" alt="">
        </div>
        <div class="box-left">
            <div class="box-header">
                <div class="box-icon">
                    <i class="far fa-user"></i>
                </div>
            </div>
            <h1>Đăng nhập</h1>
            <form action="<?php echo ROOT_URL ?>login/auth" method="post">

                <div class="row mb10 ">
                    <input type="email" placeholder="Email" name="email_account" require="1">
                </div>
                <div class="row mb10 ">
                    <input type="password" placeholder="Mật Khẩu" name="pass_account" require="1">
                </div>
                <div class="row mb10 mb3">
                    <a href="#" class="button facebook">
                        <span class="button-icon">
                                <i class="fab fa-facebook-square"></i>
                           </span>
                        <span>
                               Facebook
                           </span>
                    </a>
                    <a href="#" class="button mail ">
                        <span class="button-icon">
                                <i class="fab fa-google-plus"></i>
                           </span>
                        <span>
                               Gmail
                           </span>
                    </a>
                    <a href="#" class="button iclou">
                        <span class="button-icon">
                                <i class="fab fa-apple"></i>
                           </span>
                        <span>
                             Icloud
                           </span>
                    </a>
                </div>
                <div class="row mb10 mb3">
                    <input type="submit" value="Đăng nhập" name="login">
                </div>
                <div class="row mb10 mb3">
                    <a href="<?php echo ROOT_URL?>fotgotPass" class="form"> Quên mật khẩu?</a><br>
                </div>
                <div class="row mb10 mb3">
                    <a href="<?php echo ROOT_URL?>register" class="form"> Đăng ký </a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>