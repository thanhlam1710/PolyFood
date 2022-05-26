    <div class="article">
        <?php 
            $disable = '';
            $hidden = '';
            // var_dump($storeInfo);
            extract($_SESSION['store'][0]);
        ?>
        <!-- <form action="#" method="post" class="form" enctype="multipart/form-data"> -->
            <div class="store">
                <div class="store-image">
                    <img src="<?php echo ROOT_URL ?>view/uploads/avatarStore/<?=$avatar_store?>" alt="">
                </div>
                <div class="store-infor  hide-text">
                    <p class="store-name hide-text">
                        <?=$name_store?> - <?=$signature_food?> - <?=$street_store?>
                    </p>
                    <p class="store-address hide-text">
                        <?=$number_store?> - <?=$street_store?>, 
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
                        }?>
                    </p>
                    <div class="store-status">
                        <?php 
                            if ($status_store == 1) { ?>
                                <div class="checkmark active"></div>
                                <span>Hoạt động</span>
                        <?php  } else if ($status_store == 3) { 
                                $disable = 'readonly';
                                $hidden = 'hidden';?>
                                <div class="checkmark inactive"></div>
                                <span>Ngưng hoạt động</span>
                        <?php } else { ?>
                                <div class="checkmark inactive"></div>
                                <span>Đóng cửa</span>
                        <?php }
                        ?>
                        <!-- Nếu trạng thái hoạt động sẽ dùng active, tick xanh lá -->
                        <!-- <div class="checkmark active"></div>
                        <span>Hoạt động</span> -->
                        <!-- Nếu trạng thái đóng cửa sẽ dùng inactive, tick màu đỏ -->
                        <!-- <div class="checkmark inactive"></div> -->
                        <!-- <span>Đóng cửa</span> -->
                    </div>
                </div>
            </div>
        <form action="<?=ROOT_URL.'storemanage/updateAvatar'?>" method="post" enctype="multipart/form-data">
            <div class="form-row">
                <label class="form-label" for="images">Ảnh cửa hàng</label>
                <input class="form-input-images" type="file" id="images" name="img">
                <input type="submit" class="btn-avatar" <?=$hidden?> value="Cập nhật hình ảnh" name="updateAvatar">
            </div>
        </form>
        <form action="<?=ROOT_URL.'storemanage/updateStore'?>" method="post" class="form">
            <div class="form-row">
                <label class="form-label" for="name">Tên quán</label>
                <input class="form-input-name" type="text" <?=$disable?> id="name" name="name_store" value="<?=$name_store?>">
                <input class="form-input-name" type="text" <?=$disable?> id="name" name="signature_food" value="<?=$signature_food?>">
                <input class="form-input-name" type="text" <?=$disable?> id="name" name="street_store" value="<?=$street_store?>">
            </div>
            <div class="form-row">
                <label class="form-label"></label>
                <div class="form-note">
                    <i class="fas fa-info" style="font-size: 20px;"></i>
                    <p>
                        Tên quán nên được đặt theo thứ tự: Tên quán, món đặc trưng của quán và tên đường.
                    </p>
                </div>
            </div>
            <div class="form-row">
                <label class="form-label" for="email_store">Email người đại diện</label>
                <input class="form-input-email" type="text" <?=$disable?> id="email_store" name="email_store" value="<?=$email_store?>">
            </div>
            <div class="form-row">
                <label class="form-label" for="phone_store">Số điện thoại</label>
                <input class="form-input-phone" type="text" <?=$disable?> id="phone_store" name="phone_store" value="<?=$phone_store?>">
            </div>
            <div class="form-row">
                <label class="form-label">Thành phố</label>
                <select class="form-select-city" name="city_store" <?=$disable?> onchange="showDistrict(this.value)">
                    <?php 
                        foreach ($data['province'] as $province) {
                            if ($city_store == $province['id']) {
                                $s = 'selected';
                            } else {
                                $s = '';
                            } ?>
                            <option value="<?=$province['id']?>" <?=$s?>><?=$province['_name']?></option>
                    <?php  }
                    ?>
                </select>
            </div>
            <div class="form-row">
                <label class="form-label">Quận</label>
                <select id="district_store" class="form-select-distrist" <?=$disable?> name="district_store" onchange="showWard(this.value)">
                    <?php 
                        foreach ($data['district'] as $district) {
                            if ($district_store == $district['id']) {
                                $s = 'selected';
                            } else {
                                $s = '';
                            } ?>
                            <option value="<?=$district['id']?>" <?=$s?>><?=$district['_name']?></option>
                    <?php  }
                    ?>
                </select>
            </div>
            <div class="form-row">
                <label class="form-label">Phường</label>
                <select id="ward_store" class="form-select-ward" <?=$disable?> name="ward_store">
                    <?php 
                        foreach ($data['ward'] as $ward) {
                            if ($ward_store == $ward['id']) {
                                $s = 'selected';
                            } else {
                                $s = '';
                            } ?>
                            <option value="<?=$ward['id']?>" <?=$s?>><?=$ward['_name']?></option>
                    <?php  }
                    ?>
                </select>
            </div>
            <div class="form-row">
                <label class="form-label">Địa chỉ nhà</label>
                <input class="form-input-phone" type="text" id="number_store" <?=$disable?> name="number_store" value="<?=$number_store?>">
            </div>
            <div class="form-row">
                <label class="form-label">Loại cửa hàng</label>
                <select class="form-select-store" <?=$disable?> name="fk_id_menu">
                    <?php 
                        foreach ($_SESSION['menu'] as $menu) {
                            extract($menu);
                            if ($fk_id_menu == $id_menu) {
                                $s='selected';
                            } else {
                                $s='';
                            } ?>
                            <option value="<?=$id_menu?>" <?=$s?>><?=$name_menu?></option>
                    <?php   }
                    ?>
                </select>
            </div>
            <div class="form-row">
                <label class="form-label">Trạng thái hoạt động</label>
                <select class="form-select-status" <?=$disable?> name="status_store">
                    <?php 
                        if ($status_store == 1) { ?>
                            <option selected value="1">Hoạt động</option>
                            <option value="2">Đóng cửa</option>
                    <?php  } else if ($status_store == 3) { ?>
                            <option selected value="3">Ngưng hoạt động</option>
                    <?php } else { ?>
                            <option selected value="2">Đóng cửa</option>
                            <option value="1">Hoạt động</option>
                    <?php }
                    ?>
                </select>
            </div>
            <div class="btn-formstore">
                <input type="text" hidden value="<?=$id_store?>" name="id_store">
                <input type="submit" class="btn-store" <?=$hidden?> value="Cập nhật" name="updateStore">
            </div>
        </form>
    </div>
</div>
<script src="<?php echo ROOT_URL ?>view/js/ajax_database.js">
</script>