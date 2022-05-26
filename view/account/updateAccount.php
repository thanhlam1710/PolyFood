<div class="main">
    <div class="width">
        <div class="container-user">
            <div class="sidebar-user">
                <?php 
                    $rs = $_SESSION['user'];
                    // var_dump($rs);
                ?>
                <center>
                    <img src="<?php echo ROOT_URL?>view/uploads/avatarAccount/<?=$rs[0]['avatar_account']?>" class="profile_image" alt="">
                    <h4><?=$rs[0]['name_account']?></h4>
                </center>
                <div class="sidebar-items">
                    <a href="<?php echo ROOT_URL?>account/updateAccount"><i class="fas fa-user" style="width: 37px"></i><span>Cập nhật tài khoản</span></a>
                </div>
                <div class="sidebar-items">
                    <a href="<?php echo ROOT_URL?>account/orderDetail"><i class="fas fa-notes-medical" style="width: 37px;"></i><span>Thông tin đơn hàng</span></a>
                </div>
                <div class="sidebar-items">
                    <a href="#"><i class="fas fa-images" style="width: 37px;"></i><span>Phương thức thanh toán</span></a>
                </div>
            </div>
            <div class="update-user">
                <div class="user-title-infor">
                    <span>THÔNG TIN NGƯỜI DÙNG</span>
                </div>
                <div class="user-img-update">
                    <div class="user-title">
                        <span>
                            Tải ảnh đại diện
                        </span>
                    </div>
                    <form action="<?php echo ROOT_URL?>account/editAvatar" method="POST" enctype="multipart/form-data">
                        <div class="user-avt-dowload">
                            <div class="user-avt">
                                <img src="<?php echo ROOT_URL?>view/uploads/avatarAccount/<?=$rs[0]['avatar_account']?>" alt="">
                            </div>
                            <div class="user-download">
                                <div class="input-user-dowload">
                                    <input type="file" name="img" >
                                </div>
                                <div class="btn-user-download">
                                    <input type="text" hidden value="<?=$rs[0]['id_account']?>" name="id_account">
                                    <input type="submit" value="Cập nhật" name="editAvatar">
                                </div>
                            </div>
                        </div>
                    </form>
                    <hr class="hr">
                </div>
                <div class="user-infor-update">
                    <div class="user-title">
                        <span>
                            Thay đổi thông tin
                        </span>
                    </div>
                    <div class="user-infor-form">
                        <form action="<?php echo ROOT_URL?>account/editInfo" method="POST" class="form">
                            <div class="form-row">
                                <label class="form-label" for="name">Tên</label>
                                <input class="form-input" type="text" id="name" name="name_account" value="<?=$rs[0]['name_account']?>">
                            </div>
                            <div class="form-row">
                                <label class="form-label" >Giới tính</label>
                                <select class="form-select-sex" name="gender_account">
                                    <?php 
                                        $gender = $rs[0]['gender_account'];
                                        $genderText;
                                        if ($gender == 1 ) {
                                            $genderText = 'Nam'; ?>
                                        <option disabled>Không chọn</option>
                                        <option value="<?=$gender?>" selected><?=$genderText?></option>
                                        <option value="2">Nữ</option>
                                    <?php    } else if ($gender == 2) { 
                                            $genderText = 'Nữ';?>
                                        <option disabled>Không chọn</option>
                                        <option value="<?=$gender?>" selected><?=$genderText?></option>
                                        <option value="1">Nam</option>
                                    <?php } else { ?>
                                        <option selected disabled>Không chọn</option>
                                        <option value="1">Nam</option>
                                        <option value="2">Nữ</option>
                                    <?php }
                                    ?>
                                    
                                </select>
                            </div>
                            <div class="form-row">
                                <label class="form-label" for="email">Email</label>
                                <input class="form-input" type="email" id="email" name="email_account" value="<?=$rs[0]['email_account']?>">
                            </div>
                            <div class="form-row">
                                <label class="form-label" for="password">Mật khẩu</label>
                                <div class="form-password">
                                    <div class="form-password-text">
                                        <span>**********</span>
                                    </div>
                                    <a href="#">Đổi mật khẩu</a>
                                </div>
                            </div>
                            <div class="user-btn-infor">
                                <input type="text" hidden value="<?=$rs[0]['id_account']?>" name="id_account">
                                <input type="submit" class="btn-save-infor" value="Lưu thông tin" name="editInfo">
                            </div>
                        </form>
                        
                        <hr class="hr">
                    </div>
                </div>
                <div class="user-manager-phone">
                    <div class="user-title">
                        <span>
                            Quản lý số điện thoại
                        </span>
                    </div>
                    <form  action="<?php echo ROOT_URL?>account/editPhone" method="POST">
                        <div class="user-phone-status">
                            <?php 
                                $phone = $rs[0]['phone_account'];
                                if ($phone == false) {
                                    $phone = 'Chưa cập nhật'; ?>
                                <div class="user-phone">
                                    <input type="text" value="<?=$phone?>" name="phone_account">
                                </div>
                            <?php  } else { ?>
                                <div class="user-phone">
                                    <input type="text" value="<?=$phone?>" name="phone_account">
                                </div>
                                <div class="phone-status">
                                    <span>Số điện thoại đã được xác nhận</span>
                                </div>
                            <?php    }
                            ?>
                        </div>
                        <div class="user-btn-phone">
                            <input type="text" hidden value="<?=$rs[0]['id_account']?>" name="id_account">
                            <input type="submit" class="btn-update-phone" value="Cập nhật số điện thoại" name="editPhone">
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
