<?php
    if(!empty($_GET['alert'])) {
        $mess = unserialize(urldecode($_GET['alert']));
        foreach ($mess as $val) {
        echo '<p style="color: green; font-size:14px;">'.$val.'</p>';
        }
    }
?>
            <div class="article">
                <h2 style="padding:2rem; color: #464646; font-size:1.5rem; text-transform: uppercase;">Thêm thực đơn</h2>
                <form class="form" action="<?php echo ROOT_URL ?>storemanage/insertMenuStore" method="post">
                    <input class="form-input-email" type="text" hidden id="email_store" name="id_store" value="<?=$_SESSION['store'][0]['id_store']?>">
                    <div class="form-row">
                        <label class="form-label" for="email_store">Tên thực đơn</label>
                        <input class="form-input-email" type="text" id="email_store" name="name_menu_store">
                    </div>
                    <div class="form-row" style="display: flex; justify-content: end;">
                        <select name="" hidden>
                            <?php foreach($data['idstore'] as $store) {?>
                            <option <?php // if($store === data['idstore']]){echo "selected";} ?> value="<?php echo $store['id_store']?>"><?php echo $store['id_store']?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-row">
                        <label class="form-label">Mô tả thực đơn</label>
                        <!-- <input class="form-input-phone" type="text" id="phone_store" name="phone_store"> -->
                        <textarea name="desc_menu_store" style=" border-radius: 5px;" name="" id="" cols="120" rows="5">
                            
                        </textarea>
                    </div>
                    <div class="btn-formstore">
                        <input type="hidden" name="idstore" value="<?php if(isset($store['id_store']) && ($store['id_store']>0)) echo $store['id_store'];?>">
                        <input type="submit" name="addmenustore" class="btn-store" value="Thêm thực đơn">
                        <input type="submit" class="btn-store" value="Nhập lại">
                        <a href="<?php echo ROOT_URL ?>storemanage/listmenustore"><input type="button" class="btn-store" value="Danh sách"></a>
                    </div>
                </form>
            </div>
        </div>