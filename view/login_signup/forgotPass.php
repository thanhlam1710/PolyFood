<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" href="<?php echo ROOT_URL ?>view/css/login_signup.css">
<link rel="stylesheet" href="<?php echo ROOT_URL ?>view/css/base.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
</head>

<body>
    <div class="container">
        <div class="box">
            <img src="<?php echo ROOT_URL ?>view/images/banner/quenmk.png" alt="">
        </div>
        <div class="box-left">
            <div class="box-header">
                <div class="box-icon">
                    <i class="far fa-user"></i>
                </div>
            </div>
            <h1>Quên mật khẩu</h1>
            <form action="#">
                <div class="row mb10 ">
                    <input type="text" placeholder="Email" name="email">
                </div>
                <div class="row mb10 mb3">
                    <input type="submit" value="Tìm lại mật khẩu" name="timmatkhau">
                </div>
            </form>
        </div>
    </div>


</body>

</html>