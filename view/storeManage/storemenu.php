<div class="main" style="padding: 4rem 6rem;">
    <div class="sidebar">
        <?php
            $tableStore = $_SESSION['store'];
            $storeInfo = $tableStore[0];
            // var_dump($storeInfo);
            extract($storeInfo);
        ?>
        <div class="sidebar-items  hide-text">
            <a href="<?php echo ROOT_URL ?>storeManage&id=<?=$id_store?>"><i class="fas fa-store" style="width: 37px"></i><span>Thông tin gian hàng</span></a>
        </div>
        <div class="sidebar-items  hide-text">
            <a href="<?php echo ROOT_URL ?>storeManage/addmenustore"><i class="fas fa-bars" style="width: 37px;"></i><span>Thực đơn</span></a>
        </div>
        <div class="sidebar-items  hide-text">
            <a href="<?php echo ROOT_URL ?>storeManage/addfood"><i class="fas fa-images" style="width: 37px;"></i><span>Món ăn</span></a>
        </div>
        <div class="sidebar-items  hide-text">
            <a href="<?php echo ROOT_URL ?>storeManage/listbill&id=<?=$id_store?>"><i class="fas fa-info" style="width: 37px;"></i><span>Đơn hàng</span></a>
        </div>
    </div>
