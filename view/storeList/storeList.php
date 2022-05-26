
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project 1 - index</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css"
        crossorigin="anonymous" />
    <link rel="stylesheet" href="<?php echo ROOT_URL ?>view/css/base.css">
    <link rel="stylesheet" href="<?php echo ROOT_URL ?>view/css/main.css">
    <link rel="stylesheet" href="<?php echo ROOT_URL ?>view/css/grid.css">
    <link rel="stylesheet" href="<?php echo ROOT_URL ?>view/css/gianhang.css">
    <link rel="stylesheet" href="<?php echo ROOT_URL ?>view/css/reset.css">
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
                            <img class="logo-img" src="<?php echo ROOT_URL ?>view/images/logo/header-logo2.png" alt="">
                        </a>
                    </div>

                    <div class="header-title">
                        <span>Gian hàng</span>
                    </div>

                    <div class="header-auth">
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
                <div class="booth-container">
                    <?php 
                        if (!isset($data['store'])){ ?>
                            <!-- <div class="booth">
                                <div class="booth-content">
                                    <p>Chưa có cửa hàng</p>
                                </div>
                            </div> -->
                    <?php  } else { 
                        // $storeInfo = $_SESSION['store'];
                        // var_dump($_SESSION['store']);
                        // $_SESSION['store'];
                        foreach($data['store'] as $listStore){
                        extract($listStore); 
                        $linkStore= ROOT_URL."storemanage&id=$id_store";?>
                            <div class="booth">
                                <div class="booth-img">
                                    <a href="<?=$linkStore?>" class="booth-link">
                                        <img src="<?php echo ROOT_URL ?>view/uploads/avatarStore/<?=$avatar_store?>" alt="">
                                    </a>
                                </div>
                                <div class="booth-info">
                                    <a href="<?=$linkStore?>" class="booth-info-1"><?=$name_store?> - <?=$signature_food?> - <?=$street_store?></a>
                                    <p class="booth-info-2"><?=$number_store?> - <?=$street_store?>, 
                                    <?php foreach($data['ward'] as $wardAdd) {
                                        if ($ward_store == $wardAdd['id'])
                                        echo $wardAdd['_name'];
                                    }?>, 
                                    <?php foreach($data['district'] as $districtAdd) {
                                        if ($district_store == $districtAdd['id'])
                                        echo $districtAdd['_name'];
                                    }?>, 
                                    <?php foreach($data['province'] as $provinceAdd) {
                                        if ($city_store == $provinceAdd['id'])
                                        echo $provinceAdd['_name'];
                                    }?></p>
                                    <p class="booth-info-3">
                                        <i class="fa fa-store"></i>
                                        <?php 
                                            if ($status_store == 1) { ?>
                                                <span class="booth-status">Đang hoạt động</span>
                                        <?php  } else { ?>
                                                <span class="booth-status">Đóng cửa</span>
                                        <?php }
                                        ?>
                                    </p>
                                </div>
                            </div>
                    <?php 
                        } 
                     }
                    ?>                    
                    
                                       
                    <div class="booth">
                        <div class="btn-booth">
                            <button class="btn-booth-store">
                                <a href="<?php echo ROOT_URL?>registerStore">Đăng ký</a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            