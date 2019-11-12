!-- head -->
<?php $this->load->view('admin/noidung/head',$this->data); ?>
<div class="line"></div>
<div class="wrapper">

	<!-- Form -->
	<form class="form" id="form" action="<?= admin_url('slide/add') ?>" method="post" enctype="multipart/form-data">
		<fieldset>
			<div class="widget">	
				<div class="title">
					<img src="<?= public_url('admin/') ?>images/icons/dark/add.png" class="titleIcon">
					<h6>Thêm mới Slide quảng cáo</h6>
				</div>

				<ul class="tabs">
					<li><a href="#tab1">Thông tin chung</a></li>
				</ul>

				<div class="tab_container">
					<div id="tab1" class="tab_content pd0">
						<div class="formRow">
							<label class="formLeft" for="param_name">Tên:<span class="req">*</span></label>
							<div class="formRight">
								<span class="oneTwo"><input name="ten" id="param_name" _autocheck="true" type="text" ></span>
								<div name="name_error" class="clear error"></div>
							</div>
							<div class="clear"></div>
						</div>

						<div class="formRow">
							<label class="formLeft" for="param_name">Tiêu đề:<span class="req">*</span></label>
							<div class="formRight">
								<span class="oneTwo"><input name="tieude" id="param_name" _autocheck="true" type="text" ></span>
								<div name="name_error" class="clear error"></div>
							</div>
							<div class="clear"></div>
						</div>

						<div class="formRow">
							<label class="formLeft">Hình ảnh:<span class="req">*</span></label>
							<div class="formRight">
								<div class="float-left">
									<input type="file" id="image" name="image">
								</div>
								<div name="image_error" class="clear error"></div>
							</div>
							<div class="clear"></div>
						</div>


						<div class="formRow">
							<label class="formLeft">Nội dung:</label>
							<div class="formRight">
								<textarea name="noidung" id="param_content" class="editor"></textarea>
								<div name="content_error" class="clear error"></div>
							</div>
							<div class="clear"></div>
						</div>

						<div class="formRow hide"></div>
					</div>

				</div><!-- End tab_container-->

				<div class="formSubmit">
					<input type="submit" value="Thêm mới" class="redB">
					<input type="reset" value="Hủy bỏ" class="basic">
				</div>
				<div class="clear"></div>
			</div>
		</fieldset>
	</form>
</div>
<div class="clear"></div>