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
						<a href="dulichmienbac.php">
							<span>Du Lịch</span>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>

	<div class="wrapCont">
		<div class="wrapper">
			<div class="mda-archive" itemscope="" itemtype="http://schema.org/Product">
			<?php foreach ($catalog_list as $row): ?>
			<?php if($row->id == $id): ?>
				<h1 itemprop="name" class="mda-archive-title">
					<a itemprop="url" title="Du lịch Miền <?= $row->name ?>" href="">Du lịch miền <?= $row->name ?> </a>
				</h1>
				
				<div style="display: none">
					<div itemprop="review" itemscope="" itemtype="https://schema.org/Review">
						
						<span itemprop="name">Du lịch Miền <?= $row->name ?></span>
						<span itemprop="author" itemscope="" itemtype="https://schema.org/Person">
							<span itemprop="name">Du lịch Việt</span>
						</span>
						<div itemprop="reviewBody">
							&nbsp;Du lịch Miền <?= $row->name ?> - Miền <?= $row->name ?>&nbsp;mang nhiều dấu ấn lịch sử lâu đời từ thời Vua Hùng dựng nước&nbsp;cho đến các triều đại phong kiến giữ nước. Du lịch Miền <?= $row->name ?>&nbsp;là hành trình hấp dẫn dành cho những ai yêu thích lịch sử, mong muốn tìm hiểu và trải nghiệm những điều mới mẻ mà chỉ vùng đất "<?= $row->name ?> kỳ" mới có. Đến với Tour du lịch Miền <?= $row->name ?> du khách sẽ được tham quan những di tích lịch sử lâu đời, được hóa thân vào các vai Vua chúa, quan đại thần, cung phi, hoàng hậu,.... Quý khách có thể đặt tour đi Miền <?= $row->name ?> trực tuyến ngay tại website Du Lịch Việt để nhận được nhiều ưu đãi hấp dẫn. Hoặc tham khảo thêm các thông tin khuyến mãi du lịch Miền <?= $row->name ?> ngay bên dưới:&nbsp;
						</div>
						
					</div>
				</div>

				<div class="mda-info-share clearfix">
					<div class="mda-facebook">
						<div id="fb-root"></div>
						<div class="fb-like" data-href="https://dulichviet.com.vn/du-lich-mien-bac" data-layout="button_count" data-action="like" data-size="small" data-show-faces="false" data-share="true"></div>
					</div>
				</div>
				<div class="mda-archive-content" itemprop="description">
					<div style="text-align: justify;">&nbsp;</div>

					<div style="text-align: justify;">
						<span style="font-size:14px;">
							<a href="https://dulichviet.com.vn/du-lich-mien-bac">
								<strong>Du lịch Miền <?= $row->name ?></strong>
							</a> - <b>Miền <?= $row->name ?>&nbsp;</b>mang nhiều dấu ấn lịch sử lâu đời từ thời Vua Hùng dựng nước&nbsp;cho đến các triều đại phong kiến giữ nước. 
							<a href="https://dulichviet.com.vn/du-lich-mien-bac">
								<strong>Du lịch Miền <?= $row->name ?></strong>
							</a>&nbsp;là hành trình hấp dẫn dành cho những ai yêu thích lịch sử, mong muốn tìm hiểu và trải nghiệm những điều mới mẻ mà chỉ vùng đất 
							<em>"<?= $row->name ?> kỳ"</em> mới có. Đến với 
							<strong>
								<a href="https://dulichviet.com.vn/du-lich-mien-bac">Tour du lịch Miền <?= $row->name ?></a>
							</strong> du khách sẽ được tham quan những di tích lịch sử lâu đời, được hóa thân vào các vai Vua chúa, quan đại thần, cung phi, hoàng hậu,.... Quý khách có thể đặt 
							<strong>
								<a href="https://dulichviet.com.vn/du-lich-mien-bac" target="_blank">tour đi Miền <?= $row->name ?></a> 
							</strong>trực tuyến ngay tại website 
							<a href="http://dulichviet.com.vn">
								<strong>Du Lịch Việt</strong>
							</a> để nhận được nhiều ưu đãi hấp dẫn. Hoặc tham khảo thêm các thông tin khuyến mãi 
							<strong>du lịch</strong>
							<em>
								<strong> Miền <?= $row->name ?> </strong>
							</em>ngay bên dưới:
						</span>
					</div>
				</div>
			    <?php endif; ?>
				<?php endforeach ?>
			</div>
		</div>

		<div class="noidung3 noidung4 ">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<div class="text-xs-center">
							<h3 class="tdto mb-3">Các Tour du lịch mới</h3>
						</div>
					</div> <!-- hết col-12 -->
				</div> <!-- hết row tieude -->
				<div class="row">
					<?php foreach ($tour_new as $row): ?>
					<div class="col-sm-4">
						<a href="<?= base_url('tour/view/').$row->id ?>">
						<div class="oneuser">
							<div class="imguser text-xs-center">
								<img src="<?= base_url('upload/tour/').$row->image_link ?>" alt="">
								<h4 class="ten"><?= $row->name ?></h4>
								<i class="giatien"><?= number_format($row->price) ?> đ</i>
							</div>
							<div class="infouser">
								<h3 class="ten"><?= $row->name ?></h3>
								<div class="diemden">
									<span>Điểm đến : </span>
									<i class="vitri"><?= $row->name ?></i>
								</div>
								<div class="time-mbac">
									<i class="far fa-user"></i>
									<span><?= $row->amount - $row->booked ?>/<?= $row->amount ?> người</span>
								</div>
								<div class="time-mbac">
									<i class="far fa-clock"></i>
									<span><?= $row->days ?> ngày</span>
								</div>
								<div class="gia-calender">
									<div class="calender">
										<i class="far fa-calendar-alt"></i>
										<span></span>
									</div>
									<?php if($row->discount > 0) ?>
									<?php $price = $row->price - $row->discount ?>
									<div class="gia"><span><?= number_format($price) ?> đ</span></div>
								</div>
							</div>
						</div>
					    </a>
					</div>
				
					<?php endforeach ?>
			</div> <!-- hết row  -->
           
			<div class="row mbac_more">
				<?php foreach ($tour as $row): ?>
				<div class="col-sm-4">
					<a href="<?= base_url('tour/view/').$row->id?>">
					<div class="sp">
						<img src="<?= base_url('upload/tour/').$row->image_link ?>" alt="">
						<div class="ten">
							<div class="goi">
								<div class="danhmuc">Tour <?= $row->name ?></div>
								<?php if($row->discount > 0) ?>
								<?php $price = $row->price - $row->discount ?>
								<div class="tenchitiet"><?= number_format($price) ?></div>
							</div>
						</div>
					</div>
					</a>
				</div>
				<?php endforeach ?>
			</div>
			
		</div> <!-- hết noidung3 -->
	</div> <!-- HẾT wrapCont -->
</div>