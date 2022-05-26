<?php
    if(!empty($_GET['alert'])) {
        $mess = unserialize(urldecode($_GET['alert']));
        foreach ($mess as $key => $val) {
        echo '<span style="color: green; font-size:14px;">'.$val.'</span>';
        }
    }
?>
<div class="article">
<h2 style="padding:2rem; color: #464646; font-size:1.5rem; text-transform: uppercase;">Cập nhật món</h2>
                <?php foreach($data['listfood'] as $foodOne) {?>
                <form class="form" action="<?php echo ROOT_URL ?>storemanage/updateFood/<?php echo $foodOne['id_food'] ?>" method="post" enctype="multipart/form-data">
                <div class="form-row">
                        <label class="form-label">Tên món</label>
                        <input value="<?php echo $foodOne['name_food']?>" class="form-input-email" type="text" name="name_food">
                    </div>
                    <div class="form-row">
                        <label class="form-label">Giá món</label>
                        <input value="<?php echo $foodOne['price_food']?>" class="form-input-email" type="text" name="price_food">
                    </div>
                    <div class="form-row">
                        <label class="form-label">Ảnh món</label>     
                        <div class="form-row-detail" style="display: flex; align-items:center;">
                            <input class="form-input-email" type="file" name="image_food">
                            <p style="padding-left:1rem;"><img src="<?php echo ROOT_URL ?>public/upload/product/<?php echo $foodOne['image_food'] ?>" width="100px" height="100px" alt=""></p>
                        </div>
                    </div>
                    <div class="form-row">
                        <label class="form-label">Thực đơn</label>
                        <select name="menu_store" id="" style="width: 25%; font-size:1.4rem;color:#464646; text-transform:uppercase;">
                            <?php foreach($data['listmenustore'] as $oneMenu) { ?>
                                <option value="<?php echo $oneMenu['id_menu_store']?>">
                                    <?php echo $oneMenu['name_menu_store'] ?>
                                </option>
                            <?php } ?>
                        </select>
                            <!-- <option <?php // if($oneMenu['id_menu_store']===$foodOne['fk_id_menu_store']){ echo "selected"; }?>value="<?php // echo $oneMenu['id_menu_store']?>"> -->
                                            <?php // echo $oneMenu['name_menu_store'] ?>
                            <!-- </option>  -->
                                        <?php // } ?>
                    </div>
                    <div class="form-row description-food">
                        <label class="form-label">Mô tả món</label>
                        <textarea id="editor" name="description_food" cols="120" rows="5"><?php echo $foodOne['description_food']?></textarea>
                    </div>
                    <div class="btn-formstore">
                        <input type="submit" name="updatefood" class="btn-store" value="Cập nhật">
                        <input type="reset" class="btn-store" value="Nhập lại">
                        <a href="<?php echo ROOT_URL ?>storemanage/listfood"><input type="button" class="btn-store" value="Danh sách"></a>
                    </div>
                </form>
                <?php } ?>
            </div>
        </div>
        <script src="https://cdn.ckeditor.com/ckeditor5/30.0.0/classic/ckeditor.js"></script>
        <script src="<?php echo ROOT_URL ?>view/js/editor.js"></script>
     
  