
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PolyFood</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" crossorigin="anonymous" />
    <link rel="stylesheet" href="<?php echo ROOT_URL ?>view/css/main.css">
    <link rel="stylesheet" href="<?php echo ROOT_URL ?>view/css/base.css">
    <link rel="stylesheet" href="<?php echo ROOT_URL ?>view/css/grid.css">
    <link rel="stylesheet" href="<?php echo ROOT_URL ?>view/css/reset.css">
    <link rel="stylesheet" href="<?php echo ROOT_URL ?>view/css/responsive.css">
    <link rel="stylesheet" href="<?php echo ROOT_URL ?>view/css/modal.css">

    <!-- Hưng thêm css và icon trang updateAccount -->
    <link rel="stylesheet" href="<?php echo ROOT_URL ?>view/css/update-user.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">

    <!-- Hưng thêm css trang orderDetail -->
    <link rel="stylesheet" href="<?php echo ROOT_URL ?>view/css/lichsu-donhang.css">

    <!-- Hưng thêm css trang registerStore -->
    <link rel="stylesheet" href="<?php echo ROOT_URL ?>view/css/dangky-cuahang.css">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
</head>
<body>
<div class="wrapper">
        <header class="header">
            <div class="grid width">
                <div class="header-contain">
                    <div class="header-logo invisible-header">
                        <a href="<?php echo ROOT_URL ?>" class="logo-link">
                            <img class="logo-img" src="<?php echo ROOT_URL ?>view/images/logo/header-logo2.png" alt="">
                        </a>
                    </div>
                    <div class="header-location">
                        <nav class="location-menu">
                            <ul class="location-list">
                                <li class="location-dropdown">
                                    <div class="dropdown-heading">
                                        <span>Địa điểm</span>
                                        <i class="fa fa-caret-down"></i>
                                    </div>
                                    <ul class="dropdown-show">
                                        <li class="show-item">
                                            <a class="show-link" href="#">
                                                <span class="show-link-city">Hồ Chí Minh</span>
                                                <span class="show-link-quantity">10 địa điểm</span>
                                            </a>
                                        </li>
                                        <li class="show-item">
                                            <a class="show-link" href="#">
                                                <span class="show-link-city">Hà Nội</span>
                                                <span class="show-link-quantity">10 địa điểm</span>
                                            </a>
                                        </li>
                                        <li class="show-item">
                                            <a class="show-link" href="#">
                                                <span class="show-link-city">Hồ Chí Minh</span>
                                                <span class="show-link-quantity">10 địa điểm</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="header-search">
                        <form class="search-form" action="<?php echo ROOT_URL ?>resultSearch" method="post" name="">
                            <input class="search-input" type="text" placeholder="Tìm kiếm theo tên quán, món ăn, địa chỉ" name="keyword">
                            <button class="btn-search" type="submit" name="search">
                                <i class="fa fa-search"></i>
                            </button>
                        </form>
                    </div>
                    <div class="header-cart">
                        <div class="cart-contain">
                            <a href="<?php echo ROOT_URL ?>cartconfirm" class="cart-link">
                                <svg class="cart-logo" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="395.025px" height="395.025px" viewBox="0 0 395.025 395.025" style="enable-background:new 0 0 395.025 395.025;"
                                    xml:space="preserve">
                            <g>
                             <path style="fill: #ff7800;" d="M357.507,380.982L337.914,82.223c-0.431-6.572-5.887-11.682-12.473-11.682h-54.69V62.5c0-34.462-28.038-62.5-62.5-62.5
                                        h-21.495c-34.462,0-62.5,28.038-62.5,62.5v8.041h-54.69c-6.586,0-12.042,5.11-12.473,11.682L37.45,381.709
                                        c-0.227,3.449,0.986,6.838,3.35,9.361c2.364,2.525,5.666,3.955,9.124,3.955h295.159c0.007,0,0.013,0,0.02,0
                                        c6.903,0,12.5-5.596,12.5-12.5C357.601,382.004,357.57,381.488,357.507,380.982z M149.255,62.5c0-20.678,16.822-37.5,37.5-37.5
                                        h21.495c20.678,0,37.5,16.822,37.5,37.5v8.041h-96.495V62.5z M63.27,370.025L81.272,95.542h42.983v11.154
                                        c-8.895,4.56-15,13.818-15,24.482c0,15.164,12.336,27.5,27.5,27.5s27.5-12.336,27.5-27.5c0-10.664-6.105-19.922-15-24.482V95.542
                                        h96.495v11.154c-8.896,4.56-15,13.818-15,24.482c0,15.164,12.336,27.5,27.5,27.5s27.5-12.336,27.5-27.5
                                        c0-10.664-6.105-19.922-15-24.482V95.542h42.983l18.002,274.483H63.27z"/>
                            </g>
                        </svg>
                                <!-- <span class="cart-text">Giỏ hàng</span> -->
                            </a>
                            <!-- <div class="cart-list cart-list--nocart">
                                <img src="<?php echo ROOT_URL ?>view/images/logo/logo-empty.png" alt="" class="cart-img">
                                <p class="cart-list-text">Giỏ hàng trống</p>
                            </div> -->
                        </div>
                    </div>
                    <div class="header-auth">
                        <nav class="auth-menu">
                            <ul class="auth-list">
                                <!-- <li class="auth-item">
                                    <a href="./register.html" class="auth-link  header-menu--line" style="font-size: 1.4rem;">Đăng kí</a>
                                </li> -->
                                <!--  -->
                                <!-- <li class="auth-item btn btn-login" style="display:block;">
                                    <a href="<?php echo ROOT_URL ?>login" class="auth-signin" style="font-size: 1.4rem;">Đăng nhập</a>
                                </li> -->

                                <ul>
                                    <li>
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
                                            <img src="<?php echo ROOT_URL?>view/uploads/avatarAccount/<?=$rs[0]['avatar_account']?>" alt="" class="user-img">
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
                                    </li>
                                </ul>
                                
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        <!-- <header class="header-mobile">
            <div class="header-contain">
                <span class="menubtn" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
                <div class="header-location">
                    <nav class="location-menu">
                        <ul class="location-list">
                            <li class="location-dropdown">
                                <div class="dropdown-heading">
                                    <span>Địa điểm</span>
                                    <i class="fa fa-caret-down"></i>
                                </div>
                                <ul class="dropdown-show">
                                    <li class="show-item">
                                        <a class="show-link" href="#">
                                            <span class="show-link-city">Hồ Chí Minh</span>
                                            <span class="show-link-quantity">10 địa điểm</span>
                                        </a>
                                    </li>
                                    <li class="show-item">
                                        <a class="show-link" href="#">
                                            <span class="show-link-city">Hà Nội</span>
                                            <span class="show-link-quantity">10 địa điểm</span>
                                        </a>
                                    </li>
                                    <li class="show-item">
                                        <a class="show-link" href="#">
                                            <span class="show-link-city">Hồ Chí Minh</span>
                                            <span class="show-link-quantity">10 địa điểm</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>

                <div class="header-search">
                    <form class="search-form" action="#" method="" name="">
                        <input class="search-input" type="text" placeholder="Nhập tìm kiếm">
                        <button class="btn btn-search" type="submit" name="search">
                            <i class="fa fa-search fa-1x"></i>
                        </button>

                    </form>
                </div>
                <div class="header-cart">
                    <div class="cart-contain">
                        <a href="./index.html" class="cart-link">
                            <svg class="cart-logo" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="395.025px"
                                height="395.025px" viewBox="0 0 395.025 395.025"
                                style="enable-background:new 0 0 395.025 395.025;" xml:space="preserve">
                                <g>
                                    <path style="fill: #ff7800;" d="M357.507,380.982L337.914,82.223c-0.431-6.572-5.887-11.682-12.473-11.682h-54.69V62.5c0-34.462-28.038-62.5-62.5-62.5
                                    h-21.495c-34.462,0-62.5,28.038-62.5,62.5v8.041h-54.69c-6.586,0-12.042,5.11-12.473,11.682L37.45,381.709
                                    c-0.227,3.449,0.986,6.838,3.35,9.361c2.364,2.525,5.666,3.955,9.124,3.955h295.159c0.007,0,0.013,0,0.02,0
                                    c6.903,0,12.5-5.596,12.5-12.5C357.601,382.004,357.57,381.488,357.507,380.982z M149.255,62.5c0-20.678,16.822-37.5,37.5-37.5
                                    h21.495c20.678,0,37.5,16.822,37.5,37.5v8.041h-96.495V62.5z M63.27,370.025L81.272,95.542h42.983v11.154
                                    c-8.895,4.56-15,13.818-15,24.482c0,15.164,12.336,27.5,27.5,27.5s27.5-12.336,27.5-27.5c0-10.664-6.105-19.922-15-24.482V95.542
                                    h96.495v11.154c-8.896,4.56-15,13.818-15,24.482c0,15.164,12.336,27.5,27.5,27.5s27.5-12.336,27.5-27.5
                                    c0-10.664-6.105-19.922-15-24.482V95.542h42.983l18.002,274.483H63.27z" />
                                </g>
                            </svg>
                             <span class="cart-text">Giỏ hàng</span> -->
                        <!-- </a> -->
                        <!-- <div class="cart-list cart-list--nocart">
                            <img src="./images/logo/logo-empty.png" alt="" class="cart-img">
                            <p class="cart-list-text">Giỏ hàng trống</p>
                        </div>
                    </div>
                </div>
                <div id="myNav" class="overlay">
                    <div class="overlay-header">
                        <a href="#" class="logo-link">
                            <img class="logo-img" src="./images/logo/header-logo2.png" alt="">
                        </a>
                        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                    </div>

                    <div class="overlay-content">
                        <div class="content-item ">
                            <a href="#">
                                <i class="fas fa-user-cog fa-1x item-icon item-admin"></i>
                                <p class="item-title">Admin</p>
                            </a>
                        </div>
                        <div class="content-item">
                            <a href="#">
                                <i class="fas fa-clipboard-list fa-1x item-icon item-history"></i>
                                <p class="item-title">Lịch sử mua hàng</p>
                            </a>
                        </div>
                        <div class="content-item">
                            <a href="#">
                                <i class="fas fa-user-alt fa-1x item-icon item-update"></i>
                                <p class="item-title">Cập nhật</p>
                            </a>
                        </div>
                        <div class="content-item">
                            <a href="#">
                                <i class="fas fa-store fa-1x item-icon item-store"></i>
                                <p class="item-title">Gian hàng</p>
                            </a>
                        </div>
                        <div class="content-item">
                            <a href="#">
                                <i class="fas fa-sign-out-alt item-icon item-logout"></i>
                                <p class="item-title">Đăng xuất</p>
                            </a>
                        </div>
                    </div>
                </div>

            </div> -->
        