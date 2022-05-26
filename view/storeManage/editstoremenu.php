<?php
    if(!empty($_GET['alert'])) {
        $alert = unserialize(urldecode($_GET['alert']));
        foreach($alert as $val) {
        echo '<p style="color: green; font-size:14px;">'.$val.'</p>';
        }
    }
?>
            <div class="article">
                <h2 style="padding:2rem; color: #464646; font-size:1.5rem; text-transform: uppercase;">Cập nhật thực đơn</h2>
                <?php foreach($data['editstoremenu'] as $key => $menuOne) {?>
                <form class="form" action="<?php echo ROOT_URL ?>storemanage/updateStoreMenu/<?php echo $menuOne['id_menu_store'] ?>" method="post">
                    <div class="form-row">
                        <label class="form-label" for="email_store">Tên thực đơn</label>
                        <input value="<?php echo $menuOne['name_menu_store'] ?>" class="form-input-email" type="text" name="name_menu_store">
                    </div>
                    <div class="form-row">
                        <label class="form-label">Mô tả thực đơn</label>         
                        <textarea name="desc_menu_store" style=" border-radius: 5px;" name="" id="" cols="120" rows="5">
                            <?php echo $menuOne['desc_menu_store'] ?>
                        </textarea>
                    </div>
                    <div class="btn-formstore">
                        <input type="submit" name="updatestoremenu" class="btn-store" value="Cập nhật">
                        <input type="submit" class="btn-store" value="Nhập lại">
                        <a href="<?php echo ROOT_URL ?>storemanage/listmenustore"><input type="button" class="btn-store" value="Danh sách"></a>
                    </div>
                </form>
                <?php } ?>
            </div>
        </div>