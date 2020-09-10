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
	
<script>
      $(function () { 
        $("#example1").DataTable({
        	"aLengthMenu": [[22, 50, 75, -1], [22, 50, 75, "All"]],
            "iDisplayLength": 22
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
				<a title="Universitas Indonesia Raya" href="#">Universitas Indonesia Raya</a> &gt; 
					Semua File Download
			</div> <!-- .breadcrumb -->
									
						<h1 class="page-title">Semua File Download</h1>
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

									<table class="table table-bordered table-striped" id='example1'>
										<thead>
										<tr>
											<th>No</th>
											<th>Nama File</th>
											<th>Hits</th>
											<th>Link</th>
										</tr>
										</thead>
										<tbody>
								<?php
											$no =1;
											foreach ($download->result_array() as $r){
											$tgl=tgl_indo($r['tgl_posting']);
												echo "<tr><td>$no</td>
													  <td>$r[judul]</td>
													  <td>$r[hits] Kali</td>
													  <td><a href='".base_url()."download/file/$r[nama_file]'><b>Download</b></a></td></tr>";
											$no++;
											}
											
								
								?>	
								</tbody>
								</table>
								
								
			</div>
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