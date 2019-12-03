<div class="titleArea">
	<div class="wrapper">
		<div class="pageTitle">
			<h5>Bảng điều khiển</h5>
			<span>Trang quản lý hệ thống</span>
		</div>
		
		<div class="clear"></div>
	</div>
</div>
<div class="line"></div>

<div class="wrapper">
	
	<div class="widgets">
		<!-- Stats -->
		
		<!-- Amount -->
		<div class="oneTwo">
			<div class="widget">
				<div class="title">
					<img src="<?= public_url('admin') ?>/images/icons/dark/money.png" class="titleIcon">
					<h6>Doanh thu</h6>
				</div>

				<table cellpadding="0" cellspacing="0" width="100%" class="sTable myTable">
					<tbody>

						<tr>
							<td class="fontB blue f13">Tổng doanh thu</td>
							<td class="textR webStatsLink red" style="width:120px;"><?= number_format($total_price )?> đ</td>
						</tr>

						<tr>
							<td class="fontB blue f13">Doanh thu hôm nay</td>
							<td class="textR webStatsLink red" style="width:120px;"><?= number_format($total_ngay) ?> đ</td>
						</tr>

						<tr>
							<td class="fontB blue f13">Doanh thu theo tháng</td>
							<td class="textR webStatsLink red" style="width:120px;">
								<?= number_format($total_thang) ?> đ
							</td>
						</tr>

					</tbody>
				</table>
			</div>
		</div>


		<!-- User -->
		<div class="oneTwo">
			<div class="widget">
				<div class="title">
					<img src="<?= public_url('admin') ?>/images/icons/dark/users.png" class="titleIcon">
					<h6>Thống kê dữ liệu</h6>
				</div>
				<table cellpadding="0" cellspacing="0" width="100%" class="sTable myTable">
					<tbody>
						<tr>
							<td>
								<div class="left">Tổng số giao dịch</div>
								<div class="right f11"><a href="<?= base_url('admin/giaodich') ?>">Chi tiết</a></div>
							</td>

							<td class="textC webStatsLink">
							<?= $total_giaodich ?>			</td>
						</tr>
						<tr>
							<td>
								<div class="left">Tổng số tour</div>
								<div class="right f11"><a href="<?= base_url('admin/tour') ?>">Chi tiết</a></div>
							</td>
							<td class="textC webStatsLink"><?= $total_tour ?></td>
						</tr>

						<tr>
							<td>
								<div class="left">Tổng số thành viên</div>
								<div class="right f11"><a href="<?= base_url('admin/admin') ?>">Chi tiết</a></div>
							</td>

							<td class="textC webStatsLink"><?= $total_user ?></td>
						</tr>
						<tr>
							<td>
								<div class="left">Tổng số liên hệ</div>
								<div class="right f11">
									<a href="<?= base_url('admin/contact') ?>">Chi tiết</a>
								</div>
							</td>

							<td class="textC webStatsLink"><?= $total_contact ?></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>

		<div class="clear"></div>
		
		<!-- Giao dich thanh cong gan day nhat -->
		
		<div class="widget">
			<div class="title">
				<span class="titleIcon"><div class="checker" id="uniform-titleCheck"><span><input type="checkbox" id="titleCheck" name="titleCheck" style="opacity: 0;"></span></div></span>
				<h6>Danh sách Giao dịch</h6>
			</div>

			<table cellpadding="0" cellspacing="0" width="100%" class="sTable mTable myTable" id="checkAll">


				<thead>
					<tr>
					<!-- 	<td style="width:10px;">
							<img src="<?= public_url('admin') ?>/images/icons/tableArrows.png">
						</td> -->
						<td style="width:60px;">Mã số</td>
						<td style="width:75px;">Tên</td>
						<td style="width:75px;">email</td>
						<td style="width:90px;">Số tiền</td>
						<td>Hình thức</td>
						<td style="width:75px;">Ngày tạo</td>
						<td style="width:55px;">Hành động</td>
					</tr>
				</thead>

				<tfoot class="auto_check_pages">
					<tr>
						<td colspan="9">
							<div class="list_action itemActions">
								<!-- <a href="#submit" id="submit" class="button blueB" url="admin/tran/del_all.html">
									<span style="color:white;">Xóa hết</span>
								</a> -->
							</div>
						</td>
					</tr>
				</tfoot>

				<tbody class="list_item">
					<?php foreach ($list as $row): ?>
						<tr>
							<!-- <td><div class="checker" id="uniform-undefined"><span><input type="checkbox" name="id[]" value="<?= $row->id ?>" style="opacity: 0;"></span></div></td> -->

							<td class="textC"><?= $row->id ?></td>

							<td class="textC"><?= $row->ten ?></td>

							<td class="textC"><?= $row->email ?></td>

							<td class="textR red"><?= number_format($row->so_tien) ?> đ</td>

							<td><?php if($row->hinhthuc_thanhtoan == 'offline'): ?>
							<?= 'Đến đại lý thanh toán' ?>
							<?php endif; ?></td>


							<!-- <td class="status textC">
								<span class="pending">Chờ xử lý</span>
							</td> -->

							<td class="textC"><?= get_date($row->created) ?></td>

							<td class="textC">
								<a href="<?= admin_url('order/view/').$row->id ?>" class="lightbox cboxElement" title="Xem chi tiết">
									<img src="<?= public_url('admin') ?>/images/icons/color/view.png">
								</a>
							</td>
						</tr>
					<?php endforeach ?>
				</tbody>

			</table>
		</div>
	</div>
</div>