
<?php
    // echo "This is homepage<br>";
    // foreach($data['menuid'] as $val){
    //     echo 'gia tri = '.$val['name_menu'].'<br/>';
    // }
?>
<div class="main">
    <section class="section-store">
        <div class="store-container width border-radius-container">
            <div class="search-clarify">
                <nav class="clarify-menu">
                    <ul class="clarify-list">
                        <li id="hide" class="clarify-item" onclick="showPane(0,'#fff','5px');">
                            <span class="dropdown-toggle">
                                Khu vực
                                <i class="fa fa-angle-down"></i>
                            </span>
                            <div id="dropdown-district" class="dropdown-visible">
                                <div class="row dropdown-contain">
                                    <div class="col l-4 dropdown-checkbox">
                                        <input type="checkbox" checked>
                                        <label for="#">Quận 1</label>
                                    </div>
                                    <div class="col l-4 dropdown-checkbox">
                                        <input type="checkbox" name="" id="checkbox" value="">
                                        <label for="#">Quận 2</label>
                                    </div>
                                    <div class="col l-4 dropdown-checkbox">
                                        <input type="checkbox" name="" id="" value="">
                                        <label for="#">Quận 3</label>
                                    </div>
                                    <div class="col l-4 dropdown-checkbox">
                                        <input type="checkbox" name="" id="" value="">
                                        <label for="#">Quận 4</label>
                                    </div>
                                    <div class="col l-4 dropdown-checkbox">
                                        <input type="checkbox" name="" id="" value="">
                                        <label for="#">Quận 5</label>
                                    </div>
                                    <div class="col l-4 dropdown-checkbox">
                                        <input type="checkbox" name="" id="" value="">
                                        <label for="#">Quận 6</label>
                                    </div>
                                    <div class="col l-4 dropdown-checkbox">
                                        <input type="checkbox" name="" id="" value="">
                                        <label for="#">Quận 7</label>
                                    </div>
                                    <div class="col l-4 dropdown-checkbox">
                                        <input type="checkbox" name="" id="" value="">
                                        <label for="#">Quận 8</label>
                                    </div>
                                    <div class="col l-4 dropdown-checkbox">
                                        <input type="checkbox" name="" id="" value="">
                                        <label for="#">Quận 9</label>
                                    </div>
                                    <div class="col l-4 dropdown-checkbox">
                                        <input type="checkbox" name="" id="" value="">
                                        <label for="#">Quận Phú Nhuận</label>
                                    </div>
                                    <div class="col l-4 dropdown-checkbox">
                                        <input type="checkbox" name="" id="" value="">
                                        <label for="#">Quận Bình Thạnh</label>
                                    </div>
                                    <div class="col l-4 dropdown-checkbox">
                                        <input type="checkbox" name="" id="" value="">
                                        <label for="#">Quận Tân Bình</label>
                                    </div>
                                    <div class="col l-4 dropdown-checkbox">
                                        <input type="checkbox" name="" id="" value="">
                                        <label for="#">Quận Gò Vấp</label>
                                    </div>
                                    <div class="col l-4 dropdown-checkbox">
                                        <input type="checkbox" name="" id="" value="">
                                        <label for="#">Quận Tân Bình</label>
                                    </div>
                                    <div class="col l-4 dropdown-checkbox">
                                        <input type="checkbox" name="" id="" value="">
                                        <label for="#">Quận Gò Vấp</label>
                                    </div>
                                    <div class="col l-4 dropdown-checkbox">
                                        <input type="checkbox" name="" id="" value="">
                                        <label for="#">Quận Tân Bình</label>
                                    </div>
                                    <div class="col l-4 dropdown-checkbox">
                                        <input type="checkbox" name="" id="" value="">
                                        <label for="#">Quận Gò Vấp</label>
                                    </div>
                                    <div class="col l-4 dropdown-checkbox">
                                        <input type="checkbox" name="" id="" value="">
                                        <label for="#">Quận Tân Bình</label>
                                    </div>
                                    <div class="col l-4 dropdown-checkbox">
                                        <input type="checkbox" name="" id="" value="">
                                        <label for="#">Quận Gò Vấp</label>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li id="" class="clarify-item">
                            <span class="dropdown-toggle" onclick="showPane(1,'#fff','5px');">
                                    Phân loại
                                <i class="fa fa-angle-down"></i>
                            </span>
                            <div id="dropdown-cate" class="dropdown-visible">
                                <div class="row dropdown-contain">
                                    <div class="col l-4 dropdown-checkbox">
                                        <input type="checkbox" checked>
                                        <label for="#">Đồ ăn</label>
                                    </div>
                                    <div class="col l-4 dropdown-checkbox">
                                        <input type="checkbox" name="" id="checkbox" value="">
                                        <label for="#">Đồ uống</label>
                                    </div>
                                    <div class="col l-4 dropdown-checkbox">
                                        <input type="checkbox" name="" id="" value="">
                                        <label for="#">Đồ chay</label>
                                    </div>
                                    <div class="col l-4 dropdown-checkbox">
                                        <input type="checkbox" name="" id="" value="">
                                        <label for="#">Bánh kem</label>
                                    </div>
                                    <div class="col l-4 dropdown-checkbox">
                                        <input type="checkbox" name="" id="" value="">
                                        <label for="#">Vỉa hè</label>
                                    </div>
                                    <div class="col l-4 dropdown-checkbox">
                                        <input type="checkbox" name="" id="" value="">
                                        <label for="#">Món lẩu</label>
                                    </div>
                                    <div class="col l-4 dropdown-checkbox">
                                        <input type="checkbox" name="" id="" value="">
                                        <label for="#">Homemade</label>
                                    </div>
                                    <div class="col l-4 dropdown-checkbox">
                                        <input type="checkbox" name="" id="" value="">
                                        <label for="#">Tráng miệng</label>
                                    </div>
                                    <div class="col l-4 dropdown-checkbox">
                                        <input type="checkbox" name="" id="" value="">
                                        <label for="#">Pizza/Hambuger</label>
                                    </div>
                                    <div class="col l-4 dropdown-checkbox">
                                        <input type="checkbox" name="" id="" value="">
                                        <label for="#">Món gà</label>
                                    </div>
                                    <div class="col l-4 dropdown-checkbox">
                                        <input type="checkbox" name="" id="" value="">
                                        <label for="#">Mì phở</label>
                                    </div>
                                    <div class="col l-4 dropdown-checkbox">
                                        <input type="checkbox" name="" id="" value="">
                                        <label for="#">Shushi</label>
                                    </div>
                                    <div class="col l-4 dropdown-checkbox">
                                        <input type="checkbox" name="" id="" value="">
                                        <label for="#">Cơm hộp</label>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </nav>
                <div class="clarify-tag">
                    <div class="tag-detail">
                        Phân loại:&nbsp;
                        <span class="tag-number">
                            (1)
                        </span>
                        <span class="tag-delete">
                            <i class="fa fa-times-circle"></i>
                        </span>
                    </div>
                    <div class="tag-detail">
                        Khu vực:&nbsp;
                        <span class="tag-number">
                            (1)
                        </span>
                        <span class="tag-delete">
                            <i class="fa fa-times-circle"></i>
                        </span>
                    </div>
                </div>
            </div>
            <div class="row gutter">
                <div class="col l-2-4 m-4 c-6">
                    <div class="product-item">
                        <a href="#" class="product-link">
                            <div class="product-img">
                                <img src="<?php echo ROOT_URL ?>view/images/product/rice.jpeg" alt="">
                                <div class="product-tag">
                                    <i class="tag-icon fa fa-heart-o"></i>
                                    <span class="tag-like">Yêu thích</span>
                                </div>
                            </div>
                            <div class="product-text">
                                <div class="product-heading ">
                                    <h2 class="heading-name">
                                        <span class="name-shop">Gia Lai quán</span>
                                        <span class="name-combine">-</span>
                                        <span class="name-food">Bún thịt nướng</span>
                                    </h2>
                                    <p class="heading-address">
                                        <span class="address-street">169 Huỳnh Văn Nghệ,&nbsp;</span>
                                        <span class="address-ward">P.12,&nbsp;</span>
                                        <span class="address-district">Gò Vấp,&nbsp;</span>
                                        <span class="address-province">Tp.Hồ Chí Minh&nbsp;</span>
                                    </p>
                                </div>
                                <div class="product-promotion">
                                    <i class="promotion-icon fa fa-tag"></i>
                                    <span class="promotion-text">Deal hot</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col l-2-4 m-4 c-6">
                    <div class="product-item">
                        <a href="#" class="product-link">
                            <div class="product-img">
                                <img src="<?php echo ROOT_URL ?>view/images/product/chicken.jpg" alt="">
                                <div class="product-tag">
                                    <i class="tag-icon fa fa-heart-o"></i>
                                    <span class="tag-like">Yêu thích</span>
                                </div>
                            </div>
                            <div class="product-text">
                                <div class="product-heading ">
                                    <h2 class="heading-name">
                                        <span class="name-shop">Gia Lai quán</span>
                                        <span class="name-combine">-</span>
                                        <span class="name-food">Bún thịt nướng</span>
                                    </h2>
                                    <p class="heading-address">
                                        <span class="address-street">169 Huỳnh Văn Nghệ,&nbsp;</span>
                                        <span class="address-ward">P.12,&nbsp;</span>
                                        <span class="address-district">Gò Vấp,&nbsp;</span>
                                        <span class="address-province">Tp.Hồ Chí Minh&nbsp;</span>
                                    </p>
                                </div>
                                <div class="product-promotion">
                                    <i class="promotion-icon fa fa-tag"></i>
                                    <span class="promotion-text">Deal hot</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col l-2-4 m-4 c-6">
                    <div class="product-item">
                        <a href="#" class="product-link">
                            <div class="product-img">
                                <img src="<?php echo ROOT_URL ?>view/images/product/chicken.jpg" alt="">
                                <div class="product-tag">
                                    <i class="tag-icon fa fa-heart-o"></i>
                                    <span class="tag-like">Yêu thích</span>
                                </div>
                            </div>
                            <div class="product-text">
                                <div class="product-heading ">
                                    <h2 class="heading-name">
                                        <span class="name-shop">Gia Lai quán</span>
                                        <span class="name-combine">-</span>
                                        <span class="name-food">Bún thịt nướng</span>
                                    </h2>
                                    <p class="heading-address">
                                        <span class="address-street">169 Huỳnh Văn Nghệ,&nbsp;</span>
                                        <span class="address-ward">P.12,&nbsp;</span>
                                        <span class="address-district">Gò Vấp,&nbsp;</span>
                                        <span class="address-province">Tp.Hồ Chí Minh&nbsp;</span>
                                    </p>
                                </div>
                                <div class="product-promotion">
                                    <i class="promotion-icon fa fa-tag"></i>
                                    <span class="promotion-text">Deal hot</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col l-2-4 m-4 c-6">
                    <div class="product-item">
                        <a href="#" class="product-link">
                            <div class="product-img">
                                <img src="<?php echo ROOT_URL ?>view/images/product/chicken.jpg" alt="">
                                <div class="product-tag">
                                    <i class="tag-icon fa fa-heart-o"></i>
                                    <span class="tag-like">Yêu thích</span>
                                </div>
                            </div>
                            <div class="product-text">
                                <div class="product-heading ">
                                    <h2 class="heading-name">
                                        <span class="name-shop">Gia Lai quán</span>
                                        <span class="name-combine">-</span>
                                        <span class="name-food">Bún thịt nướng</span>
                                    </h2>
                                    <p class="heading-address">
                                        <span class="address-street">169 Huỳnh Văn Nghệ,&nbsp;</span>
                                        <span class="address-ward">P.12,&nbsp;</span>
                                        <span class="address-district">Gò Vấp,&nbsp;</span>
                                        <span class="address-province">Tp.Hồ Chí Minh&nbsp;</span>
                                    </p>
                                </div>
                                <div class="product-promotion">
                                    <i class="promotion-icon fa fa-tag"></i>
                                    <span class="promotion-text">Deal hot</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col l-2-4 m-4 c-6">
                    <div class="product-item">
                        <a href="#" class="product-link">
                            <div class="product-img">
                                <img src="<?php echo ROOT_URL ?>view/images/product/chicken.jpg" alt="">
                                <div class="product-tag">
                                    <i class="tag-icon fa fa-heart-o"></i>
                                    <span class="tag-like">Yêu thích</span>
                                </div>
                            </div>
                            <div class="product-text">
                                <div class="product-heading ">
                                    <h2 class="heading-name">
                                        <span class="name-shop">Gia Lai quán</span>
                                        <span class="name-combine">-</span>
                                        <span class="name-food">Bún thịt nướng</span>
                                    </h2>
                                    <p class="heading-address">
                                        <span class="address-street">169 Huỳnh Văn Nghệ,&nbsp;</span>
                                        <span class="address-ward">P.12,&nbsp;</span>
                                        <span class="address-district">Gò Vấp,&nbsp;</span>
                                        <span class="address-province">Tp.Hồ Chí Minh&nbsp;</span>
                                    </p>
                                </div>
                                <div class="product-promotion">
                                    <i class="promotion-icon fa fa-tag"></i>
                                    <span class="promotion-text">Deal hot</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col l-2-4 m-4 c-6">
                    <div class="product-item">
                        <a href="#" class="product-link">
                            <div class="product-img">
                                <img src="<?php echo ROOT_URL ?>view/images/product/chicken.jpg" alt="">
                                <div class="product-tag">
                                    <i class="tag-icon fa fa-heart-o"></i>
                                    <span class="tag-like">Yêu thích</span>
                                </div>
                            </div>
                            <div class="product-text">
                                <div class="product-heading ">
                                    <h2 class="heading-name">
                                        <span class="name-shop">Gia Lai quán</span>
                                        <span class="name-combine">-</span>
                                        <span class="name-food">Bún thịt nướng</span>
                                    </h2>
                                    <p class="heading-address">
                                        <span class="address-street">169 Huỳnh Văn Nghệ,&nbsp;</span>
                                        <span class="address-ward">P.12,&nbsp;</span>
                                        <span class="address-district">Gò Vấp,&nbsp;</span>
                                        <span class="address-province">Tp.Hồ Chí Minh&nbsp;</span>
                                    </p>
                                </div>
                                <div class="product-promotion">
                                    <i class="promotion-icon fa fa-tag"></i>
                                    <span class="promotion-text">Deal hot</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col l-2-4 m-4 c-6">
                    <div class="product-item">
                        <a href="#" class="product-link">
                            <div class="product-img">
                                <img src="<?php echo ROOT_URL ?>view/images/product/chicken.jpg" alt="">
                                <div class="product-tag">
                                    <i class="tag-icon fa fa-heart-o"></i>
                                    <span class="tag-like">Yêu thích</span>
                                </div>
                            </div>
                            <div class="product-text">
                                <div class="product-heading ">
                                    <h2 class="heading-name">
                                        <span class="name-shop">Gia Lai quán</span>
                                        <span class="name-combine">-</span>
                                        <span class="name-food">Bún thịt nướng</span>
                                    </h2>
                                    <p class="heading-address">
                                        <span class="address-street">169 Huỳnh Văn Nghệ,&nbsp;</span>
                                        <span class="address-ward">P.12,&nbsp;</span>
                                        <span class="address-district">Gò Vấp,&nbsp;</span>
                                        <span class="address-province">Tp.Hồ Chí Minh&nbsp;</span>
                                    </p>
                                </div>
                                <div class="product-promotion">
                                    <i class="promotion-icon fa fa-tag"></i>
                                    <span class="promotion-text">Deal hot</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col l-2-4 m-4 c-6">
                    <div class="product-item">
                        <a href="#" class="product-link">
                            <div class="product-img">
                                <img src="<?php echo ROOT_URL ?>view/images/product/chicken.jpg" alt="">
                                <div class="product-tag">
                                    <i class="tag-icon fa fa-heart-o"></i>
                                    <span class="tag-like">Yêu thích</span>
                                </div>
                            </div>
                            <div class="product-text">
                                <div class="product-heading ">
                                    <h2 class="heading-name">
                                        <span class="name-shop">Gia Lai quán</span>
                                        <span class="name-combine">-</span>
                                        <span class="name-food">Bún thịt nướng</span>
                                    </h2>
                                    <p class="heading-address">
                                        <span class="address-street">169 Huỳnh Văn Nghệ,&nbsp;</span>
                                        <span class="address-ward">P.12,&nbsp;</span>
                                        <span class="address-district">Gò Vấp,&nbsp;</span>
                                        <span class="address-province">Tp.Hồ Chí Minh&nbsp;</span>
                                    </p>
                                </div>
                                <div class="product-promotion">
                                    <i class="promotion-icon fa fa-tag"></i>
                                    <span class="promotion-text">Deal hot</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col l-2-4 m-4 c-6">
                    <div class="product-item">
                        <a href="#" class="product-link">
                            <div class="product-img">
                                <img src="<?php echo ROOT_URL ?>view/images/product/chicken.jpg" alt="">
                                <div class="product-tag">
                                    <i class="tag-icon fa fa-heart-o"></i>
                                    <span class="tag-like">Yêu thích</span>
                                </div>
                            </div>
                            <div class="product-text">
                                <div class="product-heading ">
                                    <h2 class="heading-name">
                                        <span class="name-shop">Gia Lai quán</span>
                                        <span class="name-combine">-</span>
                                        <span class="name-food">Bún thịt nướng</span>
                                    </h2>
                                    <p class="heading-address">
                                        <span class="address-street">169 Huỳnh Văn Nghệ,&nbsp;</span>
                                        <span class="address-ward">P.12,&nbsp;</span>
                                        <span class="address-district">Gò Vấp,&nbsp;</span>
                                        <span class="address-province">Tp.Hồ Chí Minh&nbsp;</span>
                                    </p>
                                </div>
                                <div class="product-promotion">
                                    <i class="promotion-icon fa fa-tag"></i>
                                    <span class="promotion-text">Deal hot</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col l-2-4 m-4 c-6">
                    <div class="product-item">
                        <a href="#" class="product-link">
                            <div class="product-img">
                                <img src="<?php echo ROOT_URL ?>view/images/product/chicken.jpg" alt="">
                                <div class="product-tag">
                                    <i class="tag-icon fa fa-heart-o"></i>
                                    <span class="tag-like">Yêu thích</span>
                                </div>
                            </div>
                            <div class="product-text">
                                <div class="product-heading ">
                                    <h2 class="heading-name">
                                        <span class="name-shop">Gia Lai quán</span>
                                        <span class="name-combine">-</span>
                                        <span class="name-food">Bún thịt nướng</span>
                                    </h2>
                                    <p class="heading-address">
                                        <span class="address-street">169 Huỳnh Văn Nghệ,&nbsp;</span>
                                        <span class="address-ward">P.12,&nbsp;</span>
                                        <span class="address-district">Gò Vấp,&nbsp;</span>
                                        <span class="address-province">Tp.Hồ Chí Minh&nbsp;</span>
                                    </p>
                                </div>
                                <div class="product-promotion">
                                    <i class="promotion-icon fa fa-tag"></i>
                                    <span class="promotion-text">Deal hot</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col l-2-4 m-4 c-6">
                    <div class="product-item">
                        <a href="#" class="product-link">
                            <div class="product-img">
                                <img src="<?php echo ROOT_URL ?>view/images/product/chicken.jpg" alt="">
                                <div class="product-tag">
                                    <i class="tag-icon fa fa-heart-o"></i>
                                    <span class="tag-like">Yêu thích</span>
                                </div>
                            </div>
                            <div class="product-text">
                                <div class="product-heading ">
                                    <h2 class="heading-name">
                                        <span class="name-shop">Gia Lai quán</span>
                                        <span class="name-combine">-</span>
                                        <span class="name-food">Bún thịt nướng</span>
                                    </h2>
                                    <p class="heading-address">
                                        <span class="address-street">169 Huỳnh Văn Nghệ,&nbsp;</span>
                                        <span class="address-ward">P.12,&nbsp;</span>
                                        <span class="address-district">Gò Vấp,&nbsp;</span>
                                        <span class="address-province">Tp.Hồ Chí Minh&nbsp;</span>
                                    </p>
                                </div>
                                <div class="product-promotion">
                                    <i class="promotion-icon fa fa-tag"></i>
                                    <span class="promotion-text">Deal hot</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col l-2-4 m-4 c-6">
                    <div class="product-item">
                        <a href="#" class="product-link">
                            <div class="product-img">
                                <img src="<?php echo ROOT_URL ?>view/images/product/chicken.jpg" alt="">
                                <div class="product-tag">
                                    <i class="tag-icon fa fa-heart-o"></i>
                                    <span class="tag-like">Yêu thích</span>
                                </div>
                            </div>
                            <div class="product-text">
                                <div class="product-heading ">
                                    <h2 class="heading-name">
                                        <span class="name-shop">Gia Lai quán</span>
                                        <span class="name-combine">-</span>
                                        <span class="name-food">Bún thịt nướng</span>
                                    </h2>
                                    <p class="heading-address">
                                        <span class="address-street">169 Huỳnh Văn Nghệ,&nbsp;</span>
                                        <span class="address-ward">P.12,&nbsp;</span>
                                        <span class="address-district">Gò Vấp,&nbsp;</span>
                                        <span class="address-province">Tp.Hồ Chí Minh&nbsp;</span>
                                    </p>
                                </div>
                                <div class="product-promotion">
                                    <i class="promotion-icon fa fa-tag"></i>
                                    <span class="promotion-text">Deal hot</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col l-2-4 m-4 c-6">
                    <div class="product-item">
                        <a href="#" class="product-link">
                            <div class="product-img">
                                <img src="<?php echo ROOT_URL ?>view/images/product/chicken.jpg" alt="">
                                <div class="product-tag">
                                    <i class="tag-icon fa fa-heart-o"></i>
                                    <span class="tag-like">Yêu thích</span>
                                </div>
                            </div>
                            <div class="product-text">
                                <div class="product-heading ">
                                    <h2 class="heading-name">
                                        <span class="name-shop">Gia Lai quán</span>
                                        <span class="name-combine">-</span>
                                        <span class="name-food">Bún thịt nướng</span>
                                    </h2>
                                    <p class="heading-address">
                                        <span class="address-street">169 Huỳnh Văn Nghệ,&nbsp;</span>
                                        <span class="address-ward">P.12,&nbsp;</span>
                                        <span class="address-district">Gò Vấp,&nbsp;</span>
                                        <span class="address-province">Tp.Hồ Chí Minh&nbsp;</span>
                                    </p>
                                </div>
                                <div class="product-promotion">
                                    <i class="promotion-icon fa fa-tag"></i>
                                    <span class="promotion-text">Deal hot</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col l-2-4 m-4 c-6">
                    <div class="product-item">
                        <a href="#" class="product-link">
                            <div class="product-img">
                                <img src="<?php echo ROOT_URL ?>view/images/product/rice.jpeg" alt="">
                                <div class="product-tag">
                                    <i class="tag-icon fa fa-heart-o"></i>
                                    <span class="tag-like">Yêu thích</span>
                                </div>
                            </div>
                            <div class="product-text">
                                <div class="product-heading ">
                                    <h2 class="heading-name">
                                        <span class="name-shop">Gia Lai quán</span>
                                        <span class="name-combine">-</span>
                                        <span class="name-food">Bún thịt nướng</span>
                                    </h2>
                                    <p class="heading-address">
                                        <span class="address-street">169 Huỳnh Văn Nghệ,&nbsp;</span>
                                        <span class="address-ward">P.12,&nbsp;</span>
                                        <span class="address-district">Gò Vấp,&nbsp;</span>
                                        <span class="address-province">Tp.Hồ Chí Minh&nbsp;</span>
                                    </p>
                                </div>
                                <div class="product-promotion">
                                    <i class="promotion-icon fa fa-tag"></i>
                                    <span class="promotion-text">Deal hot</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col l-2-4 m-4 c-6">
                    <div class="product-item">
                        <a href="#" class="product-link">
                            <div class="product-img">
                                <img src="<?php echo ROOT_URL ?>view/images/product/rice.jpeg" alt="">
                                <div class="product-tag">
                                    <i class="tag-icon fa fa-heart-o"></i>
                                    <span class="tag-like">Yêu thích</span>
                                </div>
                            </div>
                            <div class="product-text">
                                <div class="product-heading ">
                                    <h2 class="heading-name">
                                        <span class="name-shop">Gia Lai quán</span>
                                        <span class="name-combine">-</span>
                                        <span class="name-food">Bún thịt nướng</span>
                                    </h2>
                                    <p class="heading-address">
                                        <span class="address-street">169 Huỳnh Văn Nghệ,&nbsp;</span>
                                        <span class="address-ward">P.12,&nbsp;</span>
                                        <span class="address-district">Gò Vấp,&nbsp;</span>
                                        <span class="address-province">Tp.Hồ Chí Minh&nbsp;</span>
                                    </p>
                                </div>
                                <div class="product-promotion">
                                    <i class="promotion-icon fa fa-tag"></i>
                                    <span class="promotion-text">Deal hot</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col l-2-4 m-4 c-6">
                    <div class="product-item">
                        <a href="#" class="product-link">
                            <div class="product-img">
                                <img src="<?php echo ROOT_URL ?>view/images/product/rice.jpeg" alt="">
                                <div class="product-tag">
                                    <i class="tag-icon fa fa-heart-o"></i>
                                    <span class="tag-like">Yêu thích</span>
                                </div>
                            </div>
                            <div class="product-text">
                                <div class="product-heading ">
                                    <h2 class="heading-name">
                                        <span class="name-shop">Gia Lai quán</span>
                                        <span class="name-combine">-</span>
                                        <span class="name-food">Bún thịt nướng</span>
                                    </h2>
                                    <p class="heading-address">
                                        <span class="address-street">169 Huỳnh Văn Nghệ,&nbsp;</span>
                                        <span class="address-ward">P.12,&nbsp;</span>
                                        <span class="address-district">Gò Vấp,&nbsp;</span>
                                        <span class="address-province">Tp.Hồ Chí Minh&nbsp;</span>
                                    </p>
                                </div>
                                <div class="product-promotion">
                                    <i class="promotion-icon fa fa-tag"></i>
                                    <span class="promotion-text">Deal hot</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col l-2-4 m-4 c-6">
                    <div class="product-item">
                        <a href="#" class="product-link">
                            <div class="product-img">
                                <img src="<?php echo ROOT_URL ?>view/images/product/rice.jpeg" alt="">
                                <div class="product-tag">
                                    <i class="tag-icon fa fa-heart-o"></i>
                                    <span class="tag-like">Yêu thích</span>
                                </div>
                            </div>
                            <div class="product-text">
                                <div class="product-heading ">
                                    <h2 class="heading-name">
                                        <span class="name-shop">Gia Lai quán</span>
                                        <span class="name-combine">-</span>
                                        <span class="name-food">Bún thịt nướng</span>
                                    </h2>
                                    <p class="heading-address">
                                        <span class="address-street">169 Huỳnh Văn Nghệ,&nbsp;</span>
                                        <span class="address-ward">P.12,&nbsp;</span>
                                        <span class="address-district">Gò Vấp,&nbsp;</span>
                                        <span class="address-province">Tp.Hồ Chí Minh&nbsp;</span>
                                    </p>
                                </div>
                                <div class="product-promotion">
                                    <i class="promotion-icon fa fa-tag"></i>
                                    <span class="promotion-text">Deal hot</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col l-2-4 m-4 c-6">
                    <div class="product-item">
                        <a href="#" class="product-link">
                            <div class="product-img">
                                <img src="<?php echo ROOT_URL ?>view/images/product/rice.jpeg" alt="">
                                <div class="product-tag">
                                    <i class="tag-icon fa fa-heart-o"></i>
                                    <span class="tag-like">Yêu thích</span>
                                </div>
                            </div>
                            <div class="product-text">
                                <div class="product-heading ">
                                    <h2 class="heading-name">
                                        <span class="name-shop">Gia Lai quán</span>
                                        <span class="name-combine">-</span>
                                        <span class="name-food">Bún thịt nướng</span>
                                    </h2>
                                    <p class="heading-address">
                                        <span class="address-street">169 Huỳnh Văn Nghệ,&nbsp;</span>
                                        <span class="address-ward">P.12,&nbsp;</span>
                                        <span class="address-district">Gò Vấp,&nbsp;</span>
                                        <span class="address-province">Tp.Hồ Chí Minh&nbsp;</span>
                                    </p>
                                </div>
                                <div class="product-promotion">
                                    <i class="promotion-icon fa fa-tag"></i>
                                    <span class="promotion-text">Deal hot</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col l-2-4 m-4 c-6">
                    <div class="product-item">
                        <a href="#" class="product-link">
                            <div class="product-img">
                                <img src="<?php echo ROOT_URL ?>view/images/product/rice.jpeg" alt="">
                                <div class="product-tag">
                                    <i class="tag-icon fa fa-heart-o"></i>
                                    <span class="tag-like">Yêu thích</span>
                                </div>
                            </div>
                            <div class="product-text">
                                <div class="product-heading ">
                                    <h2 class="heading-name">
                                        <span class="name-shop">Gia Lai quán</span>
                                        <span class="name-combine">-</span>
                                        <span class="name-food">Bún thịt nướng</span>
                                    </h2>
                                    <p class="heading-address">
                                        <span class="address-street">169 Huỳnh Văn Nghệ,&nbsp;</span>
                                        <span class="address-ward">P.12,&nbsp;</span>
                                        <span class="address-district">Gò Vấp,&nbsp;</span>
                                        <span class="address-province">Tp.Hồ Chí Minh&nbsp;</span>
                                    </p>
                                </div>
                                <div class="product-promotion">
                                    <i class="promotion-icon fa fa-tag"></i>
                                    <span class="promotion-text">Deal hot</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col l-2-4 m-4 c-6">
                    <div class="product-item">
                        <a href="#" class="product-link">
                            <div class="product-img">
                                <img src="<?php echo ROOT_URL ?>view/images/product/rice.jpeg" alt="">
                                <div class="product-tag">
                                    <i class="tag-icon fa fa-heart-o"></i>
                                    <span class="tag-like">Yêu thích</span>
                                </div>
                            </div>
                            <div class="product-text">
                                <div class="product-heading ">
                                    <h2 class="heading-name">
                                        <span class="name-shop">Gia Lai quán</span>
                                        <span class="name-combine">-</span>
                                        <span class="name-food">Bún thịt nướng</span>
                                    </h2>
                                    <p class="heading-address">
                                        <span class="address-street">169 Huỳnh Văn Nghệ,&nbsp;</span>
                                        <span class="address-ward">P.12,&nbsp;</span>
                                        <span class="address-district">Gò Vấp,&nbsp;</span>
                                        <span class="address-province">Tp.Hồ Chí Minh&nbsp;</span>
                                    </p>
                                </div>
                                <div class="product-promotion">
                                    <i class="promotion-icon fa fa-tag"></i>
                                    <span class="promotion-text">Deal hot</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- <div class="row"> -->
            <ul class="pagination">
                <li class="pagination-item disabled">
                    <a href="#" class="pagination-link">
                        <span>
                                <i class="fa fa-angle-left"></i>
                            </span>
                    </a>
                </li>
                <li class="pagination-item pagination-active">
                    <a href="#" class="pagination-link">1</a>
                </li>
                <li class="pagination-item">
                    <a href="#" class="pagination-link">2</a>
                </li>
                <li class="pagination-item">
                    <a href="#" class="pagination-link">3</a>
                </li>
                <li class="pagination-item">
                    <a href="#" class="pagination-link">4</a>
                </li>
                <li class="pagination-item">
                    <a href="#" class="pagination-link">5</a>
                </li>
                <li class="pagination-item">
                    <a href="#" class="pagination-link">6</a>
                </li>
                <li class="pagination-item">
                    <a href="#" class="pagination-link">7</a>
                </li>
                <li class="pagination-item">
                    <a href="#" class="pagination-link">8</a>
                </li>
                <li class="pagination-item">
                    <a href="#" class="pagination-link">
                        <span>
                            <i class="fa fa-angle-right"></i>
                        </span>
                    </a>
                </li>
            </ul>
        </div>
    </section>
</div>

