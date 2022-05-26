<?php
    if(!empty($_GET['alert'])) {
        $mess = unserialize(urldecode($_GET['alert']));
        foreach ($mess as $key => $val) {
        echo '<span style="color: green; font-size:14px;">'.$val.'</span>';
        }
    }
?>
<style>
    .order-left::before {
        display: block;
        content: "";
        position: absolute;
        width: 2px;
        height: 26rem;
        background: var(--color-gray);
        top: 16px;
        right: 0;
    }
</style>
<div class="modal" id="modal">
        <div class="modal-overlay">
        </div>
        <div class="modal-content" id="modal-content">
            <span class="modal-close" id="modal-close">&times;</span>
            <div class="modal-header">
                <p class="modal-title">Giỏ hàng</p>
            </div>
            <?php 
                // var_dump($data['storeInfo']);
                extract($data['storeInfo'][0]);
            ?>
            <div class="modal-body">
                <form action="<?php echo ROOT_URL ?>product/addBillDetail" class="form" id="" method="POST" autocomplete="off">
                    <div class="row">
                        <div class="col l-6 order-left">
                            <div class="order-left-top">
                                <img src="<?=ROOT_URL?>view/uploads/avatarStore/<?=$avatar_store?>" alt="" class="order-left-img">
                                <div class="order-left-detail">
                                    <div class="order-left-name">
                                        <span class="name-shop"><?=$name_store?></span>
                                        <span class="name-combine">-</span>
                                        <span class="name-food"><?=$signature_food?></span>
                                        <span class="name-combine">-</span>
                                        <span class="name-food"><?=$street_store?></span>
                                    </div>
                                    <div class="order-left-addresss">
                                        <span class="address-street"><?=$number_store?> <?=$street_store?>,&nbsp;</span>
                                        <span class="address-ward">
                                            <?php foreach($data['ward'] as $wardAdd) {
                                                if ($ward_store == $wardAdd['id'])
                                                echo $wardAdd['_name'];
                                            }?>,&nbsp;</span>
                                        <span class="address-district">
                                            <?php foreach($data['district'] as $districtAdd) {
                                                if ($district_store == $districtAdd['id'])
                                                echo $districtAdd['_name'];
                                            }?>,&nbsp;</span>
                                        <span class="address-province">
                                            <?php foreach($data['province'] as $provinceAdd) {
                                                if ($city_store == $provinceAdd['id'])
                                                echo $provinceAdd['_name'];
                                            }?>&nbsp;</span>
                                    </div>
                                </div>
                            </div>
                            <div class="order-left-body">
                                <div class="order-left-info">
                                    <div class="order-left-heading">
                                        <img src="<?=ROOT_URL?>view/images/icon/icon-user.svg" alt="">
                                        <span>
                                            Thông tin người đặt
                                        </span>
                                    </div>
                                    <div class="order-left-data">
                                        <div class="data-item">
                                            <p class="data-label">Họ và tên</p>
                                            <input class="data-input" type="text" name="name_customer" id="" placeholder="Nhập họ tên" required>
                                        </div>
                                        <div class="data-item">
                                            <p class="data-label">Số điện thoại</p>
                                            <input class="data-input" type="tel" name="phone_customer" id="" placeholder="Nhập số điện thoại" required>
                                        </div>
                                        <div class="data-item">
                                            <p class="data-label">Địa chỉ</p>
                                            <input class="data-input" type="text" name="address_customer" id="" placeholder="Nhập địa chỉ" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col l-6 order-right">
                            <div class="order-right-top">
                                <div class="order-right-top-heading">
                                    <span class="order-right-title">Chi tiết đơn hàng</span>
                                    <a href="#">
                                        <i class="fa fa-angle-right"></i>
                                    </a>
                                </div>
                                <ul class="order-right-list ordering-item" id="list-orders">
                                    <!-- <li class="order-right-item">
                                        <span class="order-right-item-number">1</span>
                                        <div class="order-right-item-name">
                                            <span>1 trứng bắc thảo</span>
                                        </div>
                                        <div class="order-right-item-price">
                                            <span class="right-item-number">45.000</span>
                                            <span class="right-item-unit">đ</span>
                                        </div>
                                    </li>
                                    <li class="order-right-item">
                                        <span class="order-right-item-number">2</span>
                                        <div class="order-right-item-name">
                                            <span>1 gà 45 kí</span>
                                        </div>
                                        <div class="order-right-item-price">
                                            <span class="right-item-number">45.000</span>
                                            <span class="right-item-unit">đ</span>
                                        </div>
                                    </li> -->
                                </ul>
                                <div class="order-right-price"></div>
                            </div>
                            <div class="order-right-body">
                                <div class="order-right-total">
                                    <div class="row">
                                        <div class="col l-8">
                                                Tổng cộng
                                                <span class="order-right-total-number">0</span> 
                                                phần
                                        </div>
                                        <div class="col l-4">
                                            <span class="right-total-price">
                                                <span class="right-total-number total-order-bill">0</span>
                                            <span class="right-total-unit">đ</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="order-right-transport">
                                    <div class="row">
                                        <div class="col l-8">
                                            Phí vận chuyển
                                        </div>
                                        <div class="col l-4">
                                            <span class="right-total-price">
                                                <span class="right-total-number">25.000</span>
                                                <span class="right-total-unit">đ</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="order-right-promotion">
                                    <div class="row">
                                        <div class="col l-9">
                                            <span class="order-promotion-text">
                                                Mã khuyến mãi
                                            </span>
                                            <input class="order-promotion-input" type="text" name="" id="" placeholder="Nhập mã">
                                        </div>
                                        <div class="col l-3">
                                            <input class="order-promotion-button" type="submit" name="" id="" value="Áp dụng">
                                        </div>
                                    </div>
                                </div>
                                <div class="order-right-paymethod">
                                    <p class="paymethod-title">Phương thức thanh toán</p>
                                    <div class="paymethod-group">
                                        <div class="paymethod-action">
                                            <span class="paymethod-action-text">
                                                Tiền mặt
                                            </span>
                                            <input type="radio" checked name="payment_methods" id="" value="1">
                                        </div>
                                        <div class="paymethod-action">
                                            <span class="paymethod-action-text">
                                                ATM/Banking
                                            </span>
                                            <input type="radio" name="payment_methods" id="" value="2">
                                        </div>
                                        <div class="paymethod-action">
                                            <span class="paymethod-action-text">
                                                Ví Momo
                                            </span>
                                            <input type="radio" name="payment_methods" id="" value="3">
                                        </div>
                                    </div>
                                </div>
                                <div class="order-right-billtotal">
                                    <div class="row">
                                        <div class="col l-8">Tổng cộng</div>
                                        <input type="text" class="total-bill" hidden value="" name="totalBill" id="totalBill">
                                        <div class="col l-4">
                                            <span class="total-price">
                                                <span name="total" class="total-number total-bill" id="totalBill"></span>
                                                <span class="total-unit">đ</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="order-right-note">
                                    <textarea placeholder="Ví dụ: Tòa nhà ABC, lầu 8, cho thêm 2 ly nhựa...." name="note_bill"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="button-order-confirm">
                        <input name="id_store" type="text" hidden value="<?=$id_store?>">
                        <input type="submit" value="Đặt hàng" name="cartcheckout" id="">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="<?php echo ROOT_URL ?>view/js/ajax_database.js"></script>
  