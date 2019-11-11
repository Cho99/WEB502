<div id="vnt-content">
	<div id="vnt-navation" class="breadcrumb">
		<div class="wrapper">
			<div class="navation">
				<ul>
					<li>
						<a title="Trang chủ" href="index.php">
							<span itemprop="title">Trang chủ</span>
						</a>
					</li>
					<li>
						<a href="lienhe.php">
							<span>Liên hệ</span>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div> <!-- hết breadcrumb -->
	<div class="main_lienhe">
		<div class="container ">
			<div class="row">
				<div class="col-xs-12">
					<div class="td_lienhe">
						<h1><?= $this->session->flashdata('success') ?></h1>
						<h2>Liên Hệ	</h2>
						<p class="text-center">Để có thể đáp ứng được các yêu cầu và các ý kiến đóng góp của quý vị một cách nhanh chóng xin vui lòng liên hệ</p>
					</div>
				</div>
				<div class="col-xs-12 lhmarginn">
					<form class="send_lienhe" method="post">
						<div class="frame-contact">
							<div class="row">
								<div class="col-xs-12 mg-bot15">
									<label>Tiêu đề (<span class="star">*</span>)</label>
									<input type="text" class="form-control" required="required" name="tieude">
								</div>
								<div class="col-lg-4">
									<label>Loại thông tin (" 
										<span class="star">*</span>")
									</label>
									<select class="form-control" name="tt">
										<option value="1">Du lịch</option>
										<option value="2">Chăm sóc khách hàng</option>
									</select>
								</div>
								<div class="col-lg-4">
									<label>Họ tên (" 
										<span class="star">*</span>")
									</label>
									<input type="text" class="form-control" required="required" name="hoten" id="txtHoTen">
								</div>
								<div class="col-lg-4">
									<label>Email (" 
										<span class="star">*</span>")
									</label>
									<input type="email" class="form-control" required="required" name="email" id="txtEmail">
								</div>
								<div class="col-lg-4">
									<label>Điện thoại (" 
										<span class="star">*</span>")
									</label>
									<input type="text" class="form-control" required="required" name="sdt" id="txtDienThoai">
								</div>
								<div class="col-lg-4">
									<label>Số khách</label>
									<input type="text" class="form-control" name="sokhach">
								</div>
								<div class="col-xs-12 mg-bot15">
									<label>Địa chỉ</label>
									<input type="text" class="form-control" name="diachi">
								</div>
								
								<div class="col-xs-12 mg-bot30">
									<label>Nội dung (<span class="star">*</span>)</label>
									<textarea class="form-control" rows="4" cols="5" required="required" name="noidung"></textarea>
								</div>

								<div class="col-xs-12 text-center gui_lh">
									<button type="submit" class="btn btn-md btn-general">Gửi đi &nbsp;&nbsp;<i class="fas fa-paper-plane"></i></button>
								</div>

							</div>
						</div>
					</form>
				</div>
				<div class="col-xs-12 chinhanh">
					<div class="row">
						<?php foreach ($list as $row): ?>
							<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mg-bot30">
								<div class="frame-cn">
									<div class="tencn"><?= $row->ten ?></div>
									<div class="mg-bot7">
										<div class="i-con"><i class="fas fa-map-signs"></i></div>
										<div class="i-text"><?= $row->diachi ?></div>
										<div class="clear"></div>
									</div>
									<div class="mg-bot7">
										<div class="i-con"><i class="fas fa-phone"></i></div>
										<div class="i-text">Tel: (84-28) <?= $row->sdt ?></div>
										<div class="clear"></div>
									</div>
									<div class="mg-bot7">
										<div class="i-con"><i class="fas fa-fax"></i></div>
										<div class="i-text">Fax: (84-28) <?= $row->fax ?></div>
										<div class="clear"></div>
									</div>
									<div class="mg-bot7">
										<div class="i-con"><i class="fas fa-envelope"></i></div>
										<div class="i-text">Email: <?= $row->email ?></div>
										<div class="clear"></div>
									</div>
								</div>
							</div>
						<?php endforeach ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>