<?php
    if(!empty($_GET['alert'])) {
        $mess = unserialize(urldecode($_GET['alert']));
        foreach ($mess as $key => $val) {
        echo '<span style="color: green; font-size:14px;">'.$val.'</span>';
        }
    }
?>

<div class="article">
<h2 style="padding:2rem; color: #464646; font-size:1.5rem; text-transform: uppercase;">Thêm món</h2>
                <form class="form" action="<?php echo ROOT_URL ?>storemanage/insertFood" method="POST" enctype="multipart/form-data">
                    <div class="form-row">
                        <label class="form-label">Tên món</label>
                        <input class="form-input-email" type="text" name="name_food">
                    </div>
                    <div class="form-row">
                        <label class="form-label">Giá món</label>
                        <input class="form-input-email" type="text" name="price_food">
                    </div>
                    <div class="form-row">
                        <label class="form-label">Ảnh món</label>
                        <input class="form-input-email" type="file" name="image_food">
                    </div>
                    <div class="form-row">
                        <label class="form-label">Thực đơn</label>
                        <select name="menu_store" id="" style="width: 25%; font-size:1.4rem;color:#464646; text-transform:uppercase;">
                        <?php foreach($data['listmenustore'] as $listMenu) { ?>
                            <option value="<?php echo $listMenu['id_menu_store'] ?>"><?php echo $listMenu['name_menu_store'] ?></option>
                        <?php } ?>
                        </select>
                    </div>
                    <div class="form-row description-food">
                        <label class="form-label">Mô tả món</label>
                        <textarea id="editor" name="description_food" cols="120" rows="5">
                            
                        </textarea>
                    </div>
                    <div class="btn-formstore">
                        <input type="submit" name="addfood" class="btn-store" value="Thêm sản phẩm">
                        <input type="submit" class="btn-store" value="Nhập lại">
                        <a href="<?php echo ROOT_URL ?>storemanage/listfood"><input type="button" class="btn-store" value="Danh sách"></a>
                    </div>
                </form>
            </div>
        </div>
    