<?php $this->load->view('admin/new/head'); ?>

<div class="line"></div>

<div class="wrapper">
	<div class="widget">
    	<div class="title">
			<h6>Thêm mới Tin tức</h6>
		</div>
		<form class="form" id="form" method="post" enctype="multipart/form-data" action="">
		    <fieldset>
				<div class="formRow">
				<label class="formLeft" for="param_name">Tên:<span class="req">*</span></label>
				<div class="formRight">
				<span class="oneTwo">
					<input name="ten" id="param_name" _autocheck="true" type="text" value="<?= set_value('ten') ?>">
				</span>
				<span name="name_autocheck" class="autocheck"></span>
				<div name="name_error" class="clear error"><?= form_error('ten') ?></div>
				</div>
				<div class="clear"></div>
				</div>

                <div class="formRow">
				<label class="formLeft" for="param_parent_id">Thứ tự hiện thị:</label>
				<div class="formRight">
				<span class="oneTwo">
					<select name="parent_id" id="param_parent_id" _autocheck="true" type="text">
						<option value="0">Là danh mục cha</option>
						<?php foreach ($catalog as $row): ?>
							<option value="<?= $row->id ?>"><?= $row->name ?></option>
						<?php endforeach; ?>
					</select>
				</span>
				<span name="parent_id_autocheck" class="autocheck"></span>
				<div name="parent_id_order_error" class="clear error"><?= form_error('parent_id') ?></div>
				</div>
				<div class="clear"></div>
				</div>
				

				<div class="formRow">
				<label class="formLeft" for="param_sort_order">Mô tả:</label>
				<div class="formRight">
				<span class="oneTwo">
					<input name="mota" id="param_sort_order" _autocheck="true" type="text" value="<?= set_value('mota') ?>">
				</span>
				<span name="sort_order_autocheck" class="autocheck"></span>
				<div name="name_sort_order_error" class="clear error"><?= form_error('mota') ?></div>
				</div>
				<div class="clear"></div>
				</div>

				<div class="formRow">
				<label class="formLeft" for="param_sort_order">Nội dung:</label>
				<div class="formRight">
				<span class="oneTwo">
					<TEXTAREA name="noidung" class="editor" id="param_content" type="text" value="<?= set_value('noidung') ?>"> </TEXTAREA>
				</span>
				<span name="sort_order_autocheck" class="autocheck"></span>
				<div name="name_sort_order_error" class="clear error"><?= form_error('noidung') ?></div>
				</div>
				<div class="clear"></div>
				</div>
				<div class="formSubmit">
	           			<input type="submit" value="Thêm mới" class="redB">
	           	</div>
		    </fieldset>
	    </form>
	</div>
</div>
