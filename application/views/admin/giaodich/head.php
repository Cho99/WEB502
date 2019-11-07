<div class="titleArea">
	<div class="wrapper">
		<div class="pageTitle">
			<h5>Đơn đặt tour</h5>
			<span>Quản lý Giao Dịch</span>
		</div>
		
		<div class="horControlB menu_action">
			<ul>
				<li><a href="<?= admin_url('giaodich') ?>">
					<img src="<?= base_url('public/admin/') ?>images/icons/control/16/list.png">
					<span>Danh sách</span>
				</a></li>
				
				
			</ul>
		</div>
		
		<div class="clear"></div>
	</div>
</div>
<script type="text/javascript">
(function($)
{
	$(document).ready(function()
	{
		var main = $('#form');
		
		// Tabs
		main.contentTabs();
	});
})(jQuery);
</script>