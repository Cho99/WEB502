<div class="titleArea">
	<div class="wrapper">
		<div class="pageTitle">
			<h5>Danh mục Tour du Lịch </h5>
			<span>Quản lý Tour du lịch</span>
		</div>
		
		<div class="horControlB menu_action">
			<ul>
				<li><a href="<?= admin_url('tour/add') ?>">
					<img src="<?= public_url('admin') ?>/images/icons/control/16/add.png">
					<span>Thêm mới</span>
				</a></li>				
				<li><a href="<?= admin_url('tour/index') ?>">
					<img src="<?= public_url('admin') ?>/images/icons/control/16/list.png">
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