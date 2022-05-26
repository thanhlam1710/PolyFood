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
<div class="modal-content" id="modal-content" style="margin-top: 12rem; margin-bottom: 8rem;">
            <!-- <span class="modal-close" id="modal-close">&times;</span> -->
            <div class="modal-header">
                <p class="modal-title">Xác nhận đơn hàng</p>
            </div>
            <?php  
                extract($data['listbill'][0]); 
                foreach($_SESSION['cart'] as $cart) {   
                }
            ?>
            <?php ?>
            <div class="modal-body">
                <form action="<?php echo ROOT_URL ?>cartconfirm/addOrder" class="form" id="" method="POST">
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
                                                if ($district_store== $districtAdd['id'])
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
                                        <img src="<?php echo ROOT_URL ?>view/images/icon/icon-user.svg" alt="">
                                        <span>
                                            Thông tin người đặt
                                        </span>
                                    </div>
                                    <div class="order-left-data">
                                        <div class="data-item">
                                            <p class="data-label">Họ và tên</p>
                                            <input class="data-input" value="<?=$name_customer?>" type="text" name="name_customers" id="" disabled>
                                        </div>
                                        <div class="data-item">
                                            <p class="data-label">Số điện thoại</p>
                                            <input class="data-input" value="<?=$phone_customer?>" type="tel" name="phone_customers" id="" disabled>
                                        </div>
                                        <div class="data-item">
                                            <p class="data-label">Địa chỉ</p>
                                            <input class="data-input" value="<?=$address_customer?>" type="text" name="address_customer" id="" disabled>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col l-6 order-right">
                            <div class="order-right-top">
                                <div class="order-right-top-heading">
                                    <span class="order-right-title">Chi tiết đơn hàng</span>
                                    <!-- <a href="#">
                                        <i class="fa fa-angle-right"></i>
                                    </a> -->
                                </div>
                                 
                                    <ul class="order-right-list">
                                        <?php 

                                        ?>
                                    </ul>
                                <div class="order-right-price"></div>
                            </div>
                            <div class="order-right-body">
                                <div class="order-right-total">              
                                    <div class="row">
                                        <div class="col l-8">
                                            Tổng cộng                                                                                  
                                                <span class="order-right-total">
                                                    <input name="number_food" type="text" hidden value=" <?php echo $data['temp'];?>">
                                                    <?php echo $data['temp'];?>
                                                </span>
                                               phần                                                                         
                                        </div>
                                        <div class="col l-4">
                                            <span class="right-total-price">
                                                <span class="right-total-number"><?=$data['listbill'][0]['total_bill']?></span>
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
                                <!-- <div class="order-right-promotion">
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
                                </div> -->
                                <div class="order-right-paymethod">
                                    <p class="paymethod-title">Phương thức thanh toán</p>
                                    <div class="paymethod-group">
                                    <?php 
                                        if ($payment_methods == 1) { ?>
                                            <div class="paymethod-action">
                                            <span class="paymethod-action-text">
                                                Tiền mặt
                                            </span>
                                            <input type="radio" name="payment_methods" id="" checked value="">
                                        </div>
                                        <?php  } else if ($payment_methods == 2) {  ?>                         
                                            <div class="paymethod-action">
                                            <span class="paymethod-action-text">
                                                ATM/Banking
                                            </span>
                                            <input type="radio" name="payment_methods" id="" checked value="">
                                        </div>
                                        <?php } else { ?>
                                            <div class="paymethod-action">
                                            <span class="paymethod-action-text">
                                                Ví Momo
                                            </span>
                                            <input type="radio" name="payment_methods" id="" checked value="">
                                            </div>
                                        <?php } ?>                                                                
                                    </div>
                                </div>
                                <div class="order-right-billtotal" style="margin-bottom:1rem;">
                                    <div class="row">
                                        <div class="col l-8">Tổng cộng</div>
                                            <div class="col l-4">
                                                <span class="total-price">
                                                    <input name="total_order" type="text" hidden value="<?=$total_bill?>">
                                                    <span class="total-number"><?=$total_bill?></span>
                                                    <span class="total-unit">đ</span>                                   
                                                </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="note-textarea"><label style="font-weight:bold; color: var(--color-text);" for="">Ghi chú</label></div>
                                <div class="order-right-note">
                                    <textarea readonly name="note_order"><?=$note_bill?></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <input type="text" hidden value="<?=$id_bill?>" name="id_bill">
                    <input type="text" hidden value="<?=$cart['id_food']?>" name="id_food">
                    <div class="button-order-confirm">
                        <input name="cartorder" type="submit" value="Hoàn tất đặt hàng" id="">
                    </div>
                </form>
            </div>
        </div>
    <script src="<?php echo ROOT_URL ?>view/js/cart.js">
    </script>
    <script src="<?php echo ROOT_URL ?>view/js/addcart.js">
    </script>