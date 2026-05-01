<?php $uri = $this->uri->segment(1); ?>

<nav class="navbar navbar-expand-lg navbar-dark fixed-top custom-navbar">
    <div class="container">

        <!-- Logo -->
        <a class="navbar-brand" href="<?php echo base_url(); ?>">
            <img src="<?php echo base_url('assets/image/logo.png'); ?>" alt="Logo" height="40">
        </a>

        <!-- Chữ ở giữa -->
        <div class="ctext-white fw-bold">
            TỔNG ĐÀI TAXI PHAN THIẾT
        </div>

        <!-- Button mobile -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Menu -->
        <div class="collapse navbar-collapse" id="menu">
            <ul class="navbar-nav ms-auto text-left">

                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url(); ?>">Trang chủ</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('index.php/gioi-thieu'); ?>">Giới thiệu</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('index.php/chinh-sach'); ?>">Chính sách bảo mật</a>
                </li>


            </ul>
        </div>
    </div>
</nav>