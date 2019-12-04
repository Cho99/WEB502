<div class="lzd-playground">
	<?php if($total_items > 0): ?>
	<div class="lzd-playground-main">
		<div class="lzd-playground-nav">
			<div class="member-info">
				<p><span>Xin chào,&nbsp;</span><span id="lzd_current_logon_user_name">Đức Kỷ</span></p>
			</div>
			<ul class="nav-container">
				<li class="item" id="Manage-My-Account">
					<a class="active" href="#" data-spm="Manage-My-Account">
						<span>Quản lý tài khoản</span>
					</a>
					<ul class="item-container">
						<li id="My-profile" class="sub">
							<a href="#" data-spm="My-profile">Thông tin cá nhân</a>
						</li>
						<li id="Address-book" class="sub">
							<a href="#" data-spm="Address-book">Giỏ hàng của bạn</a>
						</li>
					</ul>
				</li>
				<li class="item" id="My-Orders">
					<a href="#" data-spm="My-Orders">
						<span>Du lịch</span>
					</a>
					<ul class="item-container">
						<li id="Returns" class="sub">
							<a href="<?= base_url('tour/mien/1') ?>" data-spm="Returns">Du lịch miền Bắc</a>
						</li>
						<li id="Cancellations" class="sub">
							<a href="<?= base_url('tour/mien/2') ?>" data-spm="Cancellations">Du lịch miền Trung</a>
						</li>
						<li id="Cancellations" class="sub">
							<a href="<?= base_url('tour/mien/3') ?>" data-spm="Cancellations">Du lịch miền Nam</a>
						</li>
					</ul>
				</li>
			
				<li class="item itemkmargin" id="Sell-On-Lazada">
					<a href="#" data-spm="Sell-On-Lazada">
						<span>Liên hệ</span>
					</a>
				</li>
			</ul>
		</div>
		<form action="<?= base_url('cart/update') ?>" method="POST">
		<div class="lzd-playground-right">
			<div class="breadcrumbkhachhang">
				<a data-spm-anchor-id="a2o4n.manage_account.0.0">Đơn hàng của tôi</a>
			</div>
			<?php $total_amount = 0 ?>
			<?php foreach ($carts as $row): ?>
				<?php $total_amount = $total_amount + $row['subtotal']  ?>
			<div class="orders">
				<div class="order">
					<div class="order-info" data-spm-anchor-id="a2o4n.order_list.0.i3.39d4705b28tH0K">
						<div class="pull-left" data-spm-anchor-id="a2o4n.order_list.0.i4.39d4705b28tH0K">
							<div class="info-order-left-text">Địa điểm: <?= $row['name'] ?> <a class="link"></a></div>
							<p class="text info desc">Đặt ngày <!-- <?= get_date($row['created']) ?> --></p>
						</div>
						<div class="pull-cont"></div>
						<a class="pull-right link manage" style="color: rgb(26, 156, 183);">Thông tin tour</a>
						<div class="clear"></div>
					</div>
					<div class="order-item">
						<div class="item-pic" data-spm="detail_image">
							<a href="#">
								<img src="<?= base_url('upload/tour/').$row['image_link'] ?>	">
							</a>
						</div>
						<div class="item-main item-main-mini">
							<div class="khoidonhang">
								<div class="text title item-title giohangflex" data-spm="details_title">
									<h5>Hành trình:</h5>
									<p><?= $row['name'] ?></p>
								</div>
								<div class="text title item-title giohangflex" data-spm="details_title">
									<h5>Giá Tiền/người:</h5>
									<p class="bold"><?= number_format($row['price']) ?>đ</p>
								</div>
								<div class="text title item-title giohangflex" data-spm="details_title">
									<h5>Số người đi:</h5>
									  <input type="number" name="qty_<?php echo $row['id']?>" value="<?php echo $row['qty'];?>" style="width: 10%"/>
									  <!-- <select name="qty_<?php echo $row['id']?>">
									  	<option value="<?php echo $row['qty'];?>"></option>
									  </select> -->
								</div>

								<div class="text title item-title giohangflex" data-spm="details_title">
									<h5>Ngày đi:</h5>
<<<<<<< HEAD
									  <input class="ngayditour" type="date" name="day_<?php echo $row['id']?>" value="<?php echo date('Y-m-d', $row['ngay_di']) ;?>"/>
									  <div><?= form_error('day_'.$row['id']) ?></div>
=======
									  <p class="text bold"><?php echo  get_date($row['ngay_di']);?></p>
>>>>>>> 27d7c8ab30ed64442a4e6975d3a01430d23551cb
								</div>
								<div class="text title item-title giohangflex" data-spm="details_title">
									<h5>Tổng số:</h5>
									<p class="text bold" ><?php echo number_format($row['subtotal']);?>đ</p>
								</div>
							</div>
						</div>
						<div class="item-quantity">
							<span>
								<span class="text desc info multiply">Số lượt còn lại:</span>
								<span class="text">
									<?= $row['booked'] ?> lượt
								</span>
							</span>
							<span>
								<div><a href="<?= base_url('cart/del/').$row['id'] ?>" class="btn btn-danger btn-sm">Hủy</a></div>
							</span>
						</div>
						<div class="clear"></div>
					</div>
				</div>
			</div>
		    <?php endforeach ?>
		    <div class="orders">
		    	<div class="order khoibtntour">
		    		<div>Tổng số tiền thanh toán: <b style="color: red"><?= number_format($total_amount) ?>Đ - <a href="<?= base_url('cart/del') ?>" class="btn btn-warning btn-sm">Xóa toàn bộ giỏ hàng</a></b></div>
		    		<div class="lopbtn">
		    			<button type="submit" class="btn btn-outline-primary btn-sm btncapnhat">Cập nhật</button>
		    		    <a href="order/checkout" class="btn btn-sm - btn-outline-success thanhtoan">Thanh toán</a>
		    		</div>	
		    	</div>
		    </div>
		</div>
		</form>
	</div>
	<?php else: ?>
		<div>Không có tour du lịch nào được đặt</div>
		<div><?= $this->session->flashdata("message"); ?></div>
	<?php endif; ?>
</div>
</div>