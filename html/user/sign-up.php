<?php require 'dbconn.php'; ?>
<!DOCTYPE html>
<html lang="en">


<head>

	<title>ULAF - Sign Up | PixelPatch</title>
	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="author" content="Pixel-Patch">
	<meta name="robots" content="index, follow">


	<meta name="keywords" content="university, lost, found, ULAF, PixelPatch, campus, items, report, claim, student services, mobile app, web app, responsive design, user-friendly interface, innovative technology, app development, digital solution, online presence, university services">

	<meta name="description" content="Discover ULAF, a University Lost and Found mobile and web app designed by PixelPatch. Report or claim lost items, enjoy a user-friendly interface, and experience innovative technology at your fingertips. ULAF is the perfect digital solution to streamline your university's lost and found services.">

	<meta property="og:title" content="ULAF - Home | PixelPatch">
	<meta property="og:description" content="Discover ULAF, a University Lost and Found mobile and web app designed by PixelPatch. Report or claim lost items, enjoy a user-friendly interface, and experience innovative technology at your fingertips. ULAF is the perfect digital solution to streamline your university's lost and found services.">

	<meta property="og:image" content="Your Image URL">

	<meta name="format-detection" content="telephone=no">

	<meta name="twitter:title" content="ULAF - Home | PixelPatch">
	<meta name="twitter:description" content="Discover ULAF, a University Lost and Found mobile and web app designed by PixelPatch. Report or claim lost items, enjoy a user-friendly interface, and experience innovative technology at your fingertips. ULAF is the perfect digital solution to streamline your university's lost and found services.">

	<!-- Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5, minimum-scale=1, minimal-ui, viewport-fit=cover">

	<!-- Favicons Icon -->
	<link rel="shortcut icon" type="image/x-icon" href="../../assets/images/app-logo/favicon.png">

	<!-- PWA Version -->
	<link rel="manifest" href="manifest.json">

	<!-- Global CSS -->
	<link href="../../assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
	<link rel="stylesheet" href="../../assets/vendor/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css">
	<link rel="stylesheet" href="../../assets/vendor/swiper/swiper-bundle.min.css">

	<!-- Stylesheets -->
	<link rel="stylesheet" type="text/css" href="../../assets/css/style.css">

	<!-- Google Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&family=Raleway:wght@300;400;500&display=swap" rel="stylesheet">

</head>

</head>

<body>
	<div class="page-wrapper">
		<!-- Preloader -->
		<div id="preloader">
			<div class="loader">
				<div class="spinner-border text-primary" role="status">
					<span class="visually-hidden">Loading...</span>
				</div>
			</div>
		</div>
		<!-- Preloader end-->

		<!-- Main Content Start  -->
		<main class="page-content">
			<div class="container py-0">
				<div class="dz-authentication-area">
					<div class="main-logo">
						<a href="javascript:void(0);" class="back-btn">
							<i class="feather icon-arrow-left"></i>
						</a>
						<div class="logo">
							<img src="../../assets/images/app-logo/logo.png" alt="logo">
						</div>
					</div>
					<div class="section-head">
						<h3 class="title">Create an account</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor </p>
					</div>
					<div class="account-section">
						<form class="m-b20" id="signup-form">
							<div class="mb-4">
								<label class="form-label" for="userId">CLSU ID Number</label>
								<div class="input-group input-mini input-lg">
									<input type="text" id="userId" class="form-control" name="userId" placeholder="24-0001" required>
								</div>
							</div>
							<div class="mb-4">
								<label class="form-label" for="name">Username</label>
								<div class="input-group input-mini input-lg">
									<input type="text" id="name" class="form-control" name="username" placeholder="username" required>
								</div>
							</div>
							<div class="mb-4">
								<label class="form-label" for="email">Email</label>
								<div class="input-group input-mini input-lg">
									<input type="email" id="email" class="form-control" name="email" placeholder="email@example.com" required>
								</div>
							</div>
							<div class="m-b30">
								<label class="form-label" for="password">Password</label>
								<div class="input-group input-mini input-lg">
									<input type="password" id="password" class="form-control dz-password" name="password" placeholder="*********" required>
									<span class="input-group-text show-pass">
										<i class="icon feather icon-eye-off eye-close"></i>
										<i class="icon feather icon-eye eye-open"></i>
									</span>
								</div>
							</div>
							<div class="m-b30">
								<label class="form-label" for="confirmPassword">Confirm Password</label>
								<div class="input-group input-mini input-lg">
									<input type="password" id="confirmPassword" class="form-control dz-password" name="confirmPassword" placeholder="*********" required>
									<span class="input-group-text show-pass">
										<i class="icon feather icon-eye-off eye-close"></i>
										<i class="icon feather icon-eye eye-open"></i>
									</span>
								</div>
							</div>
							<button type="button" class="btn btn-thin btn-lg w-100 btn-primary rounded-xl" onclick="submitSignUp()">Sign up</button>
						</form>
						<div class="text-center">
							<p class="form-text">By tapping “Sign Up” you accept our <a href="javascript:void(0);" class="link">terms</a> and <a href="javascript:void(0);" class="link">condition</a></p>
						</div>
					</div>


				</div>
			</div>
		</main>
		<!-- Main Content End  -->

		<!-- Modal for Alerts -->
		<div class="modal fade" id="alertModal" tabindex="-1" role="dialog" aria-labelledby="alertModalCenterTitle" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div id="alertModalContent" class="modal-content" style="padding: 20px; font-size:large; ">
					<div class=" " id="alertModalBody">
					</div>
				</div>
			</div>
		</div>


	</div>
	<!--**********************************
    Scripts
***********************************-->
	<script src="../../assets/js//jquery.js"></script>
	<script src="../../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="../../assets/vendor/swiper/swiper-bundle.min.js"></script><!-- Swiper -->
	<script src="../../assets/js//dz.carousel.js"></script><!-- Swiper -->
	<script src="../../assets/js//settings.js"></script>
	<script src="../../assets/js//custom.js"></script>
	<script>
		function submitSignUp() {

			const form = document.getElementById('signup-form');
			const formData = new FormData(form);
			var userId = document.getElementById('userId').value;
			var username = document.getElementById('name').value;
			var email = document.getElementById('email').value;
			var password = document.getElementById('password').value;
			var confirmPassword = document.getElementById('confirmPassword').value;

			if (userId === '' || username === '' || email === '' || password === '' || confirmPassword === '') {
				const alertModalContent = document.getElementById('alertModalContent');
				const alertModalBody = document.getElementById('alertModalBody');

				alertModalContent.className = 'modal-content alert alert-danger alert-dismissible alert-alt fade show';
				alertModalBody.innerHTML = `<strong>Error!</strong> All fields are required`;
				new bootstrap.Modal(document.getElementById('alertModal')).show();
				return;
			}

			fetch('submit-signup.php', {
					method: 'POST',
					body: formData
				}).then(response => response.json())
				.then(data => {
					const alertModalContent = document.getElementById('alertModalContent');
					const alertModalBody = document.getElementById('alertModalBody');

					if (data.status === 'success') {
						alertModalContent.className = 'modal-content alert alert-primary alert-dismissible alert-alt fade show';
						alertModalBody.innerHTML = `<strong>Success!</strong> ${data.message}`;
						new bootstrap.Modal(document.getElementById('alertModal')).show();
						setTimeout(() => {
							window.location.href = 'sign-in.php';
						}, 2000);
					} else {
						alertModalContent.className = data.alertClass;
						alertModalBody.innerHTML = `<strong>${data.alertTitle}</strong> ${data.message}`;
						new bootstrap.Modal(document.getElementById('alertModal')).show();
					}
				});
		}
	</script>


</body>

</html>