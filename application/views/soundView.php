<!-- Category section -->
	<section class="category-section spad">
		<div class="container-fluid">
			<div class="section-title">
				<h2>Sounds</h2>
			</div>
		</div>
	<!-- Category section end -->
	<div class="clearfix"></div>
	<!-- Songs section  -->
	<section class="songs-section">
		<div class="container">
			<!-- song -->
			<?php
					/*if(isset($_GET['cari'])){
						$cari=$_GET['cari'];
						$data=mysql_query("select * from dftr_sound where nama_sound like '%".$cari."%'");
						}
					else{*/
					$no=0;
					foreach($sound as $row){
						$no++;
				?>
			
			<div class="song-item">
				<div class="row">
					<div class="col-lg-4">
						<div class="song-info-box">
							<img src="<?= base_url('assets/img/songs/music-logo.png');?>" alt="">
							<div class="song-info">
								<h4><?= $row->nama_sound;?></h4>
								
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="single_player_container">
							<div class="single_player">
								<div class="jp-jplayer jplayer" data-ancestor=".jp_container_<?php echo $no;?>" data-url="<?= base_url('assets/music-files/sound/'.$row->url_sound);?>"></div>
								<div class="jp-audio jp_container_<?php echo $no;?>" role="application" aria-label="media player">
									<div class="jp-gui jp-interface">

										<!-- Player Controls -->
										<div class="player_controls_box">
											<button class="jp-prev player_button" tabindex="0"></button>
											<button class="jp-play player_button" tabindex="0"></button>
											<button class="jp-next player_button" tabindex="0"></button>
											<button class="jp-stop player_button" tabindex="0"></button>
										</div>
										<!-- Progress Bar -->
										<div class="player_bars">
											<div class="jp-progress">
												<div class="jp-seek-bar">
													<div>
														<div class="jp-play-bar"><div class="jp-current-time" role="timer" aria-label="time">0:00</div></div>
													</div>
												</div>
											</div>
												<div class="jp-duration ml-auto" role="timer" aria-label="duration">00:00</div>
										</div>
									</div>
									<div class="jp-no-solution">
										<span>Update Required</span>
										To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-2">
						<div class="songs-links">
							<a href=""><img src="<?= base_url('assets/img/icons/p-1.png');?>" alt=""></a>
							<a href="downloadSound.php?id=<?= $row->url_sound;?>"><img src='<?= base_url('assets/img/icons/p-2.png');?>' alt=''></a>
							<a href=""><img src="<?= base_url('assets/img/icons/p-3.png');?>" alt=""></a>
						</div>
					</div>
				</div>
			</div>
					<?php } ?>
			<!--........-->
			<div class="site-pagination pt-5 mt-5">
				<?php echo $this->pagination->create_links();?>
			</div>
		</div>
	</section>
	<!-- Songs section end -->
	
	</section>
	
