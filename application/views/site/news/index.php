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
							<span>Liên hệ</span>
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
					<span>NEWS</span>
				</h1> 
			</div>
		</div>

		<article id="global_contents" class="global_contents _module_contents _bg_color-beige" role="main" itemscope="" itemprop="mainContentOfPage">
			<section>
				<div class="global_inner _column">
					<main class="gc_main">
						<ul class="module_newsList-01">
							<?php foreach ($news as $row): ?>
							<li> 
								<a href="<?= base_url('news/view/').$row->id ?>"> 
									<div class="head"> 
										<p class="image">
											<img src="../images/mbac1.jpg" width="282" height="164" class="attachment-info_thumbnail size-info_thumbnail wp-post-image" alt="" data-lazy-loaded="true" style="display: block;">
										</p> 
									</div> 
									<div class="body"> 
										<h4 class="namenews" ><?= $row->ten ?></h4>
										<p class="title ngaydang"><?= get_date($row->created) ?></p> 
										<p class="title motanews"><?= $row->mota ?></p> 
									</div> 
								</a> 
							</li>
							<?php endforeach ?>						
						</ul>
					</main>
				</div>
			</section>
		</article>
	</div>
</div>