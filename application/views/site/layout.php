<!DOCTYPE html>
<html lang="en">
 <!-- Head	 -->
 <?php $this->load->view('site/head');  ?>
<body class="body">
	<!-- Header -->
	<?php $this->load->view('site/header'); ?>

	<!-- Content -->
	<?php $this->load->view($temp, $this->data); ?>

	<?php $this->load->view('site/footer'); ?>
	<div class="navbar-fixed-bottom fixxbot">
		<a href="" class="btn btn-primary nutlen float-xs-right">
			<i class="fa fa-chevron-up "></i>
		</a>
	</div>	

</body>
</html>

<script type="text/javascript">
	$(function(){
		$('.body').scroll(function(event) {
			if($('.body').scrollTop() > 350){
				$('.nutlen').addClass('hienthi');
			} else if($('.body').scrollTop() <= 190){
				$('.nutlen').removeClass('hienthi');
			}

		})

		$('.nutlen').click(function(event) {
			$('.body').animate({'scrollTop':0})
			return false;
		});
	})  
</script>

<script type="text/javascript">
	$(document).on('click', '.dsheaderduoi li a', function(){
		var tab = $(this).data('tab');
		$('.dsheaderduoi li').removeClass('active');
		$(this).closest('li').addClass('active');

	});
	$(document).ready(function(){
		$('.dsheaderduoi li.active a').trigger('click');
	});
</script>

<script type="text/javascript">
$(document).ready(function()
{  
    //sử dụng autocomplete với input có id = key
    $( "input#mykey" ).autocomplete({
         source:'<?= base_url('home/search_auto') ?>', //link xử lý dữ liệu tìm kiếm
    })
});
</script> 

