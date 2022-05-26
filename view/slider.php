<div class="main">
    <section class="section-heading">
        <div class="grid width">
            <div class="heading-contain row">
                <div class="col l-4">
                    <div class="content-tag" style="background-image: url('<?php echo ROOT_URL ?>view/images/banner/banner-leftfood.jpg');">
                        <div class="tag-list">
                            <a href="<?=ROOT_URL?>resultSearch&id=all" class="tag-link">
                                <span class="tag-text">All</span>
                            </a>
                            <?php
                                foreach ($_SESSION['menu'] as $menu) { 
                                $linkMenu = ROOT_URL."resultSearch&id=".$menu['id_menu'];?>
                                <a href="<?=$linkMenu?>" class="tag-link">
                                    <span class="tag-text"><?=$menu['name_menu']?></span>
                                </a>
                            <?php  }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col l-8">
                    <div class="slider-wrapper">
                        <i onclick="pushSlides(-1);" class="fa fa-angle-left slider-prev"></i>
                        <div class="slider-main">
                            <div class="slider-item active">
                                <a href="#" class="slider-link">
                                    <img src="<?php echo ROOT_URL ?>view/images/banner/banner1.png" alt="banner" class="slider-img">
                                </a>
                            </div>
                            <div class="slider-item">
                                <a href="#" class="slider-link">
                                    <img src="<?php echo ROOT_URL ?>view/images/banner/bannerleft.jpg" alt="banner" class="slider-img">
                                </a>
                            </div>
                            <div class="slider-item">
                                <a href="#" class="slider-link">
                                    <img src="<?php echo ROOT_URL ?>view/images/banner/banner2.jpeg" alt="banner" class="slider-img">
                                </a>
                            </div>
                            <div class="slider-item">
                                <a href="#" class="slider-link">
                                    <img src="<?php echo ROOT_URL ?>view/images/banner/banner-shopeefood.jpg" alt="banner" class="slider-img">
                                </a>
                            </div>
                        </div>
                        <i onclick="pushSlides(1)" class="fa fa-angle-right slider-next"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>