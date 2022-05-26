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
    </nav>

    <div class="container-fluid px-4">
        <div class="row my-5">
            <h3 class="fs-4 mb-3">Danh sách Menu</h3>
            <div class="col">
                <form action="<?php echo ROOT_URL?>adminmenu/insertmenu/" method="post">
                    <div class="mb-3 mt-4">
                        <label for="idcate" class="form-label">Mã loại</label>
                        <input type="text" class="form-control" id="idcate" name="idcate" disabled placeholder="Mã loại">
                    </div>
                    <div class="mb-3 mt-4">
                        <label for="name_menu" class="form-label">Tên loại</label>
                        <input type="text" class="form-control" id="name_menu" name="name_menu">
                    </div>
                    <div>
                        <input value="Thêm mới" name="addmenu" type="submit" class="btn btn-danger px-4">
                        <input value="Nhập lại" type="reset" class="btn btn-primary px-4">
                        <a href="<?php echo ROOT_URL ?>adminmenu/listmenu"><input value="Danh sách" type="button" class="btn btn-info px-4"></a>
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