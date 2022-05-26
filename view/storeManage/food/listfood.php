<style>
    .th-1{
        width: 8%;
    }
    .th-2{
        width: 12%;
    }
    .th-3{
        width: 12%;
    }
    .th-4{
        width: 15%;
    }
    .th-5{
        width: 20%;
    
    }
    .th-6{
        width: 20%;
        white-space: nowrap;
        text-overflow: ellipsis;
        overflow: hidden;
    }
    .th-7{
        width: 13%;
    }
</style>
<div class="article-admin">
                <!-- <div class="article-search">
                    <div class="search-box">
                        <input type="text" class="search" placeholder="Tìm loại">
                        <button type="submit" class="search-btn">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </div> -->
                <h2 style="padding:2rem; color: #464646; font-size:1.5rem; text-transform: uppercase;">Danh sách món</h2>
                <div class="article-content">
                    <div class="table_responsive">
                        <table>
                            <thead>
                                <tr>
                                    <th class="th-1">Mã Món</th>
                                    <th class="th-2">Tên món</th>
                                    <th class="th-3">Thực đơn</th>
                                    <th class="th-4">Ảnh</th>
                                    <th class="th-5">Giá</th>
                                    <th class="th-6">Mô tả</th>
                                    <th class="th-7">Quản lý</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php ?>
                                <?php foreach($data['listfood'] as $listFood) {?>
                                <tr>
                                    <td class="td-center"><?php echo $listFood['id_food'] ?></td>
                                    <td class="td-center"><?php echo $listFood['name_food'] ?></td>
                                    <?php 
                                        foreach ($data['listmenustore'] as $listMenu) {
                                            if ($listFood['fk_id_menustore'] == $listMenu['id_menu_store']) { ?>
                                            <td class="td-center"><?php echo $listMenu['name_menu_store'] ?></td>
                                    <?php  }
                                        }
                                    ?>
                                    <td class="td-center"><img src="<?php echo ROOT_URL ?>/public/upload/product/<?php echo $listFood['image_food'] ?>" width="10rem" height="10rem" alt=""></td>
                                    <td class="td-center"><?php echo number_format($listFood['price_food'],0,',','.').'đ' ?></td>
                                    <td class="td-center"><?php echo $listFood['description_food'] ?></td>
                                    <td>                                     
                                        <div class="td-button td-center">
                                            <a onclick="return confirm('Are you sure to delete?');" href="<?php echo ROOT_URL ?>storemanage/deleteFood/<?php echo $listFood['id_food']; ?>">
                                                <button type="button" class="button-1">Xóa</button>
                                            </a>
                                            <a href="<?php echo ROOT_URL ?>storemanage/editfood/<?php echo $listFood['id_food']; ?>">
                                                <button type="button" class="button-1">Sửa</button>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>