
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project 1 - index</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css"
        crossorigin="anonymous" />
    <link rel="stylesheet" href="./view/css/base.css">
    <link rel="stylesheet" href="./view/css/main.css">
    <link rel="stylesheet" href="./view/css/grid.css">
    <link rel="stylesheet" href="./view/css/dangky-cuahang.css">
    <link rel="stylesheet" href="./view/css/reset.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">

</head>


<body>
<div class="wrapper">
        <header class="header">
            <div class="grid width">
                <div class="header-contain">
                    <div class="header-logo">
                        <!-- <img srcset="images/logo/header-logo.png 2x" alt="" class="logo-img"> -->
                        <a href="<?php echo ROOT_URL ?>" class="logo-link">
                            <img class="logo-img" src="<?php echo ROOT_URL ?>/view/images/logo/header-logo2.png" alt="">
                        </a>
                    </div>
                    <div class="header-title">
                        <span>Đăng ký để trở thành người bán hàng PolyFood</span>
                    </div>
                    <div class="header-auth ml41rem">
                        <nav class="auth-menu">
                            <ul class="auth-list">
                                <!-- <li class="auth-item">
                                <a href="./register.html" class="auth-link  header-menu--line" style="font-size: 1.4rem;">Đăng kí</a>
                            </li> -->
                                <!--  -->
                                <!-- <li class="auth-item btn btn-login">
                                <a href="./login.html" class="auth-signin" style="font-size: 1.4rem;">Đăng nhập</a>
                            </li> -->
                            <?php 
                                        // if(session::getSession('login')) {
                                        if(isset($_SESSION['user'])) {
                                            // var_dump($_SESSION['user']);
                                            $rs = $_SESSION['user'];
                                            // var_dump($rs);
                                            $name_account = $rs[0]['name_account'];
                                    ?>
                                        <li class="auth-item">
                                        <a href="<?php echo ROOT_URL ?>account" class="auth-user" style="font-size: 1.4rem;">
                                            <img src="<?php echo ROOT_URL ?>view/uploads/avatarAccount/<?=$rs[0]['avatar_account']?>" alt="" class="user-img">
                                            <span class="user-name"> <?=$name_account?> </span>
                                            <i class="fa fa-caret-down user-icon-down"></i>
                                        </a>
                                        <ul class="user-list">
                                            <li class="user-item">
                                                
                                                <a href="<?php echo ROOT_URL?>account/orderDetail" class="user-link">
                                                    <img src="<?php echo ROOT_URL ?>view/images/icon/icon-history.svg" alt="" class="user-icon">
                                                    <span>Lịch sử đơn hàng</span>
                                                </a>
                                                <a href="<?php echo ROOT_URL ?>account/updateAccount" class="user-link">
                                                    <img src="<?php echo ROOT_URL ?>view/images/icon/icon-user.svg" alt="" class="user-icon">
                                                    <span>Cập nhật tài khoản</span>
                                                </a>
                                                <a href="<?php echo ROOT_URL ?>storeList" class="user-link">
                                                    <img src="<?php echo ROOT_URL ?>view/images/icon/icon-store.svg" alt="" class="user-icon">
                                                    <span>Gian hàng</span>
                                                </a>
                                                <a href="<?php echo ROOT_URL ?>login/logout" class="user-link">
                                                    <img src="<?php echo ROOT_URL ?>view/images/icon/icon-logout.svg" alt="" class="user-icon">
                                                    <span>Đăng xuất</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <?php
                                        }else{
                                    ?>
                                        <li class="auth-item btn btn-login" style="display:block;">
                                            <a href="<?php echo ROOT_URL ?>login" class="auth-signin" style="font-size: 1.4rem;">Đăng nhập</a>
                                        </li>
                                    <?php }
                                    ?>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        <div class="main">
            <div class="formstore">
                <div class="formstore-title">
                    <p>Cài đặt thông tin cửa hàng</p>
                </div>
                <div class="formstore-register">
                    <form  action="<?php echo ROOT_URL ?>registerStore/register" method="post" class="form" enctype="multipart/form-data">
                        <div class="form-row">
                            <label class="form-label" for="name">Tên quán</label>
                            <input class="form-input-name" type="text"  placeholder="Tên" id="name" name="name_store">
                            <input class="form-input-name" type="text"  placeholder="Loại" name="signature_food">
                            <input class="form-input-name" type="text"  placeholder="Tên Đường" name="street_store">
                        </div>
                        <div class="form-row">
                            <label class="form-label" for="name"></label>
                            <div class="form-note">
                                <i class="fas fa-info" style="font-size: 20px;"></i>
                                <p>
                                    Tên quán nên được đặt theo thứ tự: Tên quán, món đặc trưng của quán và tên đường.
                                </p>
                            </div>
                        </div>
                        <div class="form-row">
                            <label class="form-label" for="email">Email người đại diện</label>
                            <input class="form-input-email" type="text" id="email" name="email_store">
                        </div>
                        <div class="form-row">
                            <label class="form-label" for="phone_store">Số điện thoại</label>
                            <input class="form-input-phone" type="text" id="phone_store" name="phone_store">
                        </div>
                        <div class="form-row">
                            <label class="form-label" for="avatar_store">Ảnh cửa hàng</label>
                            <input class="form-input-images" type="file" name="avatar_store">
                        </div>
                        <!-- <div class="form-row">
                            <label class="form-label" for="name"></label>
                            <div class="form-note">
                                <p>
                                    Chấp nhận GIF, JPEG, PNG, BMP với kích thước tối đa 5.0MB.
                                </p>
                            </div>
                        </div> -->
                        <div class="form-row">
                            <label class="form-label" for="name">Loại cửa hàng</label>
                            <select class="form-select-store" name="tag_store">
                                <option selected disabled>Chọn loại cửa hàng</option>
                                <?php 
                                    foreach ($data['menuid'] as $menu) { ?>
                                        <option value="<?=$menu['id_menu']?>"><?=$menu['name_menu']?></option>
                                <?php }
                                ?>
                            </select>
                        </div>
                        <div class="form-row">
                            <label class="form-label" for="name">Thành phố</label>
                            <select class="form-select-city" name="city_store" onchange="showDistrict(this.value)">
                                <option selected disabled>Chọn Thành Phố</option>
                                <?php 
                                    foreach ($data['province'] as $province) { ?>
                                        <option value="<?=$province['id']?>"><?=$province['_name']?></option>
                                <?php }
                                ?>
                            </select>
                        </div>
                        <div class="form-row">
                            <label class="form-label" for="name">Quận</label>
                            <select id="district_store" class="form-select-distrist" name="district_store" onchange="showWard(this.value)">
                                <option selected disabled>Chọn Quận</option>
                            </select>
                        </div>
                        <div class="form-row">
                            <label class="form-label" for="name">Phường</label>
                            <select id="ward_store" class="form-select-ward" name="ward_store">
                                <option selected disabled>Chọn Phường</option>
                              </select>
                        </div>
                        <div class="form-row">
                            <label class="form-label" for="number_store">Số nhà</label>
                            <input class="form-input-phone" type="text" id="number_store" name="number_store">   
                        </div>
                        <div class="btn-formstore">
                            <input type="text" hidden value="<?=$rs[0]['id_account']?>" name="id_account">
                            <input  class="btn-store" type="submit" value="Đăng ký" name="register">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="<?php echo ROOT_URL ?>view/js/ajax_database.js">
    </script>