<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
<link rel="stylesheet" href="<?php echo ROOT_URL ?>view/css/login_signup.css">
<link rel="stylesheet" href="<?php echo ROOT_URL ?>view/css/base.css">
</head>
<style>
    .row.mb10 > p{
        color: #f13233;
        font-size: 1.2rem;
    }
</style>
<body>
    <div class="container">
        <div class="box">
            <img src="<?php echo ROOT_URL ?>view/images/banner/dangky.png" alt="">
        </div>
        <div class="box-left">
            <div class="box-header">
                <div class="box-icon">
                    <i class="far fa-user"></i>
                </div>
            </div>
            <h1>Đăng Ký</h1>
            <form action="<?php echo ROOT_URL ?>register/auth" method="post" id="register">
                <?php
                    if(!empty($_GET['alert'])) {
                        $alert = unserialize(urldecode($_GET['alert']));
                        foreach ($alert as $key => $val) {
                            echo '<p style="color: green; font-size:14px;">'.$val.'</p>';
                        }
                    }
                ?>
                <div class="row mb10 ">
                    <input id="email" autocomplete="off" type="email" placeholder="Email" name="email_account">
                    <p></p>
                </div>
                <div class="row mb10 ">
                    <input id="username" autocomplete="off" type="text" placeholder="Họ tên" name="name_account">
                    <p></p>
                </div>
                <div class="row mb10 ">
                    <input id="pass" autocomplete="off" type="password" placeholder="Mật Khẩu" name="pass_account">
                    <p></p>
                </div>
                <div class="row mb10 ">
                    <input id="repass" autocomplete="off" type="password" placeholder="Nhập lại mật khẩu">
                    <p></p>
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
                    <input type="submit" value="Đăng ký" name="register">
                </div>
                <div class="row mb10 mb3">
                    <a href="<?php echo ROOT_URL?>fotgotPass" class="form"> Quên mật khẩu?</a><br>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
<script src="<?php echo ROOT_URL ?>view/js/valid_register.js"></script>