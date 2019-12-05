<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Đăng ký</title>
	<link rel="stylesheet" href="<?= base_url() ?>main.css">
</head>
<body>
	<div class="MainDangky">
		<div class="inner_maindk">
			<H1 class="name_dangky" >Đăng ký</H1>
			<div class="container global_dangky">
				<form method="post" class="form_dangky">
					<div class="form-control global_email glob_inner">
						<span>Email*</span>
						<input type="text" name="email" placeholder="Nhập Email">
					</div>
					<div class="form-control global_matkhau glob_inner">
						<span>Mật khẩu*</span>
						<input type="text" name="password" placeholder="Nhập password">
					</div>
					<div class="form-control global_nhaplaimk glob_inner">
						<span>Nhập lại mật khẩu*</span>
						<input type="text" name="re_password" placeholder="Nhập lại password">
					</div>
					<div class="form-control global_name glob_inner">
						<span>Họ và tên*</span>
						<input type="text" name="ten" placeholder="Họ và Tên">
					</div>
					<div class="form-control global_sdt glob_inner">
						<span>Sdt*</span>
						<input type="text" name="sdt" placeholder="Số điện thọa">
					</div>
					<div class="form-control global_cmt glob_inner">
						<span>cmnd*</span>
						<input type="text" name="cmnd" placeholder="Số chứng minh thư nhân dân">
					</div>
					<div class="form-control global_address glob_inner">
						<span>Địa chỉ*</span>
						<input name="diachi" placeholder="nhập địa chỉ"></input>
					</div>
					<input type="submit" name="submit" class="button btn_dangky" value="Đăng ký">
				</form>
			</div>
		</div>
	</div>
</body>
</html>