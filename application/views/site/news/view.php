<div id="vnt-content">
	<div id="vnt-navation" class="breadcrumb">
		<div class="wrapper">
			<div class="navation">
				<ul>
					<li>
						<a title="Trang chủ" href="index.php">
							<span itemprop="title">Trang chủ</span>
						</a>
					</li>
					<li>
						<a href="lienhe.php">
							<span>New</span>
						</a>
					</li>
					<li>
						<a href="lienhe.php">
							<span><?= $new->ten ?></span>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div> <!-- hết breadcrumb -->
	<div class="global_wrapper"> 
		<div class="global_mainVisual"> 
			<p class="gm_background"> 
				<img src="../images/ht8.jpeg" alt=""> 
			</p> 
			<div class="global_inner"> 
				<h1 class="gm_title">
					<span><?= $new->ten ?></span>
				</h1> 
			</div> 
		</div> 
		<article id="global_contents" class="global_contents _module_contents _bg_color-beige" role="main" itemscope="" itemprop="mainContentOfPage"> 
			<section> 

				<div class="local_inner">  
					<h2 class="module_title-01 "> 
						<span>Nội dung</span>
					</h2>  
					 <div> Ngày đăng:<?= get_date($new->created) ?></div>
					<div>Mô tả:<?= $new->mota  ?></div>
					<div>
						<?= $new->noidung?>
					</div>
				</div> 
			</section> 
		</article>
	</div>
</div>
