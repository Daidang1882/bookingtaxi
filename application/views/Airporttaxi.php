<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dịch vụ đón sân bay TP.HCM</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            font-family: Arial;
        }

        /* HERO */
        .hero {
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)),
                url('https://images.unsplash.com/photo-1503376780353-7e6692767b70') center/cover;
            color: #fff;
            padding: 90px 0;
        }

        .booking-form {
            background: #fff;
            padding: 20px;
            border-radius: 12px;
            color: #000;
        }

        /* BOX */
        .box {
            background: #fff;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
            transition: 0.3s;
            height: 100%;
            text-align: center;
        }

        .box:hover {
            transform: translateY(-5px);
        }

        .box i {
            font-size: 32px;
            color: #ffc107;
            margin-bottom: 10px;
            display: block;
        }

        /* PRICE */
        .price {
            background: #fff;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
            height: 100%;
            text-align: center;
        }

        .price h3 {
            color: #dc3545;
        }

        /* HOTLINE */
        .hotline {
            position: fixed;
            right: 20px;
            bottom: 20px;
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
    <!-- HERO -->
    <section class="hero">
        <div class="container">
            <div class="row align-items-center g-4">

                <div class="col-lg-7">
                    <h1 class="fw-bold">Dịch vụ đón sân bay Tân Sơn Nhất</h1>
                    <h4>Có xe sau 5 phút - Đón tận nơi</h4>
                    <p>Giá trọn gói - Không phát sinh chi phí</p>
                    <a href="tel:0901234567" class="btn btn-warning">📞 Gọi ngay</a>
                </div>

                <div class="col-lg-5">
                    <div class="booking-form">
                        <h5 class="mb-3">Đặt xe nhanh</h5>
                        <input class="form-control mb-2" placeholder="Sân bay / Điểm đón">
                        <input class="form-control mb-2" placeholder="Điểm đến">
                        <input type="datetime-local" class="form-control mb-2">
                        <select class="form-select mb-2">
                            <option>Chọn xe</option>
                            <option>4 chỗ</option>
                            <option>7 chỗ</option>
                        </select>
                        <a href="tel:0901234567" class="btn btn-warning w-100">Đặt xe ngay</a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- GIỚI THIỆU -->
    <section class="container py-5">
        <div class="row align-items-center">

            <div class="col-md-6">
                <h2>Đón sân bay chuyên nghiệp</h2>
                <p>
                    Dịch vụ đón khách tại sân bay Tân Sơn Nhất nhanh chóng,
                    đúng giờ, an toàn và giá minh bạch.
                </p>

                <ul>
                    <li>✔ Hoạt động 24/7</li>
                    <li>✔ Giá trọn gói</li>
                    <li>✔ Xe đời mới</li>
                    <li>✔ Không phí ẩn</li>
                </ul>
            </div>

            <div class="col-md-6">
                <img src="https://images.unsplash.com/photo-1549924231-f129b911e442"
                    class="img-fluid rounded">
            </div>

        </div>
    </section>

    <!-- SERVICES -->
    <section class="bg-light py-5">
        <div class="container text-center">
            <h2 class="mb-4">Dịch vụ đón sân bay</h2>

            <div class="row g-4">

                <div class="col-md-3">
                    <div class="box">
                        <i class="bi bi-airplane"></i>
                        Đón sân bay
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="box">
                        <i class="bi bi-clock"></i>
                        Chờ chuyến bay
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="box">
                        <i class="bi bi-car-front"></i>
                        Đưa về tận nơi
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="box">
                        <i class="bi bi-shield-check"></i>
                        An toàn 100%
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- PRICING -->
    <section class="container py-5 text-center">
        <h2 class="mb-4">Bảng giá đón sân bay</h2>

        <div class="row g-4">

            <div class="col-md-4">
                <div class="price">
                    <h5>Sân bay → Quận 1</h5>
                    <h3>150.000đ</h3>
                    <p>Giá trọn gói</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="price">
                    <h5>Sân bay → Nội thành</h5>
                    <h3>200.000đ</h3>
                    <p>Không phát sinh phí</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="price">
                    <h5>Limousine VIP</h5>
                    <h3>Thỏa thuận</h3>
                    <p>Dịch vụ cao cấp</p>
                </div>
            </div>

        </div>
    </section>

    <!-- HOTLINE -->
    <div class="hotline">
        <a href="tel:0901234567" class="btn btn-danger">
            <i class="bi bi-telephone-fill"></i>
        </a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>