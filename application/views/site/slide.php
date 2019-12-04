<div class="khoimainbig">
	<div class="slidewrapper">
		<div class="cacslide">
			<ul>
				<?php 
				$active=0;
				?>
				<?php foreach ($slide as $row): $active++ ?>
				<li class="<?= ($active==1?'active':'') ?>">
					<div class="motslide">
						<div class="anh" style="background-image: url(<?= base_url('upload/slide/').$row->image_link ?>);"></div>
						<div class="textnd">
							<h2><?= $row->ten ?></h2>
							<small><?= $row->tieude ?></small>
							<div class="ke"></div>
							<p><?= $row->noidung ?></p>
						</div>
					</div>
				</li>
				<?php endforeach ?>
			</ul>

		</div>

		<div class="chuyenslide">
			<ul>
				<li class="kichhoat">1</li>
				<li>2</li>
				<li>3</li>
			</ul>
		</div>
	</div> <!-- het wrapper -->
</div>

<div class="khoimainbook">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="selectbooktravel">
					<div class="selectbook">
						<i class="iconT-i-c1 mg-b"></i>
						<p class="text1">tìm tour</p>
						<p class="text2 dltn">trong nước</p>
					</div>
					<div class="selectbook">
						<i class="iconT-i-c2 mg-b"></i>
						<p class="text1">du lịch</p>
						<p class="text2 dlnn">Miền Bắc</p>
					</div>
					<div class="selectbook">
						<i class="iconT-i-c3 mg-b"></i>
						<p class="text1">du lịch</p>
						<p class="text2 dltc">Miền Trung</p>
					</div>
					<div class="selectbook">
						<i class="iconT-i-c4 mg-b"></i>
						<p class="text1">du lịch</p>
						<p class="text2 dlbk">Miền Nam</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div> <!-- hết khoimainbook -->