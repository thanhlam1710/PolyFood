<?php
    if(!empty($_GET['msg'])) {
        $msg = unserialize(urldecode($_GET['msg']));
        foreach ($msg as $val) {
            echo '<span style="color: green; font-size:14px;">'.$val.'</span>';
        }
    }
?>
   <div class="article-admin">
                <!-- <div class="article-search">
                    <div class="search-box">
                        <input type="text" class="search" placeholder="Tìm loại">
                        <button type="submit" class="search-btn">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </div> -->
                <h2 style="padding:2rem; color: #464646; font-size:1.5rem; text-transform: uppercase;">Danh sách thực đơn</h2>
                <div class="article-content">
                    <div class="table_responsive">
                        <table>
                            <thead>
                                <tr>
                                    <th class="th-1">Mã loại</th>
                                    <th class="th-2">Tên</th>
                                    <th class="th-3">Quản lý</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($data['listmenustore'] as $listMenu) {?>
                                <tr>
                                    <td class="td-center"><?php echo $listMenu['id_menu_store'] ?></td>
                                    <td><?php echo $listMenu['name_menu_store'] ?></td>
                                    <td>                                     
                                        <div class="td-button td-center">
                                            <a onclick="return confirm('Are you sure to delete?');" href="<?php echo ROOT_URL ?>storemanage/deleteStoreMenu/<?=$listMenu['id_menu_store']?>">
                                                <button type="button" class="button-1">Xóa</button>
                                            </a>
                                            <a href="<?php echo ROOT_URL ?>storemanage/editstoremenu/<?php echo $listMenu['id_menu_store']; ?>">
                                                <button type="button" class="button-1">Sửa</button>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- <div class="article-insert">
                        <div class="insert-title">
                            <h1>Thêm phân loại</h1>
                        </div>
                        <form action="#" class="insert-box">
                            <input type="text" class="insert-type" placeholder="Nhập tên loại">
                            <input type="submit" class="insert-btn" value="Thêm" name="themPhanLoai">
                        </form>
                    </div> -->
                </div>
            </div>