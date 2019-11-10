<?php $this->load->view('admin/contact/head'); ?>
<div class="line"></div>
<div class="wrapper">
	<?php $this->load->view('admin/message', $this->data); ?>
	<div class="widget">
	
		<div class="title">
			<span class="titleIcon"><div class="checker" id="uniform-titleCheck"><span><input type="checkbox" id="titleCheck" name="titleCheck" style="opacity: 0;"></span></div></span>
			<h6>Danh sách admin</h6>
		 	<div class="num f12">Tổng số: <b><?= $sub_total ?></b></div>
		</div>
		<table cellpadding="0" cellspacing="0" width="100%" class="sTable mTable myTable withCheck" id="checkAll">
			<thead>
				<tr>
					<td style=""><img src="<?= public_url('admin') ?>/images/icons/tableArrows.png" /></td>
					<td style="width:20px;">Mã số</td>
					<td style="width:80px;">Tên chi nhánh</td>
					<td style="width:110px;">Số điện thoại</td>
					<td style="width:80px;">Fax</td>
					<td style="width:90px;">Email</td>
					<td style="width:150px;">Địa chỉ</td>
					<td style="width:70px;">Ngày tạo</td>
					<td style="width:100px;">Hành động</td>
				</tr>
			</thead>
			
 			<tfoot>
				<tr>
					<td colspan="9">
					     <div class="list_action itemActions">
								<a href="#submit" id="submit" class="button blueB" url="<?= admin_url('catalog/delete_all') ?>">
									<span style='color:white;'>Xóa hết</span>
								</a>
						 </div>
							
					     <div class='pagination'></div>
					</td>
				</tr>
			</tfoot>
 			
			<tbody>
				 <?php foreach ($list as $row): ?>			
				<tr class="row_<?= $row->id ?>">
					<td><input type="checkbox" name="id[]" value="<?= $row->id ?>" /></td>
					<td class="textC"><?= $row->id ?></td>
					<td class="textC"><?= $row->ten ?></td>
					<td><?= $row->sdt ?></td>	
					<td><?= $row->fax ?></td>	
					<td class="textC"><?= $row->email ?></td>	
					<td class="textC"><?= $row->diachi ?></td>	
					<td class="textC"><?= get_date($row->created) ?></td>	

					<td class="option">
						<a href="<?= admin_url('contact/edit/'.$row->id) ?>" title="Chỉnh sửa" class="tipS ">
							<img src="<?= public_url('admin') ?>/images/icons/color/edit.png" />
						</a>
						<a href="<?= admin_url('contact/delete/'.$row->id) ?>" title="Xóa" class="tipS verify_action" >
							<img src="<?= public_url('admin') ?>/images/icons/color/delete.png" />
						</a>
					</td>
				</tr>
				<?php endforeach ?> 
			</tbody>
		</table>	
	</div>
</div>
<div class="clear mt30"></div>