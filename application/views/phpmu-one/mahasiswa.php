<div id="content-container" class="wrap">
	<div id="sidebar">
		<a class="toggleMenu" href="#">Menu</a>
				<?php include "menu-kiri.php"; ?>
			<div class="clear"></div>
				
			<div id="pmb" class="block">
				<?php include "sidebar-pmb.php"; ?>
			<div class="clear"></div>
			</div>	
	</div>
	
	<div id="content-wrap">
		<div id="header-int">
            <?php $logo = $this->db->query("SELECT * FROM logo")->row_array(); ?>
            <img src="<?php echo base_url(); ?>asset/logo/<?php echo $logo['gambar']; ?>" alt="" />
        </div>

		<div id="content">
			<div class="breadcrumb">
				<a title="Universitas Singaperbangsa Karawang" href="#">Universitas Singaperbangsa Karawang</a> &gt; 
					Program Studi
			</div> <!-- .breadcrumb -->
									
						<h1 class="page-title">Semua Program Studi</h1>
						<div class="date">Posted by : Administrator</div>
						<div class="sosnet">
							<span>Share</span>
							  <div class='addthis_toolbox addthis_default_style'>
							  <a class='addthis_button_preferred_1'></a>
							  <a class='addthis_button_preferred_2'></a>
							  <a class='addthis_button_preferred_3'></a>
							  <a class='addthis_button_preferred_4'></a>
							  <a class='addthis_button_compact'></a>
							  <a class='addthis_counter addthis_bubble_style'></a>
							  </div>
							  <script type='text/javascript' src='http://s7.addthis.com/js/250/addthis_widget.js#pubid=ra-4f8aab4674f1896a'></script>
							 
						</div>
					<div class="clear"></div>

					<div class="post">
						<?php 
							$col = 3;
							$no = $this->uri->segment(3)+1;
							echo "<table border='1' width=100%><tr>";
							$hitung = 0;          
							foreach ($prodi->result_array() as $h) {	
								if ($hitung >= $col) {
									 echo "</tr><tr>";
									$hitung = 0;
								}
								$hitung++;
								$total_foto = $this->model_utama->view_where('mahasiswa',array('id_prodi' => $h['id_prodi']))->num_rows();
								echo "<td style='width:33%'>
										<div style='overflow:hidden; height:133px;'>";
												if ($h['gbr_prodi'] ==''){
													echo "<a href='".base_url()."mahasiswa/detail/$h[fakulas_seo]'><img style='width:100%; height:133px' src='".base_url()."asset/img_album/no-image.jpg' alt='no-image.jpg' /></a>";
												}else{
													echo "<a href='".base_url()."mahasiswa/detail/$h[prodi_seo]'><img style='width:100%; height:133px' src='".base_url()."asset/img_album/$h[gbr_prodi]' alt='$h[gbr_prodi]' /></a>";
												}
										echo "
										</div>
											<center>Ada $total_foto mahasiswa<br>
											<a href='".base_url()."mahasiswa/detail/$h[prodi_seo]'>$h[nm_prodi]</a></center>
									  </td>";
							}
							echo "</tr></table>";
						?>

					<div class='wp-pagenavi'>
						<?php echo $this->pagination->create_links(); ?>
					</div>
			</div>
			<div class="clear"></div>
		</div>
	
	<div class="clear"></div>			
</div>

	<div id="footer-banner">
		<?php include "banner-footer.php"; ?>
	</div>
	
	<div id="credit">
		<?php include "info-footer.php"; ?>
	</div>
	
<script type="text/javascript">
jQuery(document).ready(function($) {
	$("#rotator").cycle({ 
	    fx: 'fade',
	    timeout: 3000,
	    speed: 1000,
	    pause: 1,
	    fit: 1
	});
});
</script>
</body>