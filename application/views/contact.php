<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đặt xe Taxi 24/7</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

    <!-- CSS custom -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial;
        }

        /* HERO */
        .hero {
            background: linear-gradient(rgba(0, 0, 0, 0.65), rgba(0, 0, 0, 0.65)),
                url('https://images.unsplash.com/photo-1503376780353-7e6692767b70') center/cover;
            color: #fff;
            padding: 90px 0;
        }

        /* BOX */
        .box {
            background: #fff;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
            text-align: center;
            height: 100%;
            transition: 0.3s;
        }

        .box:hover {
            transform: translateY(-5px);
        }

        /* BOOKING */
        .booking-box {
            background: #fff;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
        }

        /* BUTTON CTA */
        .btn-call {
            background: #ffc107;
            font-weight: bold;
        }

        /* MAP */
        .map {
            border-radius: 12px;
            overflow: hidden;
        }
    </style>

</head>

<body>

    <!-- NAVBAR -->
    <?php $this->load->view('layout/navbar'); ?>

    <!-- HERO -->
    <section class="hero text-center">
        <div class="container">
            <h1 class="fw-bold">Đặt xe Taxi 24/7</h1>
            <p>Nhanh - Rẻ - Không phát sinh chi phí</p>

            <a href="tel:0397891900" class="btn btn-warning btn-lg mt-3 fw-bold">
                📞 Gọi xe ngay
            </a>
        </div>
    </section>

    <!-- BOOKING -->
        <section class="container py-5">
           <?php $this->load->view('layout/form'); ?>
        </section>

    <!-- SERVICES -->
    <section class="bg-light py-5 text-center">
        <div class="container">
            <h2 class="mb-4">Dịch vụ</h2>

            <div class="row g-4">
                <div class="col-md-3">
                    <div class="box">🚕 Nội thành</div>
                </div>
                <div class="col-md-3">
                    <div class="box">✈️ Sân bay</div>
                </div>
                <div class="col-md-3">
                    <div class="box">🚗 Liên tỉnh</div>
                </div>
                <div class="col-md-3">
                    <div class="box">🏝 Du lịch</div>
                </div>
            </div>
        </div>
    </section>

    <!-- PRICING -->
    <section class="container py-5 text-center">
        <h2 class="mb-4">Bảng giá</h2>

        <div class="row g-4">
            <div class="col-md-4">
                <div class="box">
                    <h5>Sân bay</h5>
                    <h3 class="text-danger">150K</h3>
                </div>
            </div>

            <div class="col-md-4">
                <div class="box">
                    <h5>Đi tỉnh</h5>
                    <h3 class="text-danger">900K+</h3>
                </div>
            </div>

            <div class="col-md-4">
                <div class="box">
                    <h5>Nội thành</h5>
                    <h3 class="text-danger">10K/km</h3>
                </div>
            </div>
        </div>
    </section>

    <!-- MAP -->
    <section class="container py-5">
        <h4 class="text-center mb-3">Khu vực phục vụ</h4>

        <div class="map">
            <iframe
                src="https://www.google.com/maps?q=Phan+Thiet&output=embed"
                width="100%"
                height="300"
                style="border:0;">
            </iframe>
        </div>

        <p class="text-center mt-3 text-muted">
            Phục vụ TP.HCM, Phan Thiết và các tỉnh lân cận
        </p>
    </section>

    <!-- CAM KẾT -->
    <section class="bg-light py-5 text-center">
        <div class="container">
            <h2 class="mb-4">Cam kết</h2>

            <div class="row g-4">
                <div class="col-md-4">
                    <div class="box">🚗 Xe sạch - đời mới</div>
                </div>
                <div class="col-md-4">
                    <div class="box">⏰ Đón đúng giờ</div>
                </div>
                <div class="col-md-4">
                    <div class="box">💰 Không phát sinh phí</div>
                </div>
            </div>
        </div>
    </section>

    <!-- FLOAT BUTTON -->


    <!-- FOOTER -->
    <?php $this->load->view('layout/footer'); ?>

    <?php $this->load->view('layout/dropboxcontact'); ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>