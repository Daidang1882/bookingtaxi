<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">TAXI ABC</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="menu">
            <ul class="navbar-nav ms-auto text-center">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url(); ?>">
                        Trang chủ
                    </a>
                </li>
                <li class="nav-item"><a class="nav-link" href="<?php echo base_url('index.php/dich-vu'); ?>">
                        Dịch vụ
                    </a></li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('index.php/bang-gia'); ?>">
                        Bảng giá
                    </a>
                </li>
                <li class="nav-item"><a class="nav-link" href="<?php echo base_url('index.php/lien-he'); ?>">
                        Liên hệ
                    </a></li>
            </ul>
        </div>
    </div>
</nav>