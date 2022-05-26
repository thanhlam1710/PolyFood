<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project 1</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" crossorigin="anonymous" />
    <link rel="stylesheet" href="<?php echo ROOT_URL ?>view/css/base.css">
    <link rel="stylesheet" href="<?php echo ROOT_URL ?>view/css/grid.css">
    <link rel="stylesheet" href="<?php echo ROOT_URL ?>view/css/admin-phanloai.css">
    <link rel="stylesheet" href="<?php echo ROOT_URL ?>view/css/quanly-cuahang.css">
    <link rel="stylesheet" href="<?php echo ROOT_URL ?>view/css/reset.css">
    <link rel="stylesheet" href="<?php echo ROOT_URL ?>view/css/editor.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
   <script>
        // $(textareaSelector)[0].setSelectionRange(0, 0);
        // $(textareaSelector).focus();
    </script>
</head>
<style>
    select,
    textarea {
        font-size: 1.4rem;
        color: #464646;
        padding: 1rem;
        /* resize: none; */
        border-radius: 5px;
        border: 1px solid #EE4D2D;
    }
    select:focus,
    input:focus,
    textarea:focus {
        border: 1px solid var(--color-primary);
        outline: none;
    }
    .table_responsive {
        overflow-y: auto;
    }
    .table_responsive::-webkit-scrollbar {
      width: 1em;
    }
     
    .table_responsive::-webkit-scrollbar-track {
      box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
    }
     
    .table_responsive::-webkit-scrollbar-thumb {
      background-color: darkgrey;
    }
    .td-button{
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    .td-button>a {
        margin-bottom: 5px;
        cursor: pointer;
    }

</style>
<body>
    <div class="wrapper">
        <header class="header">
            <div class="grid width">
                <div class="header-contain">
                    <div class="header-logo">
                        <a href="<?php echo ROOT_URL ?>" class="logo-link">
                            <img class="logo-img" src="<?php echo ROOT_URL ?>/view/images/logo/header-logo2.png" alt="">
                        </a>
                    </div>

                    <div class="header-title">
                        <span>Quản lý cửa hàng</span>
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
        <script>document.querySelector("textarea").setSelectionRange(0,0)</script>                                 