<div id="vnt-content">
	<div id="vnt-navation" class="breadcrumb">
		<div class="wrapper">
			<div class="navation">
				<ul>
					<li>
						<a title="Trang chủ" href="<?= base_url() ?>">
							<span itemprop="title">Trang chủ</span>
						</a>
					</li>
					<li>
						<a href="#">
							<span><?= $tour->name ?></span>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div> <!-- hết breadcrumb -->

	<div class="main_chitiettour">
		<div class="container n3-tour-detail">
			<div class="row">
				<div class="col-xs-12 mg-bot15">
					<h1 class="tour-namechitiet" itemprop="name">
						<a><?= $tour->name ?></a>
					</h1>
					<div class="tour-code">
						<i class="fas fa-barcode"></i>&nbsp;&nbsp;
						<?= $tour->id ?>
					</div>
				</div>
				<div class="slideshow-pt col-lg-8 col-md-12 col-sm-12 col-xs-12 pos-relative">
					<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
						<div class="carousel-inner">
							<div class="carousel-item active">
								<img class="d-block w-100" src="<?= base_url('upload/tour/').$tour->image_link ?>" alt="First slide">
							</div>
						</div>
					</div>
				</div>
				<div class="info col-lg-4 col-md-12 col-sm-12 col-xs-12">
					<div class="frame-info pos-relative">
						<div class="sec1">
							<div class="viewed">
								<i class="fas fa-eye"></i>&nbsp;&nbsp;<span><?= $tour->view ?></span>&nbsp;&nbsp;
								<i class="far fa-thumbs-up" style="color: #777"></i>&nbsp;&nbsp;<span>126</span>&nbsp;&nbsp;
							</div>
						</div>
						<div class="sec2">
							<div class="row mg-bot10">
								<div class="col-lg-4 col-md-2 col-sm-3 col-xs-6">Khởi hành:</div>
								<div class="col-lg-8 col-md-10 col-sm-9 col-xs-6">
									<div class="mg-bot-date">
										<?= get_date($tour->ngay_di) ?>
									</div>
								</div>
							</div>
							<div class="row mg-bot10">
								<div class="col-lg-4 col-md-2 col-sm-3 col-xs-6">Ngày về:</div>
								<div class="col-lg-8 col-md-10 col-sm-9 col-xs-6">
									<?= get_date($tour->ngay_ve) ?>
								</div>
							</div>
							<!-- <div class="row">
								<div class="col-lg-4 col-md-2 col-sm-3 col-xs-6" style="padding-right: 0px !important;">Nơi khởi hành:</div>
								<div class="col-lg-8 col-md-10 col-sm-9 col-xs-6">
									Hà Nội
								</div>
							</div> -->
						</div>
						<div class="sec3">
							<div class="row">
								<div class="col-xs-12 mg-bot10 giauudai">
									<span class="font500">Giá ưu đãi khi Đăng ký &amp; thanh toán trực tuyến</span>
								</div>
							<?php if($tour->discount > 0): ?>
							<?php $price_new = $tour->price - $tour->discount;?>
								<div class="col-lg-8 col-md-8 col-sm-8 col-xs-7">
									<div style="margin-bottom: 7px;" itemscope="" itemtype="http://schema.org/PriceSpecification">
										<span class="price" itemprop="price" content=""><?= number_format($price_new)?></span>&nbsp;<span class="unit" itemprop="priceCurrency" content="VND">đ</span>
									</div>
								</div>
								<?php else:?>
									<div class="col-lg-8 col-md-8 col-sm-8 col-xs-7">
									<div style="margin-bottom: 7px;" itemscope="" itemtype="http://schema.org/PriceSpecification">
										<span class="price" itemprop="price" content=""><?= number_format($tour->price)?> ?></span>&nbsp;<span class="unit" itemprop="priceCurrency" content="VND">đ</span>
									</div>
								</div>
							    <?php endif; ?>
							    <?php if ($tour->amount > $tour->booked): ?>
							    	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-5 text-right">
							    		<a href="<?= base_url('cart/add/').$tour->id ?>" class="btn btn-book1 btn-md">Đặt ngay</a>
							    	</div>
								<?php else: ?>
									<div class="col-lg-4 col-md-4 col-sm-4 col-xs-5 text-right">
							    		<span style="color: red">Đã đặt hết</span>
							    	</div>
								<?php endif; ?>
							</div>
						</div>
						<div class="sec5">
							<div style="margin-bottom: 8px;">Bạn cần hỗ trợ?</div>
							<div>
								<div class="f-left btn-s1">
									<a href="#" target="_blank">
										<img src="<?= base_url() ?>images/call.png" alt="phone">
									</a>
								</div>
								<div class="f-left btn-s2" data-toggle="modal" data-target="#divTuVan" style="cursor:pointer;"><img src="<?= base_url() ?>images/call2.png" alt="phone"></div>
								<div class="clear"></div>
							</div>
						</div>
						<div class="bg-phone hidden-md hidden-sm hidden-xs">
							<img src="<?= base_url() ?>images/bg-phone.png" alt="phone">
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 paddingtopinfo">
					<div class="menu-left mg-bot30">
						<div class="panel panel-default panel-side-menu">
							<div class="panel-body panel-body-nav">
								<div class="side-menu">
									<ul class="list-unstyled">
										<li id="cct" class="tab-chuongtrinhtour active">
											<a href="#">
												<i class="fas fa-spinner"></i>
												&nbsp;&nbsp;
												<span>Chương trình tour</span>
											</a>
										</li>
										<li class="tab-chitiettour" id="tabChiTiet">
											<a href="">
												<i class="fas fa-list"></i>
												&nbsp;&nbsp;
												<span>Chi tiết tour</span>
											</a>
										</li>
										<li class="tab-lienhe" id="tabLienHe">
											<a href="#">
												<i class="fas fa-podcast"></i>
												&nbsp;&nbsp;
												<span>Liên hệ</span>
											</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="services">
						<div class="title-lg">Dịch vụ đi kèm</div>
						<div class="frame-service">
							<ul class="list-service">
								<li>Bữa ăn theo chương trình</li>
								<li>Bảo hiểm</li>
								<li>Hướng dẫn viên</li>
								<li>Vé tham quan</li>
								<li>Vận chuyển</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-9 col-md-9 col-sm-8 col-xs-12 paddingtopinfo">
					<div class="sec-info">
						<div class="chuongtrinhtour mg-bot30">
							<div class="title-lg">
								<h2>Nội dung tour</h2>
							</div>
							<div style="line-height: 20px; text-align: justify;padding:20px 20px 0px 20px"></div>
						</div>

						<div class="boxTour" id="flag1">
							<div class="khoikhoihanh">
								<div class="title">
									<span class="">Điểm nhấn hành trình</span>
								</div>
								<div class="content">
									<div style="text-align: justify;">
										<table align="left" border="0" cellpadding="10" cellspacing="10" style="width:100%;">
											<tbody class="body_tr">
												<tr>
													<td style="width: 20%;">
														<span style="color:#555555;">
															<strong>Hành trình:</strong>
														</span>
													</td>
													<td>
														<span style="color:#555555;">
															<strong><?= $tour->name ?></strong>
														</span>
													</td>
												</tr>
												<tr>
													<td>
														<span style="color:#555555;">
															<strong>Lịch trình:</strong>
														</span>
													</td>
													<td>
														<span style="color:#555555;">
															<strong></strong>
														</span>
													</td>
												</tr>
												<tr>
													<td>
														<span style="color:#555555;">
															<strong>Ngày khởi hành:</strong>
														</span>
													</td>
													<td>
														<span style="color:#555555;">
															<strong><?= $tour->ngay_di ?></strong>
														</span>
													</td>
												</tr>
												<tr>
													<td>
														<span style="color:#555555;">
															<strong>Ngày khởi về:</strong>
														</span>
													</td>
													<td>
														<span style="color:#555555;">
															<strong><?= $tour->ngay_ve ?></strong>
														</span>
													</td>
												</tr>
												<tr>
													<td>
														<span style="color:#555555;">
															<strong>Vận chuyển:</strong>
														</span>
													</td>
													<td>
														<span style="color:#555555;">
															<strong>Máy bay khứ hồi &amp; xe du lịch đời mới</strong>
														</span>
													</td>
												</tr>
												<tr>
													<td>&nbsp;</td>
													<td>&nbsp;</td>
												</tr>
											</tbody>
										</table>
									</div>            
								</div>
							</div>
						</div>
						<div class="boxTour" id="flag2">
							<div class="title">
								<span class="lichtrinh">Nội dung</span>
							</div>
							<div class="content">
								<div class="listDay">
									<div>
										<?= $tour->content ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
</div>