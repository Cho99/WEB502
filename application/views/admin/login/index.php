
<html lang="en">
<head>
	<meta charset="UTF-8">
	 <?php $this->load->view('admin/head'); ?>
</head>
    <body class="nobg loginPage" style="min-height:100%;">

	<div class="loginWrapper" style="top:45%;">
		<div class="alert alert-success alert-dismissible" style="display: flex; justify-content: center;">
    		<h2>502-Travel.com</h2>
    	</div>
	    <div class="widget" id="admin_login" style="height:auto; margin:auto;">
	        <div class="title"><img src="<?= public_url('admin') ?>/images/icons/dark/laptop.png" alt="" class="titleIcon">
	        	<h6>Đăng nhập Admin</h6>
	        </div>
	        <form class="form" id="form" action="login" method="post">
	           <fieldset>
	                <div class="formRow">
	                    <label for="param_username">Tên đăng nhập:</label>
	                    <div class="loginInput"><input type="text" name="username" id="param_username" value="<?= set_value('username') ?>"></div>
	                    <div class="clear"></div>
	                </div>
	                
	                <div class="formRow">
	                    <label for="param_password">Mật khẩu:</label>
	                    <div class="loginInput"><input type="password" name="password" id="param_password"></div>
	                    <div class="clear"></div>
	                </div>
	                
	                <div class="loginControl">
	                	<div style="color: red;font-weight: blod; text-align: center"><?= form_error('login'); ?>
	                	</div>	
	                    <input type="hidden" name="submit" value="1">
	                    <input type="submit" value="Đăng nhập" class="dredB logMeIn" name="login">
	                    <div class="clear"></div>
	                </div>
	            </fieldset>
	        </form>
	    </div>
	    
	</div>
	<?php $this->load->view('admin/footer'); ?>
</body>
</html>