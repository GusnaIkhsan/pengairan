<?php 
class Model_berita extends CI_model{
    function info_terbaru($limit){
        return $this->db->query("SELECT * FROM berita left join users on berita.username=users.username left join kategori on berita.id_kategori=kategori.id_kategori where status='Y' ORDER BY id_berita DESC LIMIT 0,$limit");
    }

    function utama($start,$limit){
        return $this->db->query("SELECT * FROM berita 
                                            left join users on berita.username=users.username
                                                left join kategori on berita.id_kategori=kategori.id_kategori 
                                                    WHERE utama='Y' ORDER BY id_berita DESC LIMIT $start, $limit");
    }

    function terpopuler($limit){
        return $this->db->query("SELECT * FROM berita left join users on berita.username=users.username left join kategori on berita.id_kategori=kategori.id_kategori where status='Y' ORDER BY dibaca DESC LIMIT 0,$limit");
    }

    function hitungberitautama(){
        return $this->db->query("SELECT * FROM berita where utama='Y'");
    }

    function hitungberita(){
        return $this->db->query("SELECT * FROM berita where status='Y'");
    }

    function hitungberitakategori($kat){
        return $this->db->query("SELECT * FROM berita where status='Y' AND id_kategori='".$this->db->escape_str($kat)."'");
    }

    function pilihan($limit){
        return $this->db->query("SELECT * FROM berita left join users on berita.username=users.username left join kategori on berita.id_kategori=kategori.id_kategori where status='Y' AND berita.aktif='Y' ORDER BY id_berita DESC LIMIT 0,$limit");
    }

    function kategori_utama(){
        return $this->db->query("SELECT * FROM kategori where sidebar != '0' ORDER BY sidebar ASC");
    }

    function kategori_content($id,$dari,$sampai){
        return $this->db->query("SELECT * FROM berita where id_kategori='$id' AND status='Y' ORDER BY id_berita DESC LIMIT $dari,$sampai");
    }

    function semua_berita($start, $limit){
        return $this->db->query("SELECT * FROM berita a JOIN users b on a.username=b.username where status='Y' ORDER BY id_berita DESC LIMIT $start,$limit");
    }

    function semua_berita_cari($start, $limit, $keyword){
        return $this->db->query("SELECT * FROM berita a JOIN users b on a.username=b.username where status='Y' AND judul LIKE '%$keyword%' ORDER BY id_berita DESC LIMIT $start,$limit");
    }

    function berita_detail($id){
        return $this->db->query("SELECT * FROM berita a LEFT JOIN users b ON a.username=b.username LEFT JOIN kategori c ON a.id_kategori=c.id_kategori where status='Y' AND (a.id_berita='".$this->db->escape_str($id)."' OR a.judul_seo='".$this->db->escape_str($id)."')");
    }

    function berita_dibaca_update($id){
        return $this->db->query("UPDATE berita SET dibaca=dibaca+1 where id_berita='".$this->db->escape_str($id)."' OR judul_seo='".$this->db->escape_str($id)."'");
    }

    function detail_kategori($id, $start,$limit){
        return $this->db->query("SELECT * FROM berita left join users on berita.username=users.username where status='Y' AND id_kategori='".$this->db->escape_str($id)."' ORDER BY id_berita DESC LIMIT $start,$limit");
    }

    function list_berita(){
        return $this->db->query("SELECT * FROM berita WHERE id_kategori NOT IN (61) ORDER BY tanggal DESC, jam DESC");
    }

    function list_pengumuman(){
        return $this->db->query("SELECT * FROM berita WHERE id_kategori=61 ORDER BY tanggal DESC, jam DESC");
    }

    function kategori_berita(){
        return $this->db->query("SELECT * FROM kategori WHERE id_kategori NOT IN (61) ORDER BY id_kategori DESC");
    }

    function kategori_berita_tambah(){
        $datadb = array('nama_kategori'=>$this->db->escape_str($this->input->post('a')),
                        'username'=>$this->session->username,
                        'kategori_seo'=>seo_title($this->input->post('a')),
                        'aktif'=>$this->db->escape_str($this->input->post('b')),
                        'sidebar'=>$this->db->escape_str($this->input->post('c')));
        $this->db->insert('kategori',$datadb);
    }

    function kategori_berita_edit($id){
        return $this->db->query("SELECT * FROM kategori where id_kategori='$id'");
    }

    function kategori_berita_update(){
        $datadb = array('nama_kategori'=>$this->db->escape_str($this->input->post('a')),
                        'username'=>$this->session->username,
                        'kategori_seo'=>seo_title($this->input->post('a')),
                        'aktif'=>$this->db->escape_str($this->input->post('b')),
                        'sidebar'=>$this->db->escape_str($this->input->post('c')));
        $this->db->where('id_kategori',$this->input->post('id'));
        $this->db->update('kategori',$datadb);
    }

    function kategori_berita_delete($id){
        return $this->db->query("DELETE FROM kategori where id_kategori='$id'");
    }

    function tag_berita(){
        return $this->db->query("SELECT * FROM tag ORDER BY id_tag DESC");
    }

    function tag_berita_tambah(){
        $datadb = array('nama_tag'=>$this->db->escape_str($this->input->post('a')),
                        'username'=>$this->session->username,
                        'tag_seo'=>seo_title($this->input->post('a')),
                        'count'=>'0');
        $this->db->insert('tag',$datadb);
    }

    function tag_berita_edit($id){
        return $this->db->query("SELECT * FROM tag where id_tag='$id'");
    }

    function tag_berita_update(){
        $datadb = array('nama_tag'=>$this->db->escape_str($this->input->post('a')),
                        'username'=>$this->session->username,
                        'tag_seo'=>seo_title($this->input->post('a')));
        $this->db->where('id_tag',$this->input->post('id'));
        $this->db->update('tag',$datadb);
    }

    function tag_berita_delete($id){
        return $this->db->query("DELETE FROM tag where id_tag='$id'");
    }

    function list_berita_tambah(){
        $config['upload_path'] = 'asset/foto_berita/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|JPG|JPEG';
        $config['max_size'] = '5000'; // kb
        $this->load->library('upload', $config);        
        if ($this->input->post('j') != ''){
            $tag_seo = $this->input->post('j');
            $tag=implode(',',$tag_seo);
        }else{
            $tag = '';
        }
        
        if(empty($this->input->post('date'))){
            $tanggal = date('Y-m-d');
        }else{
            $tanggal = $this->input->post('date');
        }
        
        if ($this->upload->do_upload('k')){
                $hasil=$this->upload->data();
                resize_and_crop($hasil['full_path'],$hasil['full_path'], 1800, 900);
                    $datadb = array('id_kategori'=>$this->db->escape_str($this->input->post('a')),
                                    'id_kategori_prodi'=>$this->db->escape_str($this->input->post('kategori-prodi')),
                                    'username'=>$this->session->username,
                                    'judul'=>$this->input->post('b'),
                                    'sub_judul'=>$this->input->post('c'),                                   
                                    'youtube'=>"",
                                    'judul_seo'=>seo_title($this->input->post('b')),
                                    'headline'=>$this->db->escape_str($this->input->post('e')),
                                    'aktif'=>$this->db->escape_str($this->input->post('f')),
                                    'utama'=>$this->db->escape_str($this->input->post('g')),
                                    'isi_berita'=>$this->input->post('h'),
                                    'keterangan_gambar'=>"",
                                    'hari'=>hari_ini(date('w',strtotime($tanggal))),                              
                                    'tanggal'=>$tanggal,
                                    'jam'=>date('H:i:s'),
                                    'gambar'=>$hasil['file_name'],
                                    'dibaca'=>'0',
                                    'tag'=>$tag,
                                    'status'=>'Y');
            }else{
                    $datadb = array('id_kategori'=>$this->db->escape_str($this->input->post('a')),
                                    'id_kategori_prodi'=>$this->db->escape_str($this->input->post('kategori-prodi')),
                                    'username'=>$this->session->username,
                                    'judul'=>$this->input->post('b'),
                                    'sub_judul'=>$this->input->post('c'),
                                    'youtube'=>"",
                                    'judul_seo'=>seo_title($this->input->post('b')),
                                    'headline'=>$this->db->escape_str($this->input->post('e')),
                                    'aktif'=>$this->db->escape_str($this->input->post('f')),
                                    'utama'=>$this->db->escape_str($this->input->post('g')),
                                    'isi_berita'=>$this->input->post('h'),
                                    'keterangan_gambar'=>"",
                                    'hari'=>hari_ini(date('w',strtotime($tanggal))),                              
                                    'tanggal'=>$tanggal,
                                    'jam'=>date('H:i:s'),
                                    'gambar'=>'default_berita.jpg',               
                                    'dibaca'=>'0',
                                    'tag'=>$tag,
                                    'status'=>'Y');
            }
        $this->db->insert('berita',$datadb);
    }

    function list_berita_cepat(){
        $datadb = array('id_kategori'=>'61',
                        'id_kategori_prodi'=>'31',
                        'username'=>$this->session->username,
                        'judul'=>$this->db->escape_str($this->input->post('a')),
                        'judul_seo'=>seo_title($this->input->post('a')),
                        'isi_berita'=>$this->input->post('b'),
                        'hari'=>hari_ini(date('w')),
                        'tanggal'=>date('Y-m-d'),
                        'jam'=>date('H:i:s'),
                        'gambar'=>'default_berita.jpg',
                        'dibaca'=>'0',
                        'tag'=>'pengumuman',
                        'status'=>'Y');
        $this->db->insert('berita',$datadb);
    }

    function list_berita_edit($id){
        return $this->db->query("SELECT * FROM berita where id_berita='$id'");
    }

    function list_berita_update(){
        $config['upload_path'] = 'asset/foto_berita/';
        $config['allowed_types'] = 'gif|jpg|png|JPG|JPEG';
        $config['max_size'] = '5000'; // kb
        $this->load->library('upload', $config);
            if ($this->input->post('j') != ''){
                $tag_seo = $this->input->post('j');
                $tag=implode(',',$tag_seo);
            }else{
                $tag = '';
            }

            if(empty($this->input->post('date'))){
                $tanggal = date('Y-m-d');
            }else{
                $tanggal = $this->input->post('date');
            }

            if ($this->upload->do_upload('k')){
                $hasil=$this->upload->data();
                resize_and_crop($hasil['full_path'],$hasil['full_path'], 1800, 900);
                    $datadb = array('id_kategori'=>$this->db->escape_str($this->input->post('a')),
                                    'id_kategori_prodi'=>$this->db->escape_str($this->input->post('kategori-prodi')),
                                    'username'=>$this->session->username,
                                    'judul'=>$this->input->post('b'),
                                    'sub_judul'=>$this->input->post('c'),
                                    'youtube'=>"",
                                    'judul_seo'=>seo_title($this->input->post('b')),
                                    'headline'=>$this->db->escape_str($this->input->post('e')),
                                    'aktif'=>$this->db->escape_str($this->input->post('f')),
                                    'utama'=>$this->db->escape_str($this->input->post('g')),
                                    'isi_berita'=>$this->input->post('h'),
                                    'keterangan_gambar'=>"",
                                    'hari'=>hari_ini(date('w',strtotime($tanggal))),                              
                                    'tanggal'=>$tanggal,    
                                    'gambar'=>$hasil['file_name'],                             
                                    'tag'=>$tag,
                                    'status'=>'Y');
                if("default_berita.jpg"!=$this->input->post('oldFile')){
                    unlink('asset/foto_berita/'.$this->input->post('oldFile'));
                }
            }else{
                    $datadb = array('id_kategori'=>$this->db->escape_str($this->input->post('a')),
                                    'id_kategori_prodi'=>$this->db->escape_str($this->input->post('kategori-prodi')),
                                    'username'=>$this->session->username,
                                    'judul'=>$this->input->post('b'),
                                    'sub_judul'=>$this->input->post('c'),
                                    'youtube'=>"",
                                    'judul_seo'=>seo_title($this->input->post('b')),
                                    'headline'=>$this->db->escape_str($this->input->post('e')),
                                    'aktif'=>$this->db->escape_str($this->input->post('f')),
                                    'utama'=>$this->db->escape_str($this->input->post('g')),
                                    'isi_berita'=>$this->input->post('h'),
                                    'keterangan_gambar'=>"",
                                    'hari'=>hari_ini(date('w',strtotime($tanggal))),                              
                                    'tanggal'=>$tanggal,                                                    
                                    'tag'=>$tag,
                                    'status'=>'Y');
            }
        
        $this->db->where('id_berita',$this->input->post('id'));
        $this->db->update('berita',$datadb);
    }

    function list_berita_delete($id){
        return $this->db->query("DELETE FROM berita where id_berita='$id'");
    }

    function pengumuman_tambah(){
        $config['upload_path'] = 'asset/foto_berita/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|JPG|JPEG';
        $config['max_size'] = '5000'; // kb
        $this->load->library('upload', $config);        
        if ($this->input->post('j') != ''){
            $tag_seo = $this->input->post('j');
            $tag=implode(',',$tag_seo);
        }else{
            $tag = '';
        }
        
        if(empty($this->input->post('date'))){
            $tanggal = date('Y-m-d');
        }else{
            $tanggal = $this->input->post('date');
        }
        
        if ($this->upload->do_upload('k')){
                $hasil=$this->upload->data();
                resize_and_crop($hasil['full_path'],$hasil['full_path'], 1800, 900);
                    $datadb = array('id_kategori'=>'61',
                                    'id_kategori_prodi'=>$this->db->escape_str($this->input->post('kategori-prodi')),
                                    'username'=>$this->session->username,
                                    'judul'=>$this->db->escape_str($this->input->post('b')),
                                    'sub_judul'=>$this->db->escape_str($this->input->post('c')),
                                    'youtube'=>"",
                                    'judul_seo'=>seo_title($this->input->post('b')),
                                    'headline'=>$this->db->escape_str($this->input->post('e')),
                                    'aktif'=>"N",
                                    'utama'=>"N",
                                    'isi_berita'=>$this->input->post('h'),
                                    'keterangan_gambar'=>"",
                                    'hari'=>hari_ini(date('w',strtotime($tanggal))),                              
                                    'tanggal'=>$tanggal,
                                    'jam'=>date('H:i:s'),
                                    'gambar'=>$hasil['file_name'],
                                    'dibaca'=>'0',
                                    'tag'=>"",
                                    'status'=>'Y');
            }else{
                    $datadb = array('id_kategori'=>'61',
                                    'id_kategori_prodi'=>$this->db->escape_str($this->input->post('kategori-prodi')),
                                    'username'=>$this->session->username,
                                    'judul'=>$this->db->escape_str($this->input->post('b')),
                                    'sub_judul'=>$this->db->escape_str($this->input->post('c')),
                                    'youtube'=>"",
                                    'judul_seo'=>seo_title($this->input->post('b')),
                                    'headline'=>$this->db->escape_str($this->input->post('e')),
                                    'aktif'=>"N",
                                    'utama'=>"N",
                                    'isi_berita'=>$this->input->post('h'),
                                    'keterangan_gambar'=>"",
                                    'hari'=>hari_ini(date('w',strtotime($tanggal))),                              
                                    'tanggal'=>$tanggal,
                                    'jam'=>date('H:i:s'),
                                    'gambar'=>'default_berita.jpg',               
                                    'dibaca'=>'0',
                                    'tag'=>"",
                                    'status'=>'Y');
            }
        $this->db->insert('berita',$datadb);
    }

    function pengumuman_update(){
        $config['upload_path'] = 'asset/foto_berita/';
        $config['allowed_types'] = 'gif|jpg|png|JPG|JPEG';
        $config['max_size'] = '5000'; // kb
        $this->load->library('upload', $config);                 

            if(empty($this->input->post('date'))){
                $tanggal = date('Y-m-d');
            }else{
                $tanggal = $this->input->post('date');
            }

            if ($this->upload->do_upload('k')){
                $hasil=$this->upload->data();
                resize_and_crop($hasil['full_path'],$hasil['full_path'], 1800, 900);
                    $datadb = array('id_kategori'=>'61',
                                    'id_kategori_prodi'=>$this->db->escape_str($this->input->post('kategori-prodi')),
                                    'username'=>$this->session->username,
                                    'judul'=>$this->db->escape_str($this->input->post('b')),
                                    'sub_judul'=>$this->db->escape_str($this->input->post('c')),
                                    'youtube'=>"",
                                    'judul_seo'=>seo_title($this->input->post('b')),
                                    'headline'=>$this->db->escape_str($this->input->post('e')),
                                    'aktif'=>"N",
                                    'utama'=>"N",
                                    'isi_berita'=>$this->input->post('h'),
                                    'keterangan_gambar'=>"",
                                    'hari'=>hari_ini(date('w',strtotime($tanggal))),                              
                                    'tanggal'=>$tanggal,                                    
                                    'gambar'=>$hasil['file_name'],                                                                       
                                    'status'=>'Y');

                if("default_berita.jpg"!=$this->input->post('oldFile')){
                    unlink('asset/foto_berita/'.$this->input->post('oldFile'));
                }
            }else{
                    $datadb = array('id_kategori'=>'61',
                                    'id_kategori_prodi'=>$this->db->escape_str($this->input->post('kategori-prodi')),
                                    'username'=>$this->session->username,
                                    'judul'=>$this->db->escape_str($this->input->post('b')),
                                    'sub_judul'=>$this->db->escape_str($this->input->post('c')),
                                    'youtube'=>"",
                                    'judul_seo'=>seo_title($this->input->post('b')),
                                    'headline'=>$this->db->escape_str($this->input->post('e')),
                                    'aktif'=>"N",
                                    'utama'=>"N",
                                    'isi_berita'=>$this->input->post('h'),
                                    'keterangan_gambar'=>"",
                                    'hari'=>hari_ini(date('w',strtotime($tanggal))),                              
                                    'tanggal'=>$tanggal,                                                                                                                                               
                                    'status'=>'Y');
            }
        
        $this->db->where('id_berita',$this->input->post('id'));
        $this->db->update('berita',$datadb);
    }

    function get_prodi(){
        return $this->db->query("SELECT * FROM prodi WHERE prodi.aktif = 'Y' ");
    }

    function allNews($query = ""){
        if($query == ""){
            $data = $this->db->query("SELECT berita.* FROM berita                                     
                                    left join kategori 
                                    on berita.id_kategori=kategori.id_kategori 
                                    where status='Y' and kategori.id_kategori not in (61) ORDER BY tanggal DESC, jam 
                                    DESC");
        } else {
            $data = $this->db->query("SELECT berita.* FROM berita                                     
                                    left join kategori 
                                    on berita.id_kategori=kategori.id_kategori 
                                    where status='Y' and kategori.id_kategori not in (61) and judul like '%" . $query . "%' ORDER BY tanggal DESC, jam 
                                    DESC");
        }
        return $data->result();
    }

    function allAnnouncement($query = ""){
        if($query == ""){
            $data = $this->db->query("SELECT berita.* FROM berita                                 
                                    left join kategori 
                                    on berita.id_kategori=kategori.id_kategori 
                                    where status='Y' and kategori.id_kategori = 61 ORDER BY tanggal DESC, jam 
                                    DESC");
        } else {
            $data = $this->db->query("SELECT berita.* FROM berita                                 
                                    left join kategori 
                                    on berita.id_kategori=kategori.id_kategori 
                                    where status='Y' and kategori.id_kategori = 61 and judul like '%" . $query . "%' ORDER BY tanggal DESC, jam 
                                    DESC");
        }
        
        return $data->result();
    }

    function lastNews($limit){
        $data = $this->db->query("SELECT berita.* FROM berita 
                                    left join users 
                                    on berita.username=users.username 
                                    left join kategori 
                                    on berita.id_kategori=kategori.id_kategori 
                                    where status='Y' and kategori.id_kategori not in (61) ORDER BY tanggal DESC, jam 
                                    DESC LIMIT 0,$limit");
        return $data->result();
    }

    function lastAnnouncement($limit){
        $data = $this->db->query("SELECT berita.* FROM berita                                 
                                    left join kategori 
                                    on berita.id_kategori=kategori.id_kategori 
                                    where status='Y' and kategori.id_kategori = 61 ORDER BY tanggal DESC, jam 
                                    DESC LIMIT 0,$limit");;
        return $data->result();
    }

    function headLine($limit){
        $data = $this->db->query("SELECT * FROM berita                                                                     
                                    where headline = 'Y'
                                    ORDER BY tanggal DESC, jam DESC LIMIT 0,$limit");
        return $data->result();
    }

    function getBerita($id){
        return $this->db->query("SELECT * FROM berita where id_berita='$id'")->first_row('array');
    }

    function getNewsByTag($tag){
        $data = $this->db->query("SELECT berita.* FROM berita                                     
                                    left join kategori 
                                    on berita.id_kategori=kategori.id_kategori 
                                    where status='Y' and kategori.id_kategori not in (61) and berita.tag LIKE '%$tag%'  
                                    ORDER BY tanggal DESC");
        return $data->result();
    }

    function allContents($query = ""){
        $data               = array();
        
        if($query == ""){
            // Berita
            $dataNews           = $this->db->query("SELECT berita.* FROM berita                                     
                                    left join kategori 
                                    on berita.id_kategori=kategori.id_kategori 
                                    where status='Y' and kategori.id_kategori not in (61) ORDER BY tanggal 
                                    DESC")->result();

            foreach($dataNews as $news){
                $news->type = "Berita";
                array_push($data, $news);
            }

            // Pengumuman
            $dataAnnouncement   = $this->db->query("SELECT berita.* FROM berita                                 
                                    left join kategori 
                                    on berita.id_kategori=kategori.id_kategori 
                                    where status='Y' and kategori.id_kategori = 61 ORDER BY tanggal 
                                    DESC")->result();

            foreach($dataAnnouncement as $announcement){
                $announcement->type = "Pengumuman";
                array_push($data, $announcement);
            }

            // Agenda
            $dataAgenda         = $this->db->query("SELECT * FROM agenda ORDER BY tgl_posting DESC")->result();

            foreach($dataAgenda as $agenda){
                $agenda->type = "Agenda";
                array_push($data, $agenda);
            }

        } else {
            // Berita
            $dataNews           = $this->db->query("SELECT berita.* FROM berita                                     
                                    left join kategori 
                                    on berita.id_kategori=kategori.id_kategori 
                                    where status='Y' and kategori.id_kategori not in (61) and judul like '%" . $query . "%' ORDER BY tanggal 
                                    DESC")->result();

            foreach($dataNews as $news){
                $news->type = "Berita";
                array_push($data, $news);
            }

            // Pengumuman
            $dataAnnouncement   = $this->db->query("SELECT berita.* FROM berita                                 
                                    left join kategori 
                                    on berita.id_kategori=kategori.id_kategori 
                                    where status='Y' and kategori.id_kategori = 61 and judul like '%" . $query . "%' ORDER BY tanggal 
                                    DESC")->result();

            foreach($dataAnnouncement as $announcement){
                $announcement->type = "Pengumuman";
                array_push($data, $announcement);
            }

            // Agenda
            $dataAgenda         = $this->db->query("SELECT * FROM agenda WHERE tema like '%" . $query . "%' ORDER BY tgl_posting DESC")->result();

            foreach($dataAgenda as $agenda){
                $agenda->type = "Agenda";
                array_push($data, $agenda);
            }

        }
        return $data;
    }
}