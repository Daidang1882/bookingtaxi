<?php $uri = $this->uri->segment(1); ?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">

        <a class="navbar-brand" href="<?php echo base_url(); ?>">TAXI ABC</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="menu">
            <ul class="navbar-nav ms-auto text-center">

                <!-- Trang chủ -->
                <li class="nav-item">
                    <a class="nav-link <?= ($uri == '' ? 'active' : '') ?>"
                        href="<?php echo base_url(); ?>">
                        Trang chủ
                    </a>
                </li>

                <!-- Dịch vụ -->
                <li class="nav-item">
                    <a class="nav-link <?= ($uri == 'dich-vu' ? 'active' : '') ?>"
                        href="<?php echo base_url('index.php/dich-vu'); ?>">
                        Dịch vụ
                    </a>
                </li>

                <!-- Bảng giá -->
                <li class="nav-item">
                    <a class="nav-link <?= ($uri == 'bang-gia' ? 'active' : '') ?>"
                        href="<?php echo base_url('index.php/bang-gia'); ?>">
                        Bảng giá
                    </a>
                </li>

                <!-- Liên hệ -->
                <li class="nav-item">
                    <a class="nav-link <?= ($uri == 'lien-he' ? 'active' : '') ?>"
                        href="<?php echo base_url('index.php/lien-he'); ?>">
                        Liên hệ
                    </a>
                </li>

            </ul>
        </div>
    </div>
</nav>