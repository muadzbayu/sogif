	<!-- Playlist section -->
	<section class="playlist-section spad">
		<div class="container-fluid">
			<div class="section-title">
				<h2>Animations</h2>
			</div>
			                                            
			<div class="clearfix"></div>
			<div class="row playlist-area">	
				<?php
					/*if(isset($_GET['cari'])){
						$cari=$_GET['cari'];
						$data=mysql_query("select * from dftr_animasi where nama_animasi like '%".$cari."%'");
						}
					else{*/
                    foreach($animasi as $row){
				?>
				<div class="mix col-lg-3 col-md-4 col-sm-6 ">
					<div class="border-animation">
						<div class="playlist-item">
							<img src="<?= base_url('assets/img/animasi/'.$row->url_animasi); ?>" alt="">
							<h5><?= $row->nama_animasi ?></h5>
						<div class="animasi-links">
							<a href=""><img src="<?= base_url('assets/img/icons/p-1.png');?>" alt=""></a>
							<a href="download.php?id=<?php echo $row->url_animasi;?>"\><img src='<?= base_url('assets/img/icons/p-2.png');?>' alt=''></a>
							<a href=""><img src="<?= base_url('assets/img/icons/p-3.png');?>" alt=""></a>
						</div>
						</div>
					</div>
				</div>
					<?php }?>
			</div>
			<div class="site-pagination pt-5 mt-5">
				<?= $this->pagination->create_links();?>
			</div>
		</div>
	</section>
	<!-- Playlist section end -->

	

	