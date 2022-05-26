
<!-- Page Content -->
<div id="page-content-wrapper">
    <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
        <div class="d-flex align-items-center">
            <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
            <h2 class="fs-2 m-0">Trang chủ</h2>
        </div>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button> 
    </nav>

    <div class="container-fluid px-4">
        <div class="row g-3 my-2">
            <ul class="list-sucessful">
                <li>
                    <?php 
                        if(session::getSession('loginadmin')) {
                    ?>
                    <a href=""> <i class="fas fa-user-cog mr-3"> Đã Đăng nhập thành công !!! </i></a>             
                    <?php
                        }else{
                    ?>
                        <a href="">Không Thành công</a>
                    <?php }
                    ?>
                </li>
            </ul>
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