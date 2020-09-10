<h2 id="lowongan-block-title" class="block-title">Ringkasan & Kontak</h2><br>
<center>
<table class="table table-bordered" cellspacing="0px" cellpadding="0px" style="margin:0px;padding:0px"><tr class="success"><td align="center">
<font color="#2c8da9" >Student Enrollment</font><br>
<img src="<?php echo base_url(); ?>asset/images/mhs.png" width="auto" /> 10,000- <br>14,999
</td>
<td align="center">
<font color="#2c8da9">Academic Staff</font><br>
<img src="<?php echo base_url(); ?>asset/images/staff.png" width="auto" /> 300-399
</td>
<td align="center">
<font color="#2c8da9">Control Type</font><br>
<img src="<?php echo base_url(); ?>asset/images/type.png" width="auto" /> Public
</td>
<tr class="warning">
<td align="center">
<font color="#2c8da9">Academic Calendar</font><br>
<img src="<?php echo base_url(); ?>asset/images/calender.png" width="auto" /> Semesters
</td>
<td align="center">
<font color="#2c8da9">National Ranking</font><br>
<img src="<?php echo base_url(); ?>asset/images/campus.png" width="auto" /> 131
</td>
<td align="center">
<font color="#2c8da9">Religious Affiliation</font><br>
<img src="<?php echo base_url(); ?>asset/images/agama.gif" width="auto" /> Islamic
</td>
</tr>
</tr>	
</table>
<img src="<?php echo base_url(); ?>asset/images/rektor.png" width="100%" />
</center><br><br>
<div style='clear:both'></div>
		<h2 id="lowongan-block-title" class="block-title">Career Center</h2>
			<div class="pt">
			<ul>
				<?php 
					$random2 = $this->db->query("SELECT * FROM lowongan order by id_lowongan DESC LIMIT 6");
					foreach ($random2->result_array() as $r2){
					$tglr2 = tgl_indo($r2['tanggal_posting']);
						echo "<li><a href='lowongan/detail/$r2[judul_seo]' title='$r2[judul]'><strong>Lowongan $r2[judul]</strong></a></li>";
					}
			echo "</ul></div>
				<h3 class='block-title-arsip'><a href='".base_url()."lowongan'>Tampilkan Lowongan lain ..............................................</a></h3>";
				?>