<style>
    .app-detail {
        margin-bottom: 8rem;
    }
</style>
        <div id="toast">
            
        </div>
        <div class="app-detail">
            
            <section class="section-heading-store">
                <div class="grid width">
                    <?php 
                        // var_dump($data['storeInfo']);
                        extract($data['storeInfo'][0]);
                    ?>
                    <div class="heading-store-contain row">
                        <div class="col l-5">
                            <div class="store-contain-left">
                                <img src="<?php echo ROOT_URL ?>view/uploads/avatarStore/<?=$avatar_store?>" alt="">
                            </div>
                        </div>
                        <div class="col l-7">
                            <div class="store-contain-right">
                                <div class="nav">
                                    <ul class="nav-list">
                                        <li class="nav-item">
                                            <a href="<?php echo ROOT_URL ?>" class="nav-link">Home</a>
                                            <i class="fa fa-angle-double-right"></i>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">TP.HCM</a>
                                            <i class="fa fa-angle-double-right"></i>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link"><?=$street_store?></a>
                                            <i class="fa fa-angle-double-right"></i>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link"><?=$name_store?></a>
                                            <i class="fa fa-angle-double-right"></i>
                                        </li>
                                    </ul>
                                </div>
                                <div class="store-kind">
                                    <div class="store-favorite">
                                        <div class="btn favorite-btn">
                                            <i class="fa fa-thumbs-up"></i>
                                            <span class="favorite-text">Yêu thích</span>
                                        </div>
                                    </div>
                                    <span>
                                        <?php 
                                        foreach ($data['tag'] as $tag) {
                                            if ($tag['id_menu'] == $fk_id_menu) { ?>
                                                <?=$tag['name_menu']?> -
                                        <?php     }
                                            }
                                        ?>
                                        <span>
                                            <a href="#" class="store-kind-link">
                                                Chi nhánh
                                            </a>
                                        </span>
                                    </span>
                                </div>
                                <div class="store-name">
                                    <h2>
                                        <span class="name-shop"><?=$name_store?> -</span>
                                        <span class="name-food"><?=$signature_food?></span>
                                    </h2>
                                </div>
                                <div class="store-address">
                                    <p class="heading-address">
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
                                    </p>
                                </div>
                                <div class="store-ratting">
                                    <div class="store-star">
                                        <span class="star-full">
                                            <i class="fa fa-star"></i>
                                        </span>
                                        <span class="star-full">
                                            <i class="fa fa-star"></i>
                                        </span>
                                        <span class="star-full">
                                            <i class="fa fa-star"></i>
                                        </span>
                                        <span class="star-full">
                                            <i class="fa fa-star"></i>
                                        </span>
                                        <span class="star-full">
                                            <i class="fa fa-star"></i>
                                        </span>
                                        <span class="star-full" style="display: none;">
                                            <i class="fa fa-star-half-full"></i>
                                        </span>
                                    </div>
                                    <span class="store-ratting-quantity">
                                        999+
                                    </span>
                                    <span class="store-polyfood">
                                        đánh giá trên Polyfood
                                    </span>
                                </div>
                                <div class="store-more-ratting">
                                    <a href="#" class="">Xem thêm lượt đánh giá từ Foody</a>
                                </div>
                                <div class="store-status">
                                    <div class="store-open">
                                        <span class="open-online">
                                            <?php 
                                                if ($status_store == 1) { ?>
                                                    <i class="fa fa-circle green"></i>
                                                    <span class="open-door green">
                                                        Mở cửa
                                                    </span>
                                            <?php  } else if ($status_store == 3) { ?>
                                                    <i class="fa fa-circle red"></i>
                                                    <span class="open-door red">
                                                        Ngưng hoạt động
                                                    </span>
                                            <?php } else { ?>
                                                    <i class="fa fa-circle red"></i>
                                                    <span class="open-door red">
                                                        Đóng cửa
                                                    </span>
                                            <?php }
                                            ?>
                                        </span>
                                    </div>
                                    <div class="store-time">
                                        <span class="time-clock">
                                            <i class="fa fa-clock-o"></i>
                                        </span>
                                        <span class="time-stamp">                                          
                                            6:00 - 22:30
                                        </span>
                                    </div>
                                </div>
                                <div class="store-cost">
                                    <i class="fa fa-money"></i>
                                    <span class="cost-detail">15.000 - 50.000</span>
                                </div>
                                <div class="store-line" style="border-bottom: 1px solid var(--color-blue);">

                                </div>
                                <div class="store-service">
                                    <div class="service-cost">
                                        <div class="service-cost-title">
                                            <span class="cost-title">Phí dịch vụ</span>
                                        </div>
                                        <div class="service-cost-contain">
                                            <span class="cost-contain">
                                                0.0% phí dịch vụ
                                            </span>
                                        </div>
                                    </div>
                                    <div class="service-by">
                                        <div class="service-by-title">
                                            <span class="by-title">Dịch vụ bởi</span>
                                        </div>
                                        <div class="service-by-contain">
                                            <span class="by-contain">Polyfood</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="section-body-store">
                <div class="grid width">
                    <div class="store-tab-name">
                        <h2>Thực đơn</h2>
                    </div>
                    <div class="body-store-contain row">
                        <div class="col l-9">
                            <div class="wrapper-contain">
                                <div class="store-contain-wrapper">
                                    <div class="store-contain-menu">
                                        <div class="store-menu">
                                            <ul class="store-menu-list">
                                                <?php 
                                                    foreach ($data['menu'] as $menu) { ?>
                                                    <!-- sactive class onclick -->
                                                    <li class="store-menu-item">
                                                        <a href="#" class="store-menu-link">
                                                        <?=$menu['name_menu_store']?>
                                                        </a>
                                                    </li>
                                                <?php  }
                                                ?>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="store-contain-detail">
                                        <div class="detail-promotion">
                                            <div class="promotion-item">
                                                <div class="promotion-content">
                                                    <span><i class="fa fa-tag"></i></span>
                                                    <span class="promotion-code"> Nhập "SIEUTIEC10": Giảm 10k, đơn tối thiểu 20k</span>
                                                </div>
                                                <button class="promotion-copy">
                                                    <span class="promotion-copy-code">Copy code</span>
                                                    <span class="promotion-copy-icon"><i class="fa fa-clipboard"></i></span>                                    
                                                </button>
                                            </div>
                                            <div class="promotion-item">
                                                <div class="promotion-content">
                                                    <span><i class="fa fa-tag"></i></span>
                                                    <span class="promotion-code"> Nhập "SIEUTIEC10": Giảm 10k, đơn tối thiểu 20k</span>
                                                </div>
                                                <button class="promotion-copy">
                                                    <span class="promotion-copy-code">Copy code</span>
                                                    <span class="promotion-copy-icon"><i class="fa fa-clipboard"></i></span>                                    
                                                </button>
                                            </div>
                                            <div class="promotion-item">
                                                <div class="promotion-content">
                                                    <span><i class="fa fa-tag"></i></span>
                                                    <span class="promotion-code"> Nhập "SIEUTIEC10": Giảm 10k, đơn tối thiểu 20k</span>
                                                </div>
                                                <button class="promotion-copy">
                                                    <span class="promotion-copy-code">Copy code</span>
                                                    <span class="promotion-copy-icon"><i class="fa fa-clipboard"></i></span>                                    
                                                </button>
                                            </div>
                                            <div class="promotion-item">
                                                <div class="promotion-content">
                                                    <span><i class="fa fa-tag"></i></span>
                                                    <span class="promotion-code"> Nhập "SIEUTIEC10": Giảm 10k, đơn tối thiểu 20k</span>
                                                </div>
                                                <button class="promotion-copy">
                                                    <span class="promotion-copy-code">Copy code</span>
                                                    <span class="promotion-copy-icon"><i class="fa fa-clipboard"></i></span>                                    
                                                </button>
                                            </div>
                                            <div class="promotion-item">
                                                <div class="promotion-content">
                                                    <span><i class="fa fa-tag"></i></span>
                                                    <span class="promotion-code"> Nhập "SIEUTIEC10": Giảm 10k, đơn tối thiểu 20k</span>
                                                </div>
                                                <button class="promotion-copy">
                                                    <span class="promotion-copy-code">Copy code</span>
                                                    <span class="promotion-copy-icon"><i class="fa fa-clipboard"></i></span>                                    
                                                </button>
                                            </div>
                                            <div class="promotion-item">
                                                <div class="promotion-content">
                                                    <span><i class="fa fa-tag"></i></span>
                                                    <span class="promotion-code"> Nhập "SIEUTIEC10": Giảm 10k, đơn tối thiểu 20k</span>
                                                </div>
                                                <button class="promotion-copy">
                                                    <span class="promotion-copy-code">Copy code</span>
                                                    <span class="promotion-copy-icon"><i class="fa fa-clipboard"></i></span>                                    
                                                </button>
                                            </div>
                                            <div class="promotion-item">
                                                <div class="promotion-content">
                                                    <span><i class="fa fa-tag"></i></span>
                                                    <span class="promotion-code"> Nhập "SIEUTIEC10": Giảm 10k, đơn tối thiểu 20k</span>
                                                </div>
                                                <button class="promotion-copy">
                                                    <span class="promotion-copy-code">Copy code</span>
                                                    <span class="promotion-copy-icon"><i class="fa fa-clipboard"></i></span>                                    
                                                </button>
                                            </div>
                                            <div class="promotion-item">
                                                <div class="promotion-content">
                                                    <span><i class="fa fa-tag"></i></span>
                                                    <span class="promotion-code"> Nhập "SIEUTIEC10": Giảm 10k, đơn tối thiểu 20k</span>
                                                </div>
                                                <button class="promotion-copy">
                                                    <span class="promotion-copy-code">Copy code</span>
                                                    <span class="promotion-copy-icon"><i class="fa fa-clipboard"></i></span>                                    
                                                </button>
                                            </div>
                                            <div class="promotion-item">
                                                <div class="promotion-content">
                                                    <span><i class="fa fa-tag"></i></span>
                                                    <span class="promotion-code"> Nhập "SIEUTIEC10": Giảm 10k, đơn tối thiểu 20k</span>
                                                </div>
                                                <button class="promotion-copy">
                                                    <span class="promotion-copy-code">Copy code</span>
                                                    <span class="promotion-copy-icon"><i class="fa fa-clipboard"></i></span>                                    
                                                </button>
                                            </div>
                                        </div>
                                        <div class="detail-food">
                                            <div class="food-search">
                                                <form action="#" name="searchkey" class="food-search-form">
                                                    <input type="text" class="food-search-input" placeholder="Tìm món">
                                                </form>
                                                <button class="food-search-button">
                                                    <i class="food-search-icon fa fa-search"></i>
                                                </button>
                                            </div>
                                            <div class="food-item">
                                                <div class="food-item-contain">
                                                    <div class="food-item-title">
                                                        <h3>Menu</h3>
                                                    </div>
                                                    <div class="food-item-list">
                                                        <div class="food-item-list-left">
                                                            <?php 
                                                                foreach ($data['menu'] as $menuFood) { ?>
                                                                <div class="left-name">
                                                                    <h3 id="name_menu_store"><?=$menuFood['name_menu_store']?></h3>
                                                                </div>
                                                            <?php  foreach ($data['food'] as $food) {
                                                                    if ($menuFood['id_menu_store'] == $food['fk_id_menustore']) { ?>
                                                                    <div class="row left-contain">
                                                                        <div class="col l-2 left-contain-img">
                                                                            <a href="#" class="left-contain-img-link">
                                                                                <img src="<?php echo ROOT_URL ?>public/upload/product/<?=$food['image_food']?>" alt="foods">
                                                                            </a>
                                                                        </div>
                                                                        <div class="col l-7 left-contain-infor">
                                                                            <h3 id="name_food"><?=$food['name_food']?></h3>
                                                                            <div class="left-contain-order">
                                                                                <span class="left-contain-ordered">
                                                                                    Đã được đặt
                                                                                </span>
                                                                                <span class="left-contain-quantity">
                                                                                        &nbsp;
                                                                                        500+
                                                                                </span>
                                                                                <span class="left-contain-time">
                                                                                        lần
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col l-3 food-item-add">
                                                                            <div class="food-item-add-contain">
                                                                                <div class="food-item-price">
                                                                                    <div class="old-price">
                                                                                        <span class="price-line">
                                                                                           50.000
                                                                                        </span>
                                                                                        <span class="price-line-unit">
                                                                                                đ
                                                                                        </span>
                                                                                    </div>
                                                                                    <div class="new-price">
                                                                                        <span class="price-noline">
                                                                                        <?=number_format($food['price_food']) ?>
                                                                                        </span>
                                                                                        <span class="price-new-unit">
                                                                                            đ
                                                                                        </span>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="food-item-addbutton" id="food-item-addbutton">
                                                                                    <form action="">
                                                                                        <input class="addbutton-input" type="hidden" value="<?=$food['id_food']?>">
                                                                                        <input class="addbutton-input-name_<?=$food['id_food']?>" type="hidden" value="<?=$food['name_food']?>">
                                                                                        <input class="addbutton-input-store_<?=$food['id_food']?>" type="hidden" value="<?=$food['fk_food_id_store']?>">
                                                                                        <input class="addbutton-input-price_<?=$food['id_food']?>" type="hidden" value="<?=$food['price_food']?>">
                                                                                        <input class="addbutton-input-quantity_<?=$food['id_food']?>" type="hidden" value="1">
                                                                                        <span id="addbutton" class="addbutton" <?=$data['toast']?>>
                                                                                            <i id="addbutton-icon" data-id="<?=$food['id_food']?>" class="fa fa-plus-square"></i>
                                                                                        </span>
                                                                                    </form>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div> 
                                                            <?php  }
                                                                }  
                                                              }
                                                            ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col l-3">
                            <div class="bill-contain" id="bill-contain">
                                <div class="bill-heading" id="bill-heading">
                                    <div class="bill-button">
                                        <button class="bill-portion">
                                            <span class="portion-food">
                                                <?php
                                                    extract($data['indexCart']);
                                                    if(isset($_SESSION['cart'])) {
                                                        if($_SESSION['cart']==[]) {
                                                            echo  sizeof($_SESSION['cart']);
                                                        } else {
                                                            echo "0";
                                                        } 
                                                    } else {
                                                        echo "0";
                                                    } 
                                                ?>
                                            </span>
                                            phần
                                            &nbsp;-&nbsp;
                                            <span class="portion-people">
                                                0
                                            </span>
                                            người
                                        </button>
                                        <!-- <button type="button" class="bill-delete" id="bill-delete">
                                            Xóa 
                                        </button> -->
                                    </div>
                                    <div class="bill-creator">
                                        Đơn hàng tạo bởi
                                        <span class="bill-creator-name">
                                            <?php if (isset($_SESSION['user'])) {
                                                echo $_SESSION['user'][0]['name_account'];
                                            } else {

                                            } ?>
                                        </span>
                                    </div>
                                </div>
                                <div class="bill-ordering" id="bill-ordering">
                                    <div class="ordering-detail">
                                        <ul class="ordering-list" id="ordering-list">                                              
                                            <!-- <button type="button" class="bill-delete" id="bill-delete" style="margin: 1rem 0 0 1rem;">
                                                    Xóa
                                                </button>                    
                                            <li class="ordering-item">
                                                <div class="ordering-edit">
                                                    <button id="ordering-plus" class="fa fa-plus-square"></button>
                                                    <span class="ordering-quantity">1</span>
                                                    <input name="quantity" type="text" class="ordering-quantity" value="1" min="1" max="50" id="input-quantity">
                                                    <input type="number" class="ordering-quantity" value="1" min="1" max="50" id="input-quantity">
                                                    <button id="ordering-minus" class="fa fa-minus-square"></button>
                                                    <span class="ordering-name">1 nem nướng</span>
                                                </div>
                                                <div class="ordering-note">
                                                    <input type="text" class="ordering-input" placeholder="Thêm chú thích...">
                                                    <span class="ordering-price">
                                                        <span hidden class="ordering-price-number">65000</span>
                                                        <input class="ordering-price-number" value="10000">
                                                        <span class="ordering-price-total">65000</span>
                                                        <span class="ordering-price-unit">đ</span>
                                                    </span>
                                                </div>
                                            </li> -->
                                        </ul>
                                    </div>                                                                                                   
                                </div>
                                <!-- <div class="bill-adding">
                                    <div class="row">
                                        <div class="col l-8">Cộng</div>
                                        <div class="col l-4">
                                            <span class="adding-price">
                                                <span class="adding-number">0</span>
                                                <span class="adding-unit">đ</span>
                                            </span>
                                        </div>
                                    </div>
                                </div> -->
                                <div class="bill-input">
                                    Nhập mã khuyến mãi ở bước hoàn tất
                                </div>
                                <!-- <div class="bill-total">
                                    <div class="row">
                                        <div class="col l-8">Tổng cộng</div>
                                        <div class="col l-4">
                                            <span class="total-price">
                                                <span class="total-number">0</span>
                                                <span class="total-unit">đ</span>
                                            </span>
                                        </div>
                                    </div>
                                </div> -->
                                <div class="bill-confirm">
                                    <button name="#" class="confirm-button" id="confirm-button">
                                        <span class="confirm-icon">
                                            <i class="fa fa-check-circle-o"></i>
                                        </span>
                                            Đặt trước
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    <script src="<?php echo ROOT_URL ?>view/js/modal.js">
    </script>
    <script src="<?php echo ROOT_URL ?>view/js/ajax_database.js">
    </script>
    <script src="<?php echo ROOT_URL ?>view/js/toast.js">
    </script>