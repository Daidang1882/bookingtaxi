<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bảng giá Taxi Phan Thiết</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            font-family: Arial;
            background: #f5f7fb;
        }

        /* HERO */
        .hero {
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)),
                url('https://images.unsplash.com/photo-1503376780353-7e6692767b70') center/cover;
            color: #fff;
            padding: 80px 0;
            text-align: center;
        }

        /* PRICE CARD */
        .price-card {
            background: #fff;
            border-radius: 16px;
            padding: 25px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.08);
            transition: 0.3s;
            height: 100%;
            text-align: center;
        }

        .price-card:hover {
            transform: translateY(-5px);
        }

        .price-card h5 {
            color: #666;
        }

        .price-card h3 {
            color: #dc3545;
            font-weight: bold;
            margin: 10px 0;
        }

        /* CTA */
        .cta {
            background: #ffc107;
            padding: 40px;
            border-radius: 16px;
            text-align: center;
            margin-top: 40px;
        }

        .cta a {
            font-size: 18px;
            font-weight: bold;
        }

        /* HOTLINE */
        .hotline {
            position: fixed;
            right: 20px;
            bottom: 20px;
            z-index: 999;
        }

        .hotline a {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
        }
    </style>
</head>

<body>

    <?php $this->load->view('layout/navbar'); ?>
    <section class="hero">
        <div class="container">
            <h1 class="fw-bold">Bảng Giá Taxi Phan Thiết</h1>
            <p>Minh bạch - Rõ ràng - Không phát sinh phí</p>
            <a href="tel:0397891900" class="btn btn-warning mt-3">
                📞 Gọi xe ngay
            </a>
        </div>
    </section>

    <!-- INTRO -->
    <section class="container py-5 text-center">
        <h2 class="mb-3">Giá cước minh bạch</h2>
        <p class="text-muted">
            Chúng tôi cam kết báo giá trước chuyến đi, không phụ phí, không tăng giá giờ cao điểm.
        </p>
    </section>

    <!-- PRICE LIST -->
    <section class="container pb-5">
        <div class="row g-4">

            <div class="col-md-4">
                <div class="price-card">
                    <i class="bi bi-airplane fs-1 text-warning"></i>
                    <h5>Sân bay Tân Sơn Nhất</h5>
                    <h3>150.000đ</h3>
                    <p>Phan Thiết ⇄ Sân bay</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="price-card">
                    <i class="bi bi-geo-alt fs-1 text-warning"></i>
                    <h5>Nội thành</h5>
                    <h3>10.000đ/km</h3>
                    <p>Đi trong khu vực thành phố</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="price-card">
                    <i class="bi bi-signpost fs-1 text-warning"></i>
                    <h5>Liên tỉnh</h5>
                    <h3>900K - 1.200K</h3>
                    <p>Phan Thiết ⇄ các tỉnh</p>
                </div>
            </div>

        </div>

        <!-- CTA -->
        <div class="cta mt-5">
            <h3>📞 Cần báo giá chính xác?</h3>
            <p>Gọi ngay để được tư vấn và báo giá tốt nhất</p>
            <a href="tel:0397891900" class="btn btn-dark btn-lg">
                Gọi 0397 891 900
            </a>
        </div>

    </section>

    <!-- HOTLINE -->
    <div class="hotline">
        <a href="tel:0397891900" class="btn btn-danger">
            <i class="bi bi-telephone-fill"></i>
        </a>
    </div>

</body>

</html>