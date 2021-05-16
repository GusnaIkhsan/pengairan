<?php 
    function cek_session_admin(){
    	$ci = & get_instance();
        $session = $ci->session->userdata('level');
    	if (!$session){
    		redirect(base_url());
        }
    }

    function cetak($str){
        return strip_tags(htmlentities($str, ENT_QUOTES, 'UTF-8'));
    }

    function title(){
        $ci = & get_instance();
        $title = $ci->db->query("SELECT nama_website FROM identitas ORDER BY id_identitas DESC LIMIT 1")->row_array();
        return $title['nama_website'];
    }

    function description(){
        $ci = & get_instance();
        $title = $ci->db->query("SELECT meta_deskripsi FROM identitas ORDER BY id_identitas DESC LIMIT 1")->row_array();
        return $title['meta_deskripsi'];
    }

    function keywords(){
        $ci = & get_instance();
        $title = $ci->db->query("SELECT meta_keyword FROM identitas ORDER BY id_identitas DESC LIMIT 1")->row_array();
        return $title['meta_keyword'];
    }

    function tgl_indo($tgl){
            $tanggal = substr($tgl,8,2);
            $bulan = getBulan(substr($tgl,5,2));
            $tahun = substr($tgl,0,4);
            return $tanggal.' '.$bulan.' '.$tahun;       
    } 

    function tgl_simpan($tgl){
            $tanggal = substr($tgl,0,2);
            $bulan = substr($tgl,3,2);
            $tahun = substr($tgl,6,4);
            return $tahun.'-'.$bulan.'-'.$tanggal;       
    }

    function tgl_view($tgl){
            $tanggal = substr($tgl,8,2);
            $bulan = substr($tgl,5,2);
            $tahun = substr($tgl,0,4);
            return $tanggal.'-'.$bulan.'-'.$tahun;       
    }

    function tgl_grafik($tgl){
            $tanggal = substr($tgl,8,2);
            $bulan = getBulan(substr($tgl,5,2));
            $tahun = substr($tgl,0,4);
            return $tanggal.'_'.$bulan;       
    }    

    function seo_title($s) {
        $c = array (' ');
        $d = array ('-','/','\\',',','.','#',':',';','\'','"','[',']','{','}',')','(','|','`','~','!','@','%','$','^','&','*','=','?','+','–');
        $s = str_replace($d, '', $s); // Hilangkan karakter yang telah disebutkan di array $d
        $s = strtolower(str_replace($c, '-', $s)); // Ganti spasi dengan tanda - dan ubah hurufnya menjadi kecil semua
        return $s;
    }

    function hari_ini($w){
        $seminggu = array("Minggu","Senin","Selasa","Rabu","Kamis","Jumat","Sabtu");
        $hari_ini = $seminggu[$w];
        return $hari_ini;
    }

    function getBulan($bln){
                switch ($bln){
                    case 1: 
                        return "Jan";
                        break;
                    case 2:
                        return "Feb";
                        break;
                    case 3:
                        return "Mar";
                        break;
                    case 4:
                        return "Apr";
                        break;
                    case 5:
                        return "Mei";
                        break;
                    case 6:
                        return "Jun";
                        break;
                    case 7:
                        return "Jul";
                        break;
                    case 8:
                        return "Agu";
                        break;
                    case 9:
                        return "Sep";
                        break;
                    case 10:
                        return "Okt";
                        break;
                    case 11:
                        return "Nov";
                        break;
                    case 12:
                        return "Des";
                        break;
                }
            } 

    function cek_terakhir($datetime, $full = false) {
		$today = time();    
                 $createdday= strtotime($datetime); 
                 $datediff = abs($today - $createdday);  
                 $difftext="";  
                 $years = floor($datediff / (365*60*60*24));  
                 $months = floor(($datediff - $years * 365*60*60*24) / (30*60*60*24));  
                 $days = floor(($datediff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));  
                 $hours= floor($datediff/3600);  
                 $minutes= floor($datediff/60);  
                 $seconds= floor($datediff);  
                 //year checker  
                 if($difftext=="")  
                 {  
                   if($years>1)  
                    $difftext=$years." Tahun";  
                   elseif($years==1)  
                    $difftext=$years." Tahun";  
                 }  
                 //month checker  
                 if($difftext=="")  
                 {  
                    if($months>1)  
                    $difftext=$months." Bulan";  
                    elseif($months==1)  
                    $difftext=$months." Bulan";  
                 }  
                 //month checker  
                 if($difftext=="")  
                 {  
                    if($days>1)  
                    $difftext=$days." Hari";  
                    elseif($days==1)  
                    $difftext=$days." Hari";  
                 }  
                 //hour checker  
                 if($difftext=="")  
                 {  
                    if($hours>1)  
                    $difftext=$hours." Jam";  
                    elseif($hours==1)  
                    $difftext=$hours." Jam";  
                 }  
                 //minutes checker  
                 if($difftext=="")  
                 {  
                    if($minutes>1)  
                    $difftext=$minutes." Menit";  
                    elseif($minutes==1)  
                    $difftext=$minutes." Menit";  
                 }  
                 //seconds checker  
                 if($difftext=="")  
                 {  
                    if($seconds>1)  
                    $difftext=$seconds." Detik";  
                    elseif($seconds==1)  
                    $difftext=$seconds." Detik";  
                 }  
                 return $difftext;  
	}

    function resize_and_crop($original_image_url, $thumb_image_url, $thumb_w, $thumb_h, $quality=100){
        $original = imagecreatefromjpeg($original_image_url);
        if (!$original) return FALSE;

        // GET ORIGINAL IMAGE DIMENSIONS
        list($original_w, $original_h) = getimagesize($original_image_url);

        // RESIZE IMAGE AND PRESERVE PROPORTIONS
        $thumb_w_resize = $thumb_w;
        $thumb_h_resize = $thumb_h;
        if ($original_w > $original_h){
            $thumb_h_ratio  = $thumb_h / $original_h;
            $thumb_w_resize = (int)round($original_w * $thumb_h_ratio);
        }else{
            $thumb_w_ratio  = $thumb_w / $original_w;
            $thumb_h_resize = (int)round($original_h * $thumb_w_ratio);
        }

        if ($thumb_w_resize < $thumb_w){
            $thumb_h_ratio  = $thumb_w / $thumb_w_resize;
            $thumb_h_resize = (int)round($thumb_h * $thumb_h_ratio);
            $thumb_w_resize = $thumb_w;
        }

        // CREATE THE PROPORTIONAL IMAGE RESOURCE
        $thumb = imagecreatetruecolor($thumb_w_resize, $thumb_h_resize);
        if (!imagecopyresampled($thumb, $original, 0,0,0,0, $thumb_w_resize, $thumb_h_resize, $original_w, $original_h)) return FALSE;

        // CREATE THE CENTERED CROPPED IMAGE TO THE SPECIFIED DIMENSIONS
        $final = imagecreatetruecolor($thumb_w, $thumb_h);

        $thumb_w_offset = 0;
        $thumb_h_offset = 0;
        if ($thumb_w < $thumb_w_resize){
            $thumb_w_offset = (int)round(($thumb_w_resize - $thumb_w) / 2);
        }else{
            $thumb_h_offset = (int)round(($thumb_h_resize - $thumb_h) / 2);
        }

        if (!imagecopy($final, $thumb, 0,0, $thumb_w_offset, $thumb_h_offset, $thumb_w_resize, $thumb_h_resize)) return FALSE;

        if (!imagejpeg($final, $thumb_image_url, $quality)) return FALSE;
        return TRUE;
    }