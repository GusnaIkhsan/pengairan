		<script type="text/javascript">        
    function tampilkanwaktu(){         //fungsi ini akan dipanggil di bodyOnLoad dieksekusi tiap 1000ms = 1detik    
    var waktu = new Date();            //membuat object date berdasarkan waktu saat 
    var sh = waktu.getHours() + "";    //memunculkan nilai jam, //tambahan script + "" supaya variable sh bertipe string sehingga bisa dihitung panjangnya : sh.length    //ambil nilai menit
    var sm = waktu.getMinutes() + "";  //memunculkan nilai detik    
    var ss = waktu.getSeconds() + "";  //memunculkan jam:menit:detik dengan menambahkan angka 0 jika angkanya cuma satu digit (0-9)
    document.getElementById("clock").innerHTML = (sh.length==1?"0"+sh:sh) + " : " + (sm.length==1?"0"+sm:sm) + " <span class='blink'>:</span> " + (ss.length==1?"0"+ss:ss);
    }
</script>

		<h2 id="pmb-block-title" class="block-title"><a href="<?php echo base_url();?>">Portal Universitas Singaperbangsa Karawang</a></h2>
		<span class="glyphicon glyphicon-time"></span>  <span style="text-align:right;text-shadow: 2px 2px 3px #FFFFFF;font-weight:bold;color:#FF0000" id="clock"></span>
		<span style="text-align:right; text-shadow: 2px 2px 3px #FFFFFF;font-weight:bold;color:#FF0000"><?php
$hari = date('l');
/*$new = date('l, F d, Y', strtotime($Today));*/
if ($hari=="Sunday") {
 echo "Minggu";
}elseif ($hari=="Monday") {
 echo "Senin";
}elseif ($hari=="Tuesday") {
 echo "Selasa";
}elseif ($hari=="Wednesday") {
 echo "Rabu";
}elseif ($hari=="Thursday") {
 echo("Kamis");
}elseif ($hari=="Friday") {
 echo "Jum'at";
}elseif ($hari=="Saturday") {
 echo "Sabtu";
}
?>,

<?php
$tgl =date('d');
echo $tgl;
$bulan =date('F');
if ($bulan=="January") {
 echo " Januari ";
}elseif ($bulan=="February") {
 echo " Februari ";
}elseif ($bulan=="March") {
 echo " Maret ";
}elseif ($bulan=="April") {
 echo " April ";
}elseif ($bulan=="May") {
 echo " Mei ";
}elseif ($bulan=="June") {
 echo " Juni ";
}elseif ($bulan=="July") {
 echo " Juli ";
}elseif ($bulan=="August") {
 echo " Agustus ";
}elseif ($bulan=="September") {
 echo " September ";
}elseif ($bulan=="October") {
 echo " Oktober ";
}elseif ($bulan=="November") {
 echo " November ";
}elseif ($bulan=="December") {
 echo " Desember ";
}
$tahun=date('Y');
echo $tahun;
?></span>
			<ul class="pmb-list">
				<li id="pmb-informasi-program">
					<?php $a = $this->db->query("SELECT * FROM link_terkait where id_link_terkait='4'")->row_array(); ?>
					<a target='_BLANK' href="<?php echo "$a[link]"; ?>">
						<span class="pmb-title"><?php echo "$a[judul_menu]"; ?></span>
						<span class="pmb-desc"><?php echo "$a[detail_menu]"; ?></span>
					</a>
				</li>
				<li id="pmb-pendaftaran-online">
					<?php $b = $this->db->query("SELECT * FROM link_terkait where id_link_terkait='3'")->row_array(); ?>
					<a target='_BLANK' href="<?php echo "$b[link]"; ?>">
						<span class="pmb-title"><?php echo "$b[judul_menu]"; ?></span>
						<span class="pmb-desc"><?php echo "$b[detail_menu]"; ?></span>
					</a>
				</li>
				<li id="pmb-download-formulir">
					<?php $c = $this->db->query("SELECT * FROM link_terkait where id_link_terkait='2'")->row_array(); ?>
					<a target='_BLANK' href="<?php echo "$c[link]"; ?>">
						<span class="pmb-title"><?php echo "$c[judul_menu]"; ?></span>
						<span class="pmb-desc"><?php echo "$c[detail_menu]"; ?></span>
					</a>
				</li>
				<li id="pmb-pengumuman-hasil-seleksi">
					<?php $d = $this->db->query("SELECT * FROM link_terkait where id_link_terkait='1'")->row_array(); ?>
					<a target='_BLANK' href="<?php echo "$d[link]"; ?>">
						<span class="pmb-title"><?php echo "$d[judul_menu]"; ?></span>
						<span class="pmb-desc"><?php echo "$d[detail_menu]"; ?></span>
					</a>
				</li>
				<li id="pmb-pengumuman-hasil-seleksi">
				<img class="img-rounded" width="90" height="90" src="<?php echo base_url()."asset/logo/pmb.jpg"; ?>"  />
				</li>
				<li id="pmb">
				<img class="img-rounded text-center" width="100" height="100" src="<?php echo base_url()."asset/logo/forum.jpg"; ?>"  />
				<img class="img-rounded" width="100" height="100" src="<?php echo base_url()."asset/logo/sipeg.jpg"; ?>"  />
				<img class="img-rounded" width="100" height="100" src="<?php echo base_url()."asset/logo/tracer.jpg"; ?>"  />
				<img class="img-rounded" width="100" height="100" src="<?php echo base_url()."asset/logo/sipus.jpg"; ?>"  />
				<img class="img-rounded" width="100" height="100" src="<?php echo base_url()."asset/logo/kuesioner.jpg"; ?>"  />
				<img class="img-rounded" width="100" height="100" src="<?php echo base_url()."asset/logo/journal.jpg"; ?>"  />
				<img class="img-rounded" width="100" height="100" src="<?php echo base_url()."asset/logo/galeri.jpg"; ?>"  /><br><br><br>
				</li>
			</ul>