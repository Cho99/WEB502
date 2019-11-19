<?php $this->load->view('admin/new/head'); ?>

<div class="line"></div>

<div class="wrapper">
	<div class="widget">
    	<div class="title">
			<h6>Update Tin tức</h6>
		</div>
		<form class="form" id="form" method="post">
		    <fieldset>
				<div class="formRow">
				<label class="formLeft" for="param_name">Tên:<span class="req">*</span></label>
				<div class="formRight">
				<span class="oneTwo">
					<input name="ten" id="param_name" _autocheck="true" type="text" value="<?= $info->ten ?>">
				</span>
				<span name="name_autocheck" class="autocheck"></span>
				<div name="name_error" class="clear error"><?= form_error('ten') ?></div>
				</div>
				<div class="clear"></div>
				</div>

                <div class="formRow">
				<label class="formLeft" for="param_parent_id">Vùng miên:</label>
				<div class="formRight">
				<span class="oneTwo">
					<select name="parent_id" id="param_parent_id" _autocheck="true" type="text">
						<option value="0">Miền</option>
						<?php foreach ($catalog as $row): ?>
							<?php if ($row->id == $info->id_catalog): ?>
							<option value="<?php echo $row->id?>"<?php if ($row->id == $info->id_catalog) echo 'selected';?>><?php echo $row->name?></option>
							<?php endif ?>
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
					<input name="mota" id="param_sort_order" _autocheck="true" type="text" value="<?= $info->mota ?>">
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
					<TEXTAREA name="noidung" class="editor" id="param_content" type="text"> <?= $info->noidung ?> </TEXTAREA>
				</span>
				<span name="sort_order_autocheck" class="autocheck"></span>
				<div name="name_sort_order_error" class="clear error"><?= form_error('noidung') ?></div>
				</div>
				<div class="clear"></div>
				</div>
				<div class="formSubmit">
	           			<input type="submit" value="Cập nhật" class="redB">
	           	</div>
		    </fieldset>
	    </form>
	</div>
</div>
