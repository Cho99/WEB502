<div class="lzd-playground-right">
	<div class="breadcrumbkhachhang">
		<a data-spm-anchor-id="a2o4n.manage_account.0.0">Thanh Toán</a>
	</div>
	<div id="container" class="container rightContainer_1UxO">
		<div class="accountPage_2lsd">
			<div class="row pageInner_1FHx">
				<div class="col-sm-12 col-md-10 col-lg-10">
					<div>
						<form class="accountFormWrap_2oXG" action="checkout" method="post">
							<div class="form-group row">
								<label for="phone" class="col-sm-2 col-form-label phoneLabel_3lBr">
									<span style="color: red;" >Tổng tiền:</span>
								</label>
								<div class="col-sm-10 col-md-6 col-lg-6 inputkh">
									<b style="color: red"><?= number_format($total_amount)  ?> đ</b>
								</div>
							</div>
							<div class="form-group row">
								<label for="phone" class="col-sm-2 col-form-label phoneLabel_3lBr">
									<span>Email</span>
								</label>
								<div class="col-sm-10 col-md-6 col-lg-6 inputkh">
									<div class="phoneInput_Q_2V">
										<input name="email" class="form-control" type="email" maxlength="30" placeholder="Email" tabindex="3" value="<?= $user->email ?>">
										<div name="email_error" class="clear error"><?= form_error('email') ?></div>
									</div>
								</div>
							</div>
							<div class="form-group row">
								<label for="firstName" class="col-sm-2 col-form-label">Họ và tên:</label>
								<div class="col-sm-10 col-md-6 col-lg-6">
									<input name="ten" class="form-control" type="text" maxlength="30" placeholder="Họ và tên đệm" tabindex="3" value="<?= $user->ten ?>">
									<div name="ten_error" class="clear error"><?= form_error('ten') ?></div>
								</div>
							</div>
							<div class="form-group row">
								<label for="phone" class="col-sm-2 col-form-label phoneLabel_3lBr">
									<span>Số điện thoại:</span>
								</label>
								<div class="col-sm-10 col-md-6 col-lg-6">
									<div class="phoneInput_Q_2V">
										<input name="sdt" class="form-control" type="number" placeholder="" value="<?= $user->sdt ?>">
										<div name="sdt_error" class="clear error"><?= form_error('sdt') ?></div>
									</div>
								</div>
							</div>
							<div class="form-group row">
								<label for="diachi" class="col-sm-2 col-form-label">Thanh toán:</label>
								<div class="col-sm-10 col-md-6 col-lg-6">
									<select name="payment">
										<option value="">Hình thức thanh toán</option>
										<option value="offline">Đến đại lý</option>
									</select>
									<div name="payment_error" class="clear error"><?= form_error('payment') ?></div>
								</div>
							</div>

							<div class="form-group row">
								<label for="ghichu" class="col-sm-2 col-form-label">Ghi chú:</label>
								<div class="col-sm-10 col-md-6 col-lg-6">
									<textarea name="ghichu" class="form-control"></textarea>  
								</div>
							</div>
							<div class="form-group row">
								<label for="email" class="col-sm-2 col-form-label"></label>
								<div class="col-sm-10">
									<button type="submit" class="btn btn-success">Thanh Toán</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>