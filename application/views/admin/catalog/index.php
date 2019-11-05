<!-- head -->
<?php $this->load->view('admin/catalog/head',$this->data); ?>
<div class="line"></div>
<div class="wrapper">
	<?php $this->load->view('admin/message', $this->data); ?>
	<div class="widget">
	
		<div class="title">
			<span class="titleIcon"><div class="checker" id="uniform-titleCheck"><span><input type="checkbox" id="titleCheck" name="titleCheck" style="opacity: 0;"></span></div></span>
			<h6>Danh sách admin</h6>
		 	<div class="num f12">Tổng số: <b><?= count($list) ?></b></div>
		</div>
		<table cellpadding="0" cellspacing="0" width="100%" class="sTable mTable myTable withCheck" id="checkAll">
			<thead>
				<tr>
					<td style="width:10px;"><img src="<?= public_url('admin') ?>/images/icons/tableArrows.png" /></td>
					<td style="width:80px;">Mã số</td>
					<td style="width:80px;">Thứ tự hiện thị</td>
					<td>Tên danh mục</td>
					<td style="width:100px;">Hành động</td>
				</tr>
			</thead>
			
 			<tfoot>
				<tr>
					<td colspan="7">
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
						<td class="textC"><?= $row->sort_order ?></td>
						<td><span title="<?= $row->name ?>" class="tipS"><?= $row->name ?></span></td>		<td class="option">
							 <a href="<?= admin_url('catalog/edit/'.$row->id) ?>" title="Chỉnh sửa" class="tipS ">
							<img src="<?= public_url('admin') ?>/images/icons/color/edit.png" />
							</a>
							<a href="<?= admin_url('catalog/delete/'.$row->id) ?>" title="Xóa" class="tipS verify_action" >
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