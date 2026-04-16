<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đặt xe Taxi 24/7</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
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
            padding: 80px 0;
        }

        /* BOX */
        .box {
            background: #fff;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
            text-align: center;
            height: 100%;
        }

        /* BOOKING */
        .booking-box {
            background: #fff;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
        }

        /* FLOAT BUTTON */
        .zalo-float,
        .hotline {
            position: fixed;
            right: 20px;
            z-index: 999;
        }

        .zalo-float {
            bottom: 90px;
        }

        .hotline {
            bottom: 20px;
        }

        .zalo-float a,
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

    <!-- HERO -->
    <section class="hero text-center">
        <div class="container">
            <h1 class="fw-bold">Đặt xe Taxi 24/7</h1>
            <p>Nhanh - Rẻ - Không phát sinh chi phí</p>
            <a href="tel:0397891900" class="btn btn-warning btn-lg mt-3">
                📞 Gọi xe ngay
            </a>
        </div>
    </section>

    <!-- FORM -->
    <section class="container py-5">
        <div class="row g-4">

            <div class="col-md-6">
                <div class="booking-box">
                    <h4>🚖 Đặt xe nhanh</h4>

                    <input class="form-control mb-2" placeholder="Điểm đón">
                    <input class="form-control mb-2" placeholder="Điểm đến">

                    <select class="form-select mb-2">
                        <option>Chọn loại xe</option>
                        <option>4 chỗ</option>
                        <option>7 chỗ</option>
                        <option>16 chỗ</option>
                    </select>

                    <input type="datetime-local" class="form-control mb-3">

                    <button class="btn btn-warning w-100 fw-bold">
                        Nhận báo giá ngay
                    </button>
                </div>
            </div>

            <div class="col-md-6">
                <h4>📞 Liên hệ nhanh</h4>

                <a href="tel:0397891900" class="btn btn-danger w-100 mb-2">
                    📞 Gọi ngay
                </a>

                <a href="https://zalo.me/0397891900" class="btn btn-primary w-100">
                    💬 Zalo báo giá
                </a>
            </div>

        </div>
    </section>

    <!-- SERVICE -->
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

    <!-- PRICE -->
    <section class="container py-5 text-center">
        <h2>Bảng giá</h2>

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

        <div style="border-radius:12px; overflow:hidden;">
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
                    <div class="box">🚗 Xe sạch</div>
                </div>
                <div class="col-md-4">
                    <div class="box">⏰ Đúng giờ</div>
                </div>
                <div class="col-md-4">
                    <div class="box">💰 Không phí ẩn</div>
                </div>
            </div>
        </div>
    </section>

    <!-- FLOAT BUTTON -->
    <div class="zalo-float">
        <a href="https://zalo.me/0397891900" class="btn btn-primary">Z</a>
    </div>

    <div class="hotline">
        <a href="tel:0397891900" class="btn btn-danger">
            <i class="bi bi-telephone-fill"></i>
        </a>
    </div>

</body>

</html>