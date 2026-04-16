<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Giới thiệu Taxi Phan Thiết - Dịch vụ 4-7 chỗ uy tín</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            font-family: Arial;
            background: #f5f7fb;
        }

        /* TOP BAR */
        .top-bar {
            background: #ffc107;
            text-align: center;
            padding: 8px;
            font-size: 14px;
            font-weight: 500;
        }

        /* HERO */
        .hero {
            background: linear-gradient(rgba(0, 0, 0, 0.65), rgba(0, 0, 0, 0.65)),
                url('https://images.unsplash.com/photo-1503376780353-7e6692767b70') center/cover;
            color: #fff;
            padding: 100px 0;
            text-align: center;
        }

        .hero h1 {
            font-size: 36px;
        }

        /* BOX */
        .box {
            background: #fff;
            padding: 30px 20px;
            border-radius: 16px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
            height: 100%;
            text-align: center;
            transition: 0.3s;
        }

        .box:hover {
            transform: translateY(-5px);
            background: #ffc107;
        }

        .box span {
            font-size: 40px;
            display: block;
            margin-bottom: 10px;
        }

        /* SECTION TITLE */
        h2 {
            font-weight: bold;
        }

        /* CONTACT */
        #contact {
            background: #fff;
            border-radius: 16px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
        }

        /* HOTLINE */
        .hotline {
            position: fixed;
            right: 20px;
            bottom: 20px;
            z-index: 999;
        }

        .hotline a {
            width: 65px;
            height: 65px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 26px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.3);
        }
    </style>

</head>

<body>

    <!-- TOP BAR -->
    <div class="top-bar">
        🚖 Taxi Phan Thiết - Đón nhanh 24/7 | Giá trọn gói
    </div>

    <?php $this->load->view('layout/navbar'); ?>

    <!-- HERO -->
    <section class="hero">
        <div class="container">

            <span class="badge bg-warning text-dark mb-3">
                TRANG GIỚI THIỆU
            </span>

            <h1 class="fw-bold">Taxi Phan Thiết 4 - 7 chỗ</h1>
            <p class="mb-3">Sân bay - Liên tỉnh - Nội thành</p>

            <a href="tel:0397891900" class="btn btn-warning btn-lg">
                📞 Gọi ngay 0397 891 900
            </a>

        </div>
    </section>

    <!-- ABOUT -->
    <section class="container py-5 text-center">
        <h2>Về chúng tôi</h2>
        <p class="text-muted mb-4">
            Dịch vụ taxi uy tín tại Phan Thiết phục vụ du lịch & đi lại hằng ngày
        </p>

        <p>
            Chúng tôi cung cấp taxi <b>4 chỗ, 7 chỗ, sân bay và liên tỉnh</b> với tiêu chí:
        </p>

        <p class="fw-bold text-danger">
            ✔ An toàn - ✔ Đúng giờ - ✔ Giá minh bạch - ✔ 24/7
        </p>
    </section>

    <!-- SERVICE -->
    <section class="container py-5 text-center">
        <h2 class="mb-4">Dịch vụ của chúng tôi</h2>

        <div class="row g-4">

            <div class="col-6 col-md-3">
                <div class="box">
                    <span>🚕</span>
                    Taxi nội thành
                </div>
            </div>

            <div class="col-6 col-md-3">
                <div class="box">
                    <span>🏝</span>
                    Taxi du lịch
                </div>
            </div>

            <div class="col-6 col-md-3">
                <div class="box">
                    <span>✈️</span>
                    Taxi sân bay
                </div>
            </div>

            <div class="col-6 col-md-3">
                <div class="box">
                    <span>🚗</span>
                    Taxi liên tỉnh
                </div>
            </div>

        </div>
    </section>

    <!-- WHY -->
    <section class="container py-5 text-center">
        <h2 class="mb-4">Vì sao chọn chúng tôi?</h2>

        <div class="row g-4">

            <div class="col-md-4">
                <div class="box">
                    <span>💰</span>
                    <h5>Giá minh bạch</h5>
                    <p>Không phát sinh chi phí</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="box">
                    <span>⏰</span>
                    <h5>Phục vụ 24/7</h5>
                    <p>Luôn có xe bất cứ lúc nào</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="box">
                    <span>🚗</span>
                    <h5>Xe đời mới</h5>
                    <p>Sạch sẽ - an toàn</p>
                </div>
            </div>

        </div>
    </section>

    <!-- CONTACT -->
    <section id="contact" class="container py-5 text-center">
        <h2>Đặt xe ngay</h2>
        <p>Chỉ cần gọi là có xe trong 5–10 phút</p>

        <a href="tel:0397891900" class="btn btn-danger btn-lg mt-2">
            📞 0397 891 900
        </a>
    </section>

    <!-- FLOAT HOTLINE -->
    <div class="hotline">
        <a href="tel:0397891900" class="btn btn-danger">
            <i class="bi bi-telephone-fill"></i>
        </a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>