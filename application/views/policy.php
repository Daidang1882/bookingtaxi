<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chính sách bảo mật | Taxi Phan Thiết</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <!-- NAVBAR -->
    <?php $this->load->view('layout/navbar'); ?>

    <!-- HERO -->
    <section class="intro-hero">
        <div class="container h-100">
            <div class="row h-100 justify-content-center align-items-center">
                <div class="col-md-10 text-center">
                    <div class="intro-box">
                        <h1>CHÍNH SÁCH BẢO MẬT</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="section-divider"></div>

    <!-- CONTENT -->
    <section class="container py-5">

        <div class="policy-card mb-4">
            <h3>Tổng quan chính sách</h3>
            <p>
                Chính sách bảo mật thông tin khách hàng của Taxi Phan Thiết là cam kết
                bảo vệ quyền riêng tư và dữ liệu cá nhân của khách hàng.
                Chúng tôi chỉ thu thập thông tin cần thiết nhằm cung cấp dịch vụ taxi,
                giải quyết khiếu nại và chăm sóc khách hàng.
            </p>
        </div>

        <div class="policy-card mb-4">
            <h3>1. Thu thập thông tin cá nhân</h3>
            <ul>
                <li>Thu thập thông tin khi khách hàng gọi taxi, phản ánh hoặc khiếu nại.</li>
                <li>Chỉ lưu trữ thông tin cần thiết để phục vụ chuyến đi.</li>
                <li>Không thu thập thông tin tài chính cá nhân.</li>
                <li>Thông tin có thể chuyển cho tài xế để phục vụ đưa đón.</li>
                <li>Khách hàng có trách nhiệm bảo mật thông tin cá nhân.</li>
            </ul>
        </div>

        <div class="policy-card mb-4">
            <h3>2. Đối tác thứ ba và liên kết</h3>
            <ul>
                <li>Thông tin có thể chia sẻ nội bộ với chi nhánh cùng hệ thống.</li>
                <li>Không bán dữ liệu cho bên thứ ba.</li>
                <li>Chỉ cung cấp khi pháp luật yêu cầu.</li>
                <li>Sử dụng Google Analytics để cải thiện trải nghiệm người dùng.</li>
            </ul>
        </div>

        <div class="policy-card mb-4">
            <h3>3. Sử dụng Cookie</h3>
            <ul>
                <li>Cookie giúp ghi nhớ phiên truy cập và cải thiện trải nghiệm.</li>
                <li>Cookie không lưu tên, địa chỉ hay số điện thoại.</li>
                <li>Người dùng có thể tắt cookie trên trình duyệt.</li>
                <li>Google Analytics dùng cookie để phân tích truy cập.</li>
            </ul>
        </div>

        <div class="policy-card mb-4">
            <h3>4. Bảo mật thông tin</h3>
            <ul>
                <li>Áp dụng biện pháp kỹ thuật ngăn truy cập trái phép.</li>
                <li>Dữ liệu lưu trên máy chủ an toàn.</li>
                <li>Nghiêm cấm xâm nhập hoặc phá hoại hệ thống.</li>
                <li>Thông tin giao dịch được bảo mật theo luật Việt Nam.</li>
            </ul>
        </div>

        <div class="policy-card mb-4">
            <h3>5. Quyền lợi khách hàng</h3>
            <ul>
                <li>Yêu cầu xem dữ liệu cá nhân.</li>
                <li>Yêu cầu chỉnh sửa thông tin sai lệch.</li>
                <li>Yêu cầu ngừng sử dụng dữ liệu cho tiếp thị.</li>
            </ul>
        </div>

    </section>

    <div class="section-divider"></div>

    <!-- CTA -->
    <section class="intro-taxi-section py-5">
        <div class="container">
            <div class="intro-taxi-box">
                <div class="phone-icon">📞</div>

                <h2 class="intro-title">
                    Cần <span>hỗ trợ</span> thêm?
                </h2>

                <p class="intro-desc">
                    Liên hệ tổng đài Taxi Phan Thiết để được tư vấn nhanh chóng
                </p>

                <a href="tel:0345834321" class="call-btn">
                    GỌI NGAY: 0345 834 321
                </a>
            </div>
        </div>
    </section>

    <?php $this->load->view('layout/footer'); ?>
    <?php $this->load->view('layout/dropboxcontact'); ?>

</body>

</html>