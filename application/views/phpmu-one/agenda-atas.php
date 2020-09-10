<script type="text/javascript">        
    function tampilkanwaktu(){         //fungsi ini akan dipanggil di bodyOnLoad dieksekusi tiap 1000ms = 1detik    
    var waktu = new Date();            //membuat object date berdasarkan waktu saat 
    var sh = waktu.getHours() + "";    //memunculkan nilai jam, //tambahan script + "" supaya variable sh bertipe string sehingga bisa dihitung panjangnya : sh.length    //ambil nilai menit
    var sm = waktu.getMinutes() + "";  //memunculkan nilai detik    
    var ss = waktu.getSeconds() + "";  //memunculkan jam:menit:detik dengan menambahkan angka 0 jika angkanya cuma satu digit (0-9)
    document.getElementById("clock").innerHTML = (sh.length==1?"0"+sh:sh) + " : " + (sm.length==1?"0"+sm:sm) + " <span class='blink'>:</span> " + (ss.length==1?"0"+ss:ss);
    }
</script>

<h2 id="event-block-title" class="block-title">Agenda UNSIKA</h2> <span class="glyphicon glyphicon-time"></span>  <span style="text-shadow: 2px 2px 3px #FFFFFF;font-weight:bold;color:#FF0000" id="clock"></span>
<span style="text-shadow: 2px 2px 3px #FFFFFF;font-weight:bold;color:#FF0000"><?php
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
	<div class="cycle-slideshow event-wrap" data-cycle-slides="div" data-cycle-fx="carousel" data-cycle-timeout="5000" data-cycle-carousel-fluid="false" data-cycle-next="#event-next" data-cycle-prev="#event-prev">
					<?php  
						$sql = $this->db->query("SELECT * FROM agenda ORDER BY id_agenda DESC LIMIT 5");		 
						foreach ($sql->result_array() as $d){
							$tgl_posting = tgl_indo($d['tgl_posting']);
							$tgl_mulai   = tgl_indo($d['tgl_mulai']);
							$tgl_selesai = tgl_indo($d['tgl_selesai']);
							if (trim($d['isi_agenda'])==''){
								$isi = 'Maaf, Tidak Ada Keterangan Unutk agenda ini..'; 
							}else{
								$isi = substr($d['isi_agenda'],0,80); 
							}
							echo "<div class='event-item'>
									<ul>
										<li class='event-item-title'><a href='agenda/detail/$d[tema_seo]'>$d[tema]</a></li>
										<li style='color:orange' class='event-item-date'>$tgl_mulai s/d $tgl_selesai</li>						
										<li class='event-item-location'>".strip_tags($isi)."...</li>
									</ul>
								  </div>";
						}
					?>
	
	</div>