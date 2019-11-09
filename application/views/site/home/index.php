<?php $this->load->view('site/slide'); ?>
<div class="khoi4 diemdenyt">
	<div class="container banner4">
		<div class="tdaddress td-ddyt">
			<h2 class="ddyt">Tour Giảm Giá và lượt View Cao</h2>
			<p>Các điểm đến du lịch trong nước</p>
		</div>
		<div class="row sl-travelto">
			<?php foreach ($tour_discount as $row): ?>
			<div class="col-sm-3 sl-travel">
				<div class="pos-travel">
					<a href="<?= base_url('tour/view/').$row->id ?>" class="bg-travel">
						<img src="<?= base_url('upload/tour/').$row->image_link ?>" alt="">
						<div class="tt-tour">
							<div class="destination-name"><?= $row->name ?></div>
							<?php $percent = ($row->discount / $row->price)*100 ?>
							<div class="destination-like">Giảm giá: <?= round($percent) ?> 
								<span class="num-like">
									<sup class="k">%</sup>
								</span>
							</div>
						</div>
					</a>
				</div>
			</div>
			<?php endforeach ?>
		
			<div class="col-xs-12 netdut">
				<div style="border-top: 1px dashed #ccc;padding-bottom: 30px;padding-top: 0px;"></div>
			</div>
			
            <?php foreach ($tour_view as $row): ?>
			<div class="col-sm-2 sl-travel">
				<div class="pos-travel">
					<a href="<?= base_url('tour/view/').$row->id ?>" class="bg-travel bg-small">

						<img class="imgqg" src="<?= base_url('upload/tour/').$row->image_link ?>" alt="">
						<div class="tt-tour">
							<div class="destination-name"><?= $row->name ?></div>
							<div class="destination-like">View: 
								<span class="num-like"><?= $row->view ?>
								</span>lượt 
							</div>
						</div>

					</a>
				</div>	    
			</div>
			<?php endforeach ?>
		</div>
	</div>
</div><!--  hết khối diem den yeu thich -->

<div class="khoidulich360">
	<div class="container">
		<div class="tdaddress">
			<h2 class="ddyt">Tour du lịch Ba Miền</h2>
			<p>Các điểm đến du lịch trong nước</p>
		</div>
		<div class="row">
			<?php foreach ($catalog_list as $sub): ?>
				<div class="col-sm-12">
					<div class="divdulich360">
						<div class="dulich360">
							<div class="frame-title">
								<div class="bor-line"></div>
								<div class="f-title">
									<a href="/vn/chu-de/du-lich-360-do.aspx" title="Du lịch 360 độ"><?= $sub->name ?></a>
								</div>
							</div> <!-- het frame-title -->
							<div class="clear"></div>
							<?php foreach ($tour as $row): ?>
								<?php if($row->catalog_id == $sub->id): ?>
									<div class="mg-bot15 sub_tin">
										<div class="col-sm-4">
											<div class="col-lg-12">
												<hr>
											</div>
											<div class="sangngang">
												<div class="col-lg-5 mg-bot">
													<a href="<?= base_url('tour/view/').$row->id ?>" title="<?= $row->name ?>" class="hvr-shutter-out-vertical">
														<img src="<?= base_url('upload/tour/').$row->image_link ?>" alt="Hành hương về núi thiêng Kailash" title="Hành hương về núi thiêng Kailash" class="img-responsive pic-sub">
													</a>
												</div>
												<div class="col-lg-7">
													<h2 class="mg-bot10 dot-dot cattieude ddd-truncated" style="word-wrap: break-word;">
														<?= $row->name ?>
													</h2>
													<p class="dot-dot catnoidung content-lh-2row" style="word-wrap: break-word;">
														<?= $row->content ?>
													</p>
													<div class="giatourhome">
														<i class="fas fa-money-check-alt"></i>
														<p><?= number_format($row->price) ?> đ</p>
													</div>
													<div>
														<div class="f-left">
															<i class="far fa-clock" style="color: #999;"></i>&nbsp;
															<span style="color: #0aa0fe;font-style: italic;font-weight: bold;font-size: 11px;"><?= $row->ngay_di?></span>
														</div>
														<div class="f-right">
														</div>
														<div class="clear"></div>
													</div>
												</div>
											</div>
										</div>
									</div> <!-- het sub_tin -->
								<?php endif; ?>
							<?php endforeach; ?>

						</div><!--  het 360 -->
					</div>
				</div> <!-- het col-sm-12 -->
			<?php endforeach; ?>
		</div>
	</div>
</div> <!-- het khoi 360 -->

<div class="whytravel">
	<div class="framewhy">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-3 col-sm-4 hidden-xs visaorespon">
					<div class="bg-why">
						<img src="images/bg-why.png" alt="">
						<div class="pos-title">
							<h2 class="titlewhy">
								<span class="t-visao">Vì sao chọn</span>
								<br>
								<span class="t-chontravel">502-Travel.vn?</span>
							</h2>
						</div>
						<div class="pos-arrow">
							<img src="images/arrow1.png" alt="">
						</div>
					</div>
				</div>
				<div class="col-lg-8 col-md-9 col-sm-8 col-xs-12 lydo">
					<div class="row">	
						<div class="col-md-4 col-sm-6 col-xs-12 mg-bot">
							<div class="item">
								<div class="item-num">1.</div>
								<div class="item-name" style="text-transform: uppercase;">Mạng bán tour</div>
								<div class="item-line">---------------------------</div>
								<div class="item-des">
									<p class="mg-bot5">Số 1 tại Việt Nam</p>
									<p>Ứng dụng công nghệ mới nhất</p>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12 mg-bot">
							<div class="item">
								<div class="item-num">2.</div>
								<div class="item-name" style="text-transform: uppercase;">Thanh toán</div>
								<div class="item-line">---------------------------</div>
								<div class="item-des">
									<p class="mg-bot5">An toàn và linh hoạt</p>
									<p>Liên kết với các tổ chức tài chính</p>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12 mg-bot">
							<div class="item">
								<div class="item-num">3.</div>
								<div class="item-name" style="text-transform: uppercase;">Giá cả</div>
								<div class="item-line">---------------------------</div>
								<div class="item-des">
									<p class="mg-bot5">Luôn có mức giá tốt nhất</p>
									<p>Bảo đảm giá tốt</p>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12 mg-bot">
							<div class="item">
								<div class="item-num">4.</div>
								<div class="item-name" style="text-transform: uppercase;">Sản phẩm</div>
								<div class="item-line">---------------------------</div>
								<div class="item-des">
									<p class="mg-bot5">Đa dạng, chất lượng</p>
									<p>Đạt chất lượng tốt nhất</p>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12 mg-bot">
							<div class="item">
								<div class="item-num">5.</div>
								<div class="item-name" style="text-transform: uppercase;">Đặt tour</div>
								<div class="item-line">---------------------------</div>
								<div class="item-des">
									<p class="mg-bot5">Dễ dàng và nhanh chóng</p>
									<p>Đặt tour chỉ với 3 bước</p>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12 mg-bot">
							<div class="item">
								<div class="item-num">6.</div>
								<div class="item-name" style="text-transform: uppercase;">Hỗ trợ</div>
								<div class="item-line">---------------------------</div>
								<div class="item-des">
									<p class="mg-bot5">Từ 08h00 - 23h00</p>
									<p>Hotline và hỗ trợ trực tuyến</p>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
</div> <!-- hết tại sao chọn travel -->


