<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-white col-2" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom">
                <a href="<?php echo ROOT_URL ?>loginadmin/dashboard"> <img src="<?php echo ROOT_URL ?>view/images/logo/header-logo2.png" alt=""></a>
                </div>
            <div class="list-group list-group-flush my-3">
                <div class="item-list">
                        <a href="<?php echo ROOT_URL ?>loginadmin/dashboard" class="list-group-item list-group-item-action bg-transparent second-text active"><i
                        class="fas fa-home me-2"></i>Trang chủ</a>
                </div>
                <div class="item-list">
                        <a href="<?php echo ROOT_URL ?>adminmenu" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-hamburger me-2"></i>Menu</a>
                </div>  
                <div class="item-list">
                        <a href="<?php echo ROOT_URL ?>adminstore" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-store me-2"></i>Cửa hàng</a>
                </div>  
                <div class="item-list">
                        <a href="<?php echo ROOT_URL ?>adminAccount" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-user me-2"></i>Tài khoản</a>
                </div>  
                <div class="item-list">
                        <a href="<?php echo ROOT_URL ?>loginadmin/logout" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-power-off me-2"></i>Đăng xuất</a>
                </div>      
            </div>
        </div>
        <!-- /#sidebar-wrapper -->