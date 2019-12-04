<div class="lzd-playground-right">
	<div class="breadcrumbkhachhang">
		<a data-spm-anchor-id="a2o4n.manage_account.0.0" >Quản lý tài khoản</a>
	</div>
	<div id="container" class="container rightContainer_1UxO">
		<div class="accountPage_2lsd">
			<div class="row pageInner_1FHx">
				<div class="khoitt_user">
					<div>
						<form class="accountFormWrap_2oXG">
							<div class="form-group">
								<label for="phone" class="col-sm-2 col-form-label phoneLabel_3lBr">
									<span>Email</span>
								</label>
								<div class="col-sm-10 col-md-6 col-lg-6 inputkh">
									<div class="phoneInput_Q_2V">
										<?= $user->email ?>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="phone" class="col-sm-2 col-form-label phoneLabel_3lBr">
									<span>Số điện thoại:</span>
								</label>
								<div class="col-sm-10 col-md-6 col-lg-6 inputkh">
									<div class="phoneInput_Q_2V">
										<?= $user->sdt ?>
									</div>
								</div>
							</div>
							<div class="form-group ">
								<label for="firstName" class="col-sm-2 col-form-label">Họ và tên:</label>
								<div class="col-sm-10 col-md-6 col-lg-6 inputkh">
									<?= $user->ten ?>
								</div>
							</div>
							<div class="form-group ">
								<label for="firstName" class="col-sm-2 col-form-label">Chứng minh thư:</label>
								<div class="col-sm-10 col-md-6 col-lg-6 inputkh">
									<?= $user->cmnd ?>
								</div>
							</div>

							<div class="form-group ">
								<label for="firstName" class="col-sm-2 col-form-label">Địa chỉ:</label>
								<div class="col-sm-10 col-md-6 col-lg-6 inputkh">
									<?= $user->diachi ?>
								</div>
							</div>
							<div class="form-group row">
								<label for="email" class="col-sm-2 col-form-label"></label>
								<div class="col-sm-10 ">
									<a href="<?= base_url('user/edit') ?>" class="suathongtin button">
										Sửa thông tin
									</a>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>