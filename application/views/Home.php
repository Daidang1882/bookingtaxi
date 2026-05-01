<!DOCTYPE html>
<html lang="vi">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tổng đài Taxi Phan Thiết</title>

	<!-- Bootstrap -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

	<!-- Font -->
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Pattaya&display=swap" rel="stylesheet">
	<!-- CSS custom -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">



</head>

<body>

	<!-- NAVBAR -->
	<?php $this->load->view('layout/navbar'); ?>
	<!-- HERO -->
	<section class="hero d-flex align-items-center">
		<div class="container">
			<div class="row">

				<!-- Bên trái -->
				<div class="col-md-7 text-white">
					<h1 class="fw-bold">Dịch vụ thuê xe nhanh chóng</h1>
					<p>Xe đời mới - Giá tốt - Phục vụ 24/7</p>
				</div>

				<!-- Bên phải -->
				<div class="col-md-5">
					<div class="booking-box p-4 bg-white rounded-4 shadow">

						<h4 class="mb-3 text-center">Đặt xe nhanh</h4>

						<form id="bookingForm">
							<div class="mb-2">
								<input type="text" id="name" name="name" class="form-control" placeholder="Họ tên" required>
							</div>

							<div class="mb-2">
								<input type="tel" id="phone" name="phone" class="form-control" placeholder="Số điện thoại" required>
							</div>

							<div class="mb-3">
								<input type="date" id="date" name="date" class="form-control">
							</div>

							<button type="submit" class="btn btn-primary w-100">
								🚕 Gọi lại cho tôi
							</button>
						</form>

						<small class="text-muted d-block text-center mt-2">
							Taxi sẽ liên hệ trong vài phút
						</small>

					</div>
				</div>

			</div>
		</div>
	</section>

	<div class="section-divider"></div>

	<script>
		const form = document.getElementById("bookingForm");

		form.addEventListener("submit", function(e) {
			e.preventDefault();

			const formData = new FormData(form);

			fetch("https://script.google.com/macros/s/AKfycbxzQMlW0Ki9wm1sLRCK9cveeNjCZ_oXiSJ0q7n55a3l9HGzC0NHsJpjFkZ9O7VISSU6/exec", {
					method: "POST",
					mode: "no-cors", // fix CORS
					body: formData
				})
				.then(() => {
					alert("✅ Đặt xe thành công! Chúng tôi sẽ gọi lại.");
					form.reset();
				})
				.catch(() => {
					alert("❌ Có lỗi xảy ra!");
				});
		});
	</script>

	<div class="section-divider"></div>

	<!-- Dịch vụ -->
	<section id="why-us" class="container py-5 text-center">
		<h2 class="mb-4">Tại sao chọn Taxi Phan Thiết?</h2>

		<div class="row g-3">

			<div class="col-6 col-md-3">
				<div class="service-box">
					<span>📞</span>
					<strong>Gọi xe nhanh</strong>
					<small>Chỉ 5 phút có xe</small>
				</div>
			</div>

			<div class="col-6 col-md-3">
				<div class="service-box">
					<span>💰</span>
					<strong>Giá tiết kiệm</strong>
					<small>Không phát sinh chi phí</small>
				</div>
			</div>

			<div class="col-6 col-md-3">
				<div class="service-box">
					<span>🎧</span>
					<strong>Hỗ trợ 24/7</strong>
					<small>Tư vấn mọi lúc</small>
				</div>
			</div>

			<div class="col-6 col-md-3">
				<div class="service-box">
					<span>👨‍✈️</span>
					<strong>Tài xế chuyên nghiệp</strong>
					<small>An toàn, thân thiện</small>
				</div>
			</div>

		</div>
	</section>


	<div class="section-divider"></div>

	<!-- BẢNG GIÁ -->
	<section class="pricing-section py-5">
		<div class="container">
			<h2 class="text-center mb-5">Bảng giá taxi</h2>

			<div class="row g-4">

				<!-- Xe 4-5 chỗ -->
				<div class="col-md-6">
					<div class="price-card">
						<h4>Xe 4 - 5 chỗ</h4>

						<div class="price-item">
							<span>Mở cửa</span>
							<strong>8.500đ</strong>
						</div>

						<div class="price-item">
							<span>Dưới 30km</span>
							<strong>13.300đ/km</strong>
						</div>

						<div class="price-item">
							<span>Trên 30km</span>
							<strong>10.500đ/km</strong>
						</div>
					</div>
				</div>

				<!-- Xe 7-8 chỗ -->
				<div class="col-md-6">
					<div class="price-card">
						<h4>Xe 7 - 8 chỗ</h4>

						<div class="price-item">
							<span>Mở cửa</span>
							<strong>8.500đ</strong>
						</div>

						<div class="price-item">
							<span>Dưới 30km</span>
							<strong>16.500đ/km</strong>
						</div>

						<div class="price-item">
							<span>Trên 30km</span>
							<strong>13.500đ/km</strong>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>

	<div class="section-divider"></div>


	<!-- ĐIỂM DU LỊCH -->
	<section class="tour-section py-5">
		<div class="container">
			<h2 class="text-center mb-4">Điểm du lịch nổi bật</h2>

			<div class="row g-4 text-center">

				<div class="col-6 col-md-3">
					<div class="tour-item">
						<img src="assets/image/doicatdo.jpg" class="tour-img">
						<p>Đồi Cát Đỏ</p>
					</div>
				</div>

				<div class="col-6 col-md-3">
					<div class="tour-item">
						<img src="assets/image/suoitien.jpg" class="tour-img">
						<p>Suối Tiên</p>
					</div>
				</div>

				<div class="col-6 col-md-3">
					<div class="tour-item">
						<img src="assets/image/thapposhan.png" class="tour-img">
						<p>Tháp Poshanu</p>
					</div>
				</div>

				<div class="col-6 col-md-3">
					<div class="tour-item">
						<img src="assets/image/bautrang.jpg" class="tour-img">
						<p>Bàu Trắng</p>
					</div>
				</div>

				<div class="col-6 col-md-3">
					<div class="tour-item">
						<img src="assets/image/thacnuoc.jpg" class="tour-img">
						<p>Thác nước</p>
					</div>
				</div>
				<div class="col-6 col-md-3">
					<div class="tour-item">
						<img src="assets/image/muidien.jpg" class="tour-img">
						<p>Mũi Điện</p>
					</div>
				</div>

				<div class="col-6 col-md-3">
					<div class="tour-item">
						<img src="assets/image/khuditich.jpg" class="tour-img">
						<p>Khu di tích Bác Hồ</p>
					</div>
				</div>

				<div class="col-6 col-md-3">
					<div class="tour-item">
						<img src="assets/image/honrom.jpg" class="tour-img">
						<p>Hòn Rơm</p>
					</div>
				</div>

			</div>
		</div>
	</section>


	<div class="section-divider"></div>

	<!-- xe hoa -->

	<section class="wedding-service py-5">
		<div class="container">
			<h2 class="text-center mb-5">Dịch vụ xe cưới</h2>


			<section class="container my-5">
				<div class="about-box text-center">
					<p class="about-text">
						Trong một ngày trọng đại như đám cưới,
						việc thuê và sử dụng xe hoa để đón dâu không chỉ là lựa chọn tuỳ ý mà còn là một yêu tố quan trọng cần thiết.
						Cho nên ,dịch vụ cho thuê xe hoa cưới tại PHAN THIẾT - BÌNH THUẬN đang trở thành một sự lựa trọn phổ biến và cần thiết trong lễ kết hôn.
						Điều này giúp tạo điều kiện thuận lời cho các cặp đôi để dễ dàng tìm thấy phương tiện đón dâu lý tưởng trong ngày trọng đại.
					</p>
				</div>
			</section>
			<!-- item -->
			<div class="wedding-item row align-items-center mb-4">
				<div class="col-md-4">
					<img src="assets/image/carwd1.jpg" class="wedding-img">
				</div>
				<div class="col-md-8">
					<h5>Chúc mừng cặp đôi đẹp đẽ này có một tương lai tràn đầy hạnh phúc.</h5>
				</div>
			</div>

			<div class="wedding-item row align-items-center mb-4">
				<div class="col-md-4">
					<img src="assets/image/carwd2.jpg" class="wedding-img">
				</div>
				<div class="col-md-8">
					<h5>Chúc mừng anh chị có một tình yêu vĩnh cửu và một mái ấm hạnh phúc mãi mãi.</h5>
				</div>
			</div>

			<div class="wedding-item row align-items-center mb-4">
				<div class="col-md-4">
					<img src="assets/image/carwd3.jpg" class="wedding-img">
				</div>
				<div class="col-md-8">
					<h5>Chúc cặp đôi này có một hành trình mới tràn đầy niềm vui, sự đồng thuận và hạnh phúc vĩnh cửu.</h5>
				</div>
			</div>


			<div class="wedding-item row align-items-center mb-4">
				<div class="col-md-4">
					<img src="assets/image/carwd4.jpg" class="wedding-img">
				</div>
				<div class="col-md-8">
					<h5>Hôm nay là một ngày đặc biệt với anh chị và cũng là một ngày hạnh phúc với em. Chúc cho tình yêu của anh chị mãi bền vững và đầy đặn, và mọi ước mơ của họ đều trở thành hiện thực. </h5>
				</div>
			</div>
		</div>
	</section>

	<div class="section-divider"></div>


	<section class="container my-5">
		<div class="about-box text-center">
			<p class="about-text">
				DỊCH VỤ TAXI BÊN EM CAM KẾT HOÀN TOÀN LÀ TAXI ĐỜI MỚI.VỚI TIÊU CHÍ SẠCH SẼ THƠM THO MỖI NGÀY.CHO KHÁCH HÀNG TRÃI NGHIỆM TỐT NHẤT.
			</p>
		</div>
	</section>


	<div class="section-divider"></div>


	<!-- Đánh giá khách hàng -->
	<section class="testimonial-section py-5">
		<div class="container">
			<h2 class="text-center mb-5">Đánh giá khách hàng</h2>

			<div class="row g-4">

				<div class="col-12 col-md-3">
					<div class="testimonial-card text-center h-100">
						<img src="assets/image/ngocquynh.jpg" class="avatar">
						<p class="comment">
							"Tài xế thân thiện, xe sạch sẽ. Gọi là có ngay!"
						</p>
						<h6>Ngọc Quỳnh</h6>
					</div>
				</div>

				<div class="col-12 col-md-3">
					<div class="testimonial-card text-center h-100">
						<img src="assets/image/tuananh.jpg" class="avatar">
						<p class="comment">
							"Dịch vụ rất chuyên nghiệp, giá cả hợp lý."
						</p>
						<h6>Tuấn Anh</h6>
					</div>
				</div>

				<div class="col-12 col-md-3">
					<div class="testimonial-card text-center h-100">
						<img src="assets/image/phuongthao.jpg" class="avatar">
						<p class="comment">
							"Gọi xe là có ngay, rất tiện lợi!"
						</p>
						<h6>Phương Thảo</h6>
					</div>
				</div>

				<div class="col-12 col-md-3">
					<div class="testimonial-card text-center h-100">
						<img src="assets/image/truongdat.jpg" class="avatar">
						<p class="comment">
							"Dịch vụ nhanh chóng, rất hài lòng!"
						</p>
						<h6>Trường Đạt</h6>
					</div>
				</div>

			</div>
		</div>
	</section>


	<div class="section-divider"></div>




	<section class="py-5 bg-dark">
		<div class="container text-center">

			<div class="row justify-content-center">
				<div class="col-12 col-lg-8"> <!-- 👈 nhỏ lại -->

					<div id="carouselTaxi"
						class="carousel slide"
						data-bs-ride="carousel"
						data-bs-interval="2500"> <!-- 👈 auto chạy -->

						<!-- ảnh -->
						<div class="carousel-inner">

							<div class="carousel-item active">
								<img src="assets/image/cs1.jpg" class="d-block w-100 carousel-img">
							</div>

							<div class="carousel-item">
								<img src="assets/image/cs2.jpg" class="d-block w-100 carousel-img">
							</div>

							<div class="carousel-item">
								<img src="assets/image/cs3.jpg" class="d-block w-100 carousel-img">
							</div>

							<div class="carousel-item">
								<img src="assets/image/cs4.jpg" class="d-block w-100 carousel-img">
							</div>

							<div class="carousel-item">
								<img src="assets/image/cs5.jpg" class="d-block w-100 carousel-img">
							</div>

							<div class="carousel-item">
								<img src="assets/image/cs6.jpg" class="d-block w-100 carousel-img">
							</div>

						</div>

						<!-- nút -->
						<button class="carousel-control-prev" type="button" data-bs-target="#carouselTaxi" data-bs-slide="prev">
							<span class="carousel-control-prev-icon"></span>
						</button>

						<button class="carousel-control-next" type="button" data-bs-target="#carouselTaxi" data-bs-slide="next">
							<span class="carousel-control-next-icon"></span>
						</button>

					</div>

				</div>
			</div>

		</div>
	</section>

	<div class="section-divider"></div>

	<!-- Video khách hàng -->
	<section class="testimonial-section py-5">
		<div class="container">


			<div class="row justify-content-center">
				<div class="col-12 col-lg-10">
					<div class="video-box-big">
						<iframe
							src="https://www.youtube.com/embed/f23JjiyBU1o"
							frameborder="0"
							allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
							allowfullscreen>
						</iframe>
					</div>
				</div>
			</div>

		</div>
	</section>

	<div class="section-divider"></div>

	<!-- BẢN ĐỒ -->
	<section class="py-5 bg-dark map-section">
		<div class="container text-center">
			<h2 class="text-white mb-5">Vị trí của chúng tôi</h2>

			<div class="row justify-content-center">
				<div class="col-12 col-lg-10">
					<div class="map-box">
						<iframe
							src="https://www.google.com/maps?q=10.930056,108.104083&hl=vi&z=16&output=embed"
							allowfullscreen
							loading="lazy">
						</iframe>
					</div>
				</div>
			</div>

		</div>
	</section>

	<?php $this->load->view('layout/dropboxcontact'); ?>

	</div>
	<!-- FOOTER -->
	<?php $this->load->view('layout/footer'); ?>

	<!-- FLOAT BUTTON -->


	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
	<script>
		window.addEventListener("scroll", function() {
			let navbar = document.querySelector(".custom-navbar");

			if (window.scrollY > 50) {
				navbar.classList.add("scrolled");
			} else {
				navbar.classList.remove("scrolled");
			}
		});
	</script>
</body>

</html>