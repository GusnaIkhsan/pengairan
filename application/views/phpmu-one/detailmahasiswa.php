<div id="content-container" class="wrap">
	<div id="sidebar">
		<?php include "sidebar-artikel.php"; ?>
	</div>
	
<script>
      $(function () { 
        $("#example1").DataTable({
        	"aLengthMenu": [[5, 10, 15, -1], [5, 10, 15, "All"]],
            "iDisplayLength": 5
        });
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false
          
        });
      });
    </script>

	<div id="content-wrap">
		<div id="header-int">
            <?php $logo = $this->db->query("SELECT * FROM logo")->row_array(); ?>
            <img src="<?php echo base_url(); ?>asset/logo/<?php echo $logo['gambar']; ?>" alt="header-int" />
        </div>

		<div id="content">
			<div class="breadcrumb">
				<a title="Universitas Singaperbangsa Karawang" href="#">Program Studi</a> &gt; 
					<?php echo "$rows[nm_prodi]"; ?>
			</div> <!-- .breadcrumb -->
									
						<h1 class="page-title"><?php echo "$rows[nm_prodi]"; ?></h1>
						<?php echo "$rows[keterangans]"; ?><br>
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
					
					<table class='table table-bordered table-striped' id='example1'>
					<thead><tr>
					<th>No</th>
					<th>Nama</th>
					<th>NPM</th>
					<th>Angkatan</th>
					<th>HP</th>
					<th>Foto</th>
					</tr>
					</thead>
					<tbody>
					<?php
					$no = 1;   
					
					foreach ($detailmahasiswa->result_array() as $h) {	
						
							echo "<tr><td>$no</td>
									  <td><small><a href='".base_url()."asset/img_galeri/$h[gbr_mahasiswa]' alt='$h[nm_mahasiswa]' data-lightbox='".base_url()."asset/img_galeri/$h[gbr_mahasiswa]' data-title='Nama : $h[nm_mahasiswa]<br>NPM : $h[npm]<br>Angkatan : $h[keterangan]'>$h[nm_mahasiswa]</a></small></td>
									  <td>$h[npm]</td>
									  <td>$h[keterangan]</td>
									  <td>$h[hp]</td>
								      <td width='90px'>";
							if ($h['gbr_mahasiswa'] ==''){
							echo "<a href='".base_url()."asset/img_galeri/nofoto.jpg' alt='$h[nm_mahasiswa]' data-lightbox='".base_url()."asset/img_galeri/nofoto.jpg' data-title='$h[nm_mahasiswa]<br>$h[npm]'><img style='width:80px;height:100px' title='$h[nm_mahasiswa]' src='".base_url()."asset/img_galeri/nofoto.jpg' width='80px' height='100px' /></a>";
						}else{
							echo "<a href='".base_url()."asset/img_galeri/$h[gbr_mahasiswa]' alt='$h[nm_mahasiswa]' data-lightbox='".base_url()."asset/img_galeri/$h[gbr_mahasiswa]' data-title='$h[nm_mahasiswa]<br>$h[npm]'><img style='width:80px;height:100px' title='$h[nm_mahasiswa]' src='".base_url()."asset/img_galeri/$h[gbr_mahasiswa]' width='80px' height='100px' /></a>";

						}
							echo "</td></tr>";
						$no++;
					}
					
					?>
					</tbody>
					</table>
				<div class="clear"></div>
		</div>
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