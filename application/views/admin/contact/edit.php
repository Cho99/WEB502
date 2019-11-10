<?php $this->load->view('admin/contact/head'); ?>


<div class="line"></div>

<div class="wrapper">
	<div class="widget">
		<div class="title">
			<h6>Thêm mới Liên hệ</h6>
		</div>
		<form class="form" id="form" method="post" enctype="multipart/form-data" action="">
			<fieldset>
				<div class="formRow">
					<label class="formLeft" for="param_name">Địa chỉ:<span class="req">*</span>
					</label>
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
					<label class="formLeft" for="param_name">Số điện thoại:<span class="req">*</span>
					</label>
					<div class="formRight">
						<span class="oneTwo">
							<input name="sdt" id="param_name" _autocheck="true" type="number" value="<?= $info->sdt ?>">
						</span>
						<span name="name_autocheck" class="autocheck"></span>
						<div name="name_error" class="clear error"><?= form_error('sdt') ?></div>
					</div>
					<div class="clear"></div>
				</div>

				<div class="formRow">
					<label class="formLeft" for="param_name">Fax:
					</label>
					<div class="formRight">
						<span class="oneTwo">
							<input name="fax" id="param_name" _autocheck="true" type="number" value="<?= $info->fax ?>">
						</span>
						<span name="name_autocheck" class="autocheck"></span>
						<div name="name_error" class="clear error"></div>
					</div>
					<div class="clear"></div>
				</div>

				<div class="formRow">
					<label class="formLeft" for="param_name">Email:
					</label>
					<div class="formRight">
						<span class="oneTwo">
							<input name="email" id="param_name" _autocheck="true" type="email" value="<?= $info->email ?>">
						</span>
						<span name="name_autocheck" class="autocheck"></span>
						<div name="name_error" class="clear error"></div>
					</div>
					<div class="clear"></div>
				</div>


				<div class="formRow">
					<label class="formLeft" for="param_name">Địa chỉ:
					</label>
					<div class="formRight">
						<span class="oneTwo">
							<textarea name="diachi" id="param_name" _autocheck="true" type="text" value="$info->diachi ?>"> <?= $info->diachi ?> </textarea>
						</span>
						<span name="name_autocheck" class="autocheck"></span>
						<div name="name_error" class="clear error"><?= form_error('diachi') ?></div>
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
