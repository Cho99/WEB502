<?php $this->load->view('admin/order/head'); ?>
<div class="line"></div>
<div class="wrapper">

	<div class="widget">
		<div class="title">
			<span class="titleIcon"><img src="<?= base_url('public/admin/') ?>images/icons/tableArrows.png"></span>
			<h6>Danh sách Tour đã đặt</h6>
			
			<div class="num f12">Tổng số: <b>15</b></div>
		</div>
		
		<table cellpadding="0" cellspacing="0" width="100%" class="sTable mTable myTable" id="checkAll">
			<thead class="filter"><tr><td colspan="9">
				<form class="list_filter form" action="index.php/admin/product_order.html" method="get">
					<table cellpadding="0" cellspacing="0" width="100%"><tbody>
						<tr>
							<td class="label" style="width:60px;"><label for="filter_id">Mã số</label></td>
							<td class="item"><input name="id" value="" id="filter_id" type="text" style="width:95px;"></td>

							
							<td colspan="2" style="width:60px">
								<input type="submit" class="button blueB" value="Lọc">
								<input type="reset" class="basic" value="Reset" onclick="window.location.href = 'index.php/admin/product_order.html'; ">
							</td>
							
						</tr>
						
						<tr>
							<td class="label" style="width:60px;"><label for="filter_user">Thành viên</label></td>
							<td class="item"><input name="user" value="" id="filter_user" class="tipS" type="text" original-title="Nhập mã thành viên"></td>
							<td class="label"></td>
							<td class="item"></td>
						</tr>
						
					</tbody></table>
				</form>
			</td></tr></thead>
			
			<thead>
				<tr>
					<td style="width:60px;">Mã số</td>
					<td>Tour du lịch</td>
					<td style="width:80px;">Giá</td>
					<td style="width:50px;">Số người</td>
					<td style="width:70px;">Số tiền</td>
					<td style="width:70px;">Ngày đi</td>
				</tr>
			</thead>
			
			<tfoot class="auto_check_pages">
				<tr>
					<td colspan="9">
						<!-- 
						<div class="pagination">
							&nbsp;<strong>1</strong>&nbsp;<a href="admin/product_order/index/10">2</a>&nbsp;<a href="admin/product_order/index/10">Trang kế tiếp</a>&nbsp;			            </div> -->
						</td>
					</tr>
				</tfoot>

				<tbody class="list_item">
					<?php foreach ($list as $row): ?>
					<tr class="row_20">

						<td class="textC"><?= $row->id ?></td>
						<?php foreach ($tour as $value): ?>
						<?php if($row->id_tour == $value->id): ?>
						<td>
							<div class="image_thumb">
								<img src="<?= base_url('upload/tour/').$value->image_link ?>" height="50">
								<div class="clear"></div>
							</div>

							<a href="product/view/8.html" class="tipS" target="_blank" original-title="">
								<b><?= $value->name ?></b>
							</a>	
						</td>
						<?php if($value->discount > 0): ?>
							<?php $price = $value->price - $value->discount ?>
							<td class="textR">
								<?= number_format($price) ?> đ
								<p style="text-decoration:line-through"><?= number_format($value->price) ?> đ</p>
							</td>
							<?php else: ?>
								<td class="textR">
									<?= number_format($value->price) ?> đ
								<?php endif; ?>
							<?php endif; ?>
						<?php endforeach ?>

						<td class="textC"><?= $row->so_nguoi ?></td>
	
						<td class="textC"><?= number_format($row->sotien) ?> đ</td>
						<td class="textC"><?= $row->ngay_di ?></td>
					</tr>
					<?php endforeach ?>
				</tbody>
			</table>
		</div>
	</div>