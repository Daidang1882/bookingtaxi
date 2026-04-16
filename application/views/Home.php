<!DOCTYPE html>
<html lang="vi">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Taxi ABC</title>

	<!-- Bootstrap -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

	<!-- Font -->
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

	<!-- CSS custom -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body>

	<!-- NAVBAR -->
	<?php $this->load->view('layout/navbar'); ?>
	<!-- HERO -->

	<div class="hero">
		<div class="container">
			<div class="row align-items-center g-4">

				<div class="col-lg-7">
					<h1 class="fw-bold">Taxi PHAN THIẾT</h1>
					<h4>Có Xe Sau 5 Phút</h4>
					<p>Hành trình an toàn - Giá cả minh bạch</p>
					<a href="tel:09*****67" class="btn btn-warning">📞 Gọi ngay</a>
				</div>

				<div class="col-lg-5">
					<div class="booking-form">
						<h5 class="mb-3">Đặt xe nhanh</h5>
						<input class="form-control mb-2" placeholder="Điểm đón">
						<input class="form-control mb-2" placeholder="Điểm đến">
						<input type="datetime-local" class="form-control mb-2">
						<select class="form-select mb-2">
							<option>Chọn xe</option>
							<option>4 chỗ</option>
							<option>7 chỗ</option>
							<option>Limousine</option>
						</select>
						<a href="tel:0901*****567" class="btn btn-warning w-100">Đặt xe ngay</a>
					</div>
				</div>

			</div>
		</div>
	</div>


	<!-- SERVICES -->
	<section id="services" class="container py-5 text-center">
		<h2 class="mb-4">Dịch vụ</h2>

		<div class="row g-3">

			<div class="col-6 col-md-3">
				<div class="service-box">
					<span>✈️</span>
					Sân bay
				</div>
			</div>

			<div class="col-6 col-md-3">
				<div class="service-box">
					<span>🛣️</span>
					Đường dài
				</div>
			</div>

			<div class="col-6 col-md-3">
				<div class="service-box">
					<span>🏢</span>
					Hợp đồng
				</div>
			</div>

			<div class="col-6 col-md-3">
				<div class="service-box">
					<span>💍</span>
					Xe cưới
				</div>
			</div>

		</div>
	</section>

	<!-- CARS -->
	<section class="container py-5">
		<h2 class="text-center mb-4">Danh mục xe</h2>
		<div class="row g-4 text-center justify-content-center">

			<div class="col-12 col-md-4">
				<img src="assets/image/xe4cho.jpg" class="car-img">
				<p class="mt-2">Xe 4 chỗ - đời mới</p>
			</div>

			<div class="col-12 col-md-4">
				<img src="assets/image/xe7cho.png" class="car-img">
				<p class="mt-2">Xe 7 chỗ rộng rãi</p>
			</div>

		</div>
	</section>

	<!-- PRICING -->
	<section id="pricing" class="container py-5 text-center">
		<h2 class="mb-4">Bảng giá</h2>

		<div class="row g-4">

			<div class="col-md-4">
				<div class="price-card">
					<h5>Sân bay</h5>
					<h3>150.000đ</h3>
					<p>Di chuyển TP.HCM - Sân bay</p>
				</div>
			</div>

			<div class="col-md-4">
				<div class="price-card">
					<h5>Nội thành</h5>
					<h3>10.000đ/km</h3>
					<p>Áp dụng trong khu vực TP.HCM</p>
				</div>
			</div>

			<div class="col-md-4">
				<div class="price-card">
					<h5>Đường dài</h5>
					<h3>Thỏa thuận</h3>
					<p>Giá tốt cho chuyến đi xa</p>
				</div>
			</div>

		</div>
	</section>

	<?php $this->load->view('layout/dropboxcontact'); ?>

	</div>
	<!-- FOOTER -->
	<footer id="contact" class="bg-dark text-white text-center p-4">
		<p>Địa chỉ: TP.HCM</p>
		<p>Hotline: 0901234567</p>
	</footer>

	<!-- FLOAT BUTTON -->
	<script>
		function toggleHotline() {
			document.querySelector('.sticky-hotline').classList.toggle('active');
		}
	</script>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>