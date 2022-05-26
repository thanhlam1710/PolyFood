
<section class="section-sharing">
   <div class="row">
      <div class="col">
      </div>
   </div>
</section>
<section class="section-promotion">
   <div class="promotion-container width border-radius-container box-shadow-container">
      <h2 class="container-heading">
         Ưu đãi
      </h2>
      <div class="row">
         <?php
            $promotionStore = $data['promotionStore'];
            foreach ($promotionStore as $promotion) { 
            $linkProductPromotion = ROOT_URL."product/productdetail&id=".$promotion['id_store'];  ?>
            <div class="col l-3 m-4 c-6">
               <div class="product-item">
                  <a href="<?=$linkProductPromotion?>" class="product-link">
                     <div class="product-img">
                        <img src="<?php echo ROOT_URL ?>view/uploads/avatarStore/<?=$promotion['avatar_store']?>" alt="">
                        <div class="product-tag">
                           <i class="tag-icon fa fa-heart-o"></i>
                           <span class="tag-like">Yêu thích</span>
                        </div>
                     </div>
                     <div class="product-text">
                        <div class="product-heading">
                           <h2 class="heading-name ">
                              <span class="name-shop"><?=$promotion['name_store']?></span>
                              <span class="name-combine">-</span>
                              <span class="name-food"><?=$promotion['signature_food']?></span>
                           </h2>
                           <p class="heading-address">
                              <span class="address-street"><?=$promotion['number_store']?> <?=$promotion['street_store']?>,&nbsp;</span>
                              <span class="address-ward">
                                 <?php foreach($data['ward'] as $wardAdd) {
                                    if ($promotion['ward_store'] == $wardAdd['id'])
                                    echo $wardAdd['_name'];
                                 }?>,&nbsp;</span>
                              <span class="address-district">
                                 <?php foreach($data['district'] as $districtAdd) {
                                    if ($promotion['district_store'] == $districtAdd['id'])
                                    echo $districtAdd['_name'];
                                 }?>,&nbsp;</span>
                              <span class="address-province">
                                 <?php foreach($data['province'] as $provinceAdd) {
                                    if ($promotion['city_store'] == $provinceAdd['id'])
                                    echo $provinceAdd['_name'];
                                 }?>&nbsp;</span>
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
         <?php }
         ?>
      </div>
      <div class="row row-detail">
         <div class="col col-detail">
            <a href="#" class="detail-link">
            <span class="detail-text">Xem thêm
            </span>
            <i class="detail-icon fa fa-repeat"></i>
            </a>
         </div>
      </div>
   </div>
</section>
<section class="section-filter">
   <div class="filter-container width border-radius-container box-shadow-container">
      <div class="filter-heading">
         <div class="filter-highlight">
            <button class="filter-btn active">
            Bán chạy
            </button>
            <button class="filter-btn">
            Đánh giá
            </button>
            <button class="filter-btn">
            Giao nhanh
            </button>
         </div>
         <!-- Danh sách trang -->
         <div class="filter-select">
            <select class="filter-label">
               <option value="-1" selected>Chọn quận/ huyện</option>
               <option value="0" class="filter-item">Quận 1</option>
               <option value="1" class="filter-item">Quận 2</option>
               <option value="2" class="filter-item">Quận 3</option>
               <option value="3" class="filter-item">Quận 4</option>
               <option value="4" class="filter-item">Quận 5</option>
            </select>
         </div>
      </div>
      <div class="row">
         <?php 
            $viewStore = $data['viewStore'];
            foreach ($viewStore as $view) { 
            $linkProductView= ROOT_URL."product/productdetail&id=".$view['id_store'];?>
            <div class="col l-3 m-4 c-6">
               <div class="product-item">
                  <a href="<?=$linkProductView?>" class="product-link">
                     <div class="product-img">
                        <img src="<?php echo ROOT_URL ?>view/uploads/avatarStore/<?=$view['avatar_store']?>" alt="">
                        <div class="product-tag">
                           <i class="tag-icon fa fa-heart-o"></i>
                           <span class="tag-like">Yêu thích</span>
                        </div>
                     </div>
                     <div class="product-text">
                        <div class="product-heading">
                           <h2 class="heading-name ">
                              <span class="name-shop"><?=$view['name_store']?></span>
                              <span class="name-combine">-</span>
                              <span class="name-food"><?=$view['signature_food']?></span>
                           </h2>
                           <p class="heading-address">
                              <span class="address-street"><?=$view['number_store']?> <?=$view['street_store']?>,&nbsp;</span>
                              <span class="address-ward">
                                 <?php foreach($data['ward'] as $wardAdd) {
                                    if ($view['ward_store'] == $wardAdd['id'])
                                    echo $wardAdd['_name'];
                                 }?>,&nbsp;</span>
                              <span class="address-district">
                                 <?php foreach($data['district'] as $districtAdd) {
                                    if ($view['district_store'] == $districtAdd['id'])
                                    echo $districtAdd['_name'];
                                 }?>,&nbsp;</span>
                              <span class="address-province">
                                 <?php foreach($data['province'] as $provinceAdd) {
                                    if ($view['city_store'] == $provinceAdd['id'])
                                    echo $provinceAdd['_name'];
                                 }?>&nbsp;</span>
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
         <?php }
         ?>
      </div>
      <div class="row row-detail">
         <div class="col col-detail">
            <a href="#" class="detail-link">
            <span class="detail-text">Xem thêm 
            </span>
            <i class="detail=icon fa fa-chevron-down"></i>
            </a>
         </div>
      </div>
   </div>
</section>
<section class="section-gallery">
   <div class="gallery-container width border-radius-container box-shadow-container">
      <h2 class="container-heading">Bộ sưu tập</h2>
      <div class="row">
         <div class="col l-3 m-4 c-6">
            <div class="gallery-item">
               <a href="#" class="gallery-link">
                  <div class="product-img gallery-img">
                     <img src="<?php echo ROOT_URL ?>view/images/banner/banner1.png" alt="">
                  </div>
                  <div class="gallery-text">
                     <div class="gallery-heading">
                        <h2 class="heading-name">
                           Ưu đãi lên đến 50%
                        </h2>
                        <p class="address-quantity">
                           200 địa điểm
                        </p>
                     </div>
                  </div>
               </a>
            </div>
         </div>
         <div class="col l-3 m-4 c-6">
            <div class="gallery-item">
               <a href="#" class="gallery-link">
                  <div class="product-img gallery-img">
                     <img src="<?php echo ROOT_URL ?>view/images/banner/banner2.jpeg" alt="">
                  </div>
                  <div class="gallery-text">
                     <div class="gallery-heading">
                        <h2 class="heading-name">
                           Ưu đãi lên đến 50%
                        </h2>
                        <p class="address-quantity">
                           200 địa điểm
                        </p>
                     </div>
                  </div>
               </a>
            </div>
         </div>
         <div class="col l-3 m-4 c-6">
            <div class="gallery-item">
               <a href="#" class="gallery-link">
                  <div class="product-img gallery-img">
                     <img src="<?php echo ROOT_URL ?>view/images/banner/1.jpg" alt="">
                  </div>
                  <div class="gallery-text">
                     <div class="gallery-heading">
                        <h2 class="heading-name">
                           Ưu đãi lên đến 50%
                        </h2>
                        <p class="address-quantity">
                           200 địa điểm
                        </p>
                     </div>
                  </div>
               </a>
            </div>
         </div>
         <div class="col l-3 m-4 c-6">
            <div class="gallery-item">
               <a href="#" class="gallery-link">
                  <div class="product-img gallery-img">
                     <img src="<?php echo ROOT_URL ?>view/images/banner/gallery1.jfif" alt="">
                  </div>
                  <div class="gallery-text">
                     <div class="gallery-heading">
                        <h2 class="heading-name">
                           Ưu đãi lên đến 50%
                        </h2>
                        <p class="address-quantity">
                           200 địa điểm
                        </p>
                     </div>
                  </div>
               </a>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="section-line">
   <div class="grid width border-bottom"></div>
</section>
</div>
         