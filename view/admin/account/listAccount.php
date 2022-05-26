<?php
    if(!empty($_GET['alert'])) {
        $mess = unserialize(urldecode($_GET['alert']));
        foreach ($mess as $val) {
            echo '<p style="color: green; font-size:14px;">'.$val.'</p>';
        }
    }
?>

<!-- Page Content -->
<div id="page-content-wrapper">
    <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
        <div class="d-flex align-items-center">
            <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
            <h2 class="fs-2 m-0">Tài khoản</h2>
        </div>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </nav>

    <div class="container-fluid px-4">
        <div class="row my-5">
            <h3 class="fs-4 mb-3">Danh sách tài khoản</h3>
            <div class="col">
                <form action="<?php echo ROOT_URL?>adminstore/listStore/" method="post">
                <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Mã tài khoản</th>
                                <th scope="col">Ảnh đại diện</th>
                                <th scope="col">Tên tài khoản</th>
                                <th scope="col">Điện thoại</th>
                                <th scope="col">Email</th>
                                <th scope="col">Mật khẩu</th>
                                <th scope="col">Giới tính</th>
                                <th scope="col">Nút</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <?php      
                                    foreach($data['listAccount'] as $list) {
                                    extract($list);
                                    if($list['gender_account']==1){
                                        $list['gender_account'] = 'Nam';
                                    }else{
                                        $list['gender_account'] = 'Nữ';
                                    }
                                ?>  
                                <td><?= $list['id_account'] ?></td>
                                <td><img src="<?php echo ROOT_URL ?>view/uploads/avatarAccount/<?=$list['avatar_account']?>" style="width: 40px;" ></td>
                                <td><?= $list['name_account'] ?></td>
                                <td><?= $list['phone_account'] ?></td>
                                <td><?= $list['email_account'] ?></td>
                                <td><?= $list['pass_account'] ?></td>
                                <td><?= $list['gender_account'] ?></td>
                                <td>
                                    <a onclick="return confirm('Are you sure to delete?');" href="<?php echo ROOT_URL ?>adminAccount/deleteAccount/<?php echo $list['id_account']; ?>"><input type="button" class="btn btn-primary" value="Xóa"></a>
                                </td>         
                            </tr>
                        </tbody>
                        <?php } ?>  
                    </table>
                </form>
            </div>
        </div>

    </div>
</div>
</div>
<!-- /#page-content-wrapper -->
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
<script>
var el = document.getElementById("wrapper");
var toggleButton = document.getElementById("menu-toggle");

toggleButton.onclick = function () {
    el.classList.toggle("toggled");
};
</script>
</body>

</html>                