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
            <h2 class="fs-2 m-0">MENU</h2>
        </div>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle second-text fw-bold" href="#" id="navbarDropdown"
                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-user me-2"></i>John Doe
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li><a class="dropdown-item" href="#">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div> -->
    </nav>

    <div class="container-fluid px-4">
        <!-- <div class="row g-3 my-2">
            <div class="col-md-3">
                <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                    <div>
                        <h3 class="fs-2">720</h3>
                        <p class="fs-5">Products</p>
                    </div>
                    <i class="fas fa-gift fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                </div>
            </div>

            <div class="col-md-3">
                <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                    <div>
                        <h3 class="fs-2">4920</h3>
                        <p class="fs-5">Sales</p>
                    </div>
                    <i
                        class="fas fa-hand-holding-usd fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                </div>
            </div>

            <div class="col-md-3">
                <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                    <div>
                        <h3 class="fs-2">3899</h3>
                        <p class="fs-5">Delivery</p>
                    </div>
                    <i class="fas fa-truck fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                </div>
            </div>

            <div class="col-md-3">
                <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                    <div>
                        <h3 class="fs-2">%25</h3>
                        <p class="fs-5">Increase</p>
                    </div>
                    <i class="fas fa-chart-line fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                </div>
            </div>
        </div> -->

        <div class="row my-5">
            <h3 class="fs-4 mb-3">Danh sách menu</h3>
            <div class="col">
                <form action="<?php echo ROOT_URL?>adminstore/listStore/" method="post">
                <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Chọn</th>
                                <th scope="col">Mã loại</th>
                                <th scope="col">Tên loại</th>
                                <th scope="col">Nút</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <?php      
                                    foreach($data['listmenu'] as $listCate) {
                                    extract($listCate);    
                                ?>  
                                <td><input type="checkbox" name=""></td>
                                <td><?php echo $listCate['id_menu'] ?></td>   
                                <td><?php echo $listCate['name_menu'] ?></td>
                                <td>
                                <a href="<?php echo ROOT_URL ?>adminmenu/editmenu/<?php echo $listCate['id_menu']; ?>"><input class="btn btn-primary" type="button" value="Sửa"></a>
                                <a onclick="return confirm('Are you sure to delete?');" href="<?php echo ROOT_URL ?>adminmenu/deletemenu/<?php echo $listCate['id_menu']; ?>"><input type="button" class="btn btn-danger" value="Xóa"></a>
                                </td>
                            </tr>
                        </tbody>
                        <?php } ?>  
                    </table>
                    <div>
                        <a href="<?php echo ROOT_URL ?>adminmenu/addmenu"><input value="Thêm mới" type="button" class="btn btn-info px-4"></a>
                    </div>
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