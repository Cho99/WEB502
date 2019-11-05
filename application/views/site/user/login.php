<!DOCTYPE html>
<html lang="en">
<head>
	<title>502 Travel</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>

	<link rel="stylesheet" type="text/css" href="<?= base_url('public/vendor/') ?>bootstrap/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="<?= base_url('public/') ?>fonts/font-awesome-4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="<?= base_url('public/') ?>fonts/iconic/css/material-design-iconic-font.min.css">

	<link rel="stylesheet" type="text/css" href="<?= base_url('public/') ?><?= base_url('public/vendor/') ?>animate/animate.css">

	<link rel="stylesheet" type="text/css" href="<?= base_url('public/vendor/') ?>css-hamburgers/hamburgers.min.css">

	<link rel="stylesheet" type="text/css" href="<?= base_url('public/vendor/') ?>animsition/css/animsition.min.css">

	<link rel="stylesheet" type="text/css" href="<?= base_url('public/vendor/') ?>select2/select2.min.css">

	<link rel="stylesheet" type="text/css" href="<?= base_url('public/vendor/') ?>daterangepicker/daterangepicker.css">

	<link rel="stylesheet" type="text/css" href="<?= base_url('public/') ?>css/util.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url('public/') ?>css/main.css">

</head>
<body>
	<div class="limiter">
		<div class="container-login100" style="background-image: url('<?= base_url() ?>images/background.jpg');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
				<form class="login100-form validate-form" action="login" method="post">

					<span class="login100-form-title p-b-49" style="font-family: sans-serif;">
						502 Travel
					</span>
					<span class="login100-form-title " style="font-family: sans-serif; font-size: 25px">
						Đăng nhập
					</span>

					<div class="wrap-input100 validate-input m-b-23" data-validate = "Username is reauired">
						<span class="label-input100">Email</span>
						<input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<span class="label-input100">Mật khẩu</span>
						<input class="input100" type="password" name="password" placeholder="Mật khẩu">
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>
					<h3 style="color: red"><?= form_error('login') ?>
					
					</h3>

					<div class="text-left p-t-8 p-b-31">
							<input type="checkbox" name="" value=""> Nhớ mật khẩu
					</div>
					
					<div class="" >
							Bạn chưa có tài khoản? <a href="#" style="color: darkviolet; ;font-family:sans-serif; font:caption;">Đăng ký ngay hoàn toàn miễn phí</a>
						
					</div>

					<div class="text-left p-b-31">
							Quên mật khẩu? <a href="#" style="color: blueviolet; font-family:sans-serif; font:caption;">Lấy lại mật khẩu</a>
					</div>
					
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" name="login" style="font-family:sans-serif; ">
								Đăng nhập
							</button>
						</div>
					</div>

					<div class="txt1 text-center p-t-54 p-b-20" style="font-family:sans-serif;" >
						<span>
							Đăng nhập bằng
						</span>
					</div>

					<div class="flex-c-m">
						<a href="#" class="login100-social-item bg1">
							<i class="fa fa-facebook"></i>
						</a>

						<a href="#" class="login100-social-item bg2">
							<i class="fa fa-twitter"></i>
						</a>

						<a href="#" class="login100-social-item bg3">
							<i class="fa fa-google"></i>
						</a>
					</div>

				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	

	<script src="<?= base_url('public/vendor/') ?>jquery/jquery-3.2.1.min.js"></script>

	<script src="<?= base_url('public/vendor/') ?>animsition/js/animsition.min.js"></script>

	<script src="<?= base_url('public/vendor/') ?>bootstrap/js/popper.js"></script>
	<script src="<?= base_url('public/vendor/') ?>bootstrap/js/bootstrap.min.js"></script>

	<script src="<?= base_url('public/vendor/') ?>select2/select2.min.js"></script>

	<script src="<?= base_url('public/vendor/') ?>daterangepicker/moment.min.js"></script>
	<script src="<?= base_url('public/vendor/') ?>daterangepicker/daterangepicker.js"></script>

	<script src="<?= base_url('public/vendor/') ?>countdowntime/countdowntime.js"></script>

	<script src="<?= base_url('public/') ?>js/main.js"></script>
</body>
</html>