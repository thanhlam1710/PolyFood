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
            <h2 class="fs-2 m-0">Cửa hàng</h2>
        </div>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </nav>

    <div class="container-fluid px-4">
        <div class="row my-5">
            <h3 class="fs-4 mb-3">Chỉnh sửa cửa hàng</h3>
            <div class="col">
                <?php
                    foreach($data['listStore'] as $listStore) {
                ?>
                <form action="<?php echo ROOT_URL ?>adminstore/editStore/<?php echo $listStore['id_store'] ?>" method="post">
                    <select class="form-select" name="status_store" aria-label="Default select example">
                        <?php 
                            if ($listStore['status_store'] == 1) { ?>
                                    <option selected value="1">Hoạt động</option>
                                    <option value="2">Đóng cửa</option>
                                    <option value="3">Ngưng hoạt động</option>
                            <?php  } else if($listStore['status_store'] == 2){ ?>
                                    <option selected value="2">Đóng cửa</option>
                                    <option value="1">Hoạt động</option>
                                    <option value="3">Ngưng hoạt động</option>
                            <?php } else { ?>
                                    <option value="2">Đóng cửa</option>
                                    <option value="1">Hoạt động</option>
                                    <option selected value="3">Ngưng hoạt động</option>
                            <?php } ?>    
                    </select>
                    <div class="mt-4">
                        <input type="hidden" name="id_store"  value="<?=$listStore['id_store']?>">
                        <input name="saveAll" value="Cập nhật" type="submit" class="btn btn-primary px-4">
                        <input value="Nhập lại" type="reset" class="btn btn-danger px-4">
                        <a href="<?php echo ROOT_URL ?>adminmenu/listmenu"><input value="Danh sách" type="button" class="btn btn-info px-4"></a>
                    </div>
                </form>
                <?php 
                    }
                ?>
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