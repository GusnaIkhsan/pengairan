<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Playlist extends CI_Controller {
	public function index(){
			// $jumlah= $this->model_utama->view('playlist')->num_rows();
			// $config['base_url'] = base_url().'playlist/index/'.$this->uri->segment(3);
			// $config['total_rows'] = $jumlah;
			// $config['per_page'] = 25; 	
			// if ($this->uri->segment('4')==''){
			// 	$dari = 0;
			// }else{
			// 	$dari = $this->uri->segment('4');
			// }
			// $data['title'] = "Playlist";
			// $data['description'] = description();
			// $data['keywords'] = keywords();
			// if (is_numeric($dari)) {
			// 	$data['playlist'] = $this->model_utama->view_where_ordering_limit('playlist',array('aktif' => 'Y'),'id_playlist','DESC',$dari,$config['per_page']);
			// }else{
			// 	redirect('main');
			// }
			// $this->pagination->initialize($config);
			// $this->template->load('phpmu-one/template','phpmu-one/playlist',$data);
			$limit = $this->model_app->select_where("general_setting","id","1");        
			$data['news'] = $this->model_berita->lastNews(3);
			$data['announc'] = $this->model_berita->lastAnnouncement(3);
			$data['headline'] = $this->model_berita->headLine($limit[0]['value']);
			$data['agenda'] = $this->model_agenda->lastAgenda(4);
			$data['video'] = $this->model_app->view_where_ordering('video',array('aktif'=>'Y'),'id_video','DESC');
			$data['infografis'] = $this->model_app->select_all('info_grafis');                           
			$dataHeader['menu'] = $this->model_menu->getPrimaryMenu();
					$this->load->view('global_css');
					$this->load->view('header_mobile', $dataHeader);
					$this->load->view('header', $dataHeader);
			$this->load->view('beranda', $data);
			$this->load->view('footer');
			$this->load->view('specificJS/beranda_js');
			$this->load->view('global_js');
	}

	public function detail(){
		$query = $this->model_utama->view_where('playlist',array('playlist_seo' => $this->uri->segment(3)));
		if ($query->num_rows()<=0){
			redirect('main');
		}else{
			$row = $query->row_array();
			$jumlah= $this->model_utama->view_where('video',array('id_playlist' => $row['id_playlist']))->num_rows();
			$config['base_url'] = base_url().'playlist/detail/'.$this->uri->segment(3);
			$config['total_rows'] = $jumlah;
			$config['per_page'] = 15;
			if ($this->uri->segment('4')==''){
				$dari = 0;
			}else{
				$dari = $this->uri->segment('4');
			}
			$data['title'] = "Playlist $row[jdl_playlist]";
			$data['description'] = description();
			$data['keywords'] = keywords();
			$data['rows'] = $row;
			if (is_numeric($dari)){
				$data['detailplaylist'] = $this->model_utama->view_join_two('video','users','playlist','username','id_playlist',array('video.id_playlist' => $row['id_playlist']),'id_video','DESC',$dari,$config['per_page']);
			}else{
				redirect('main');
			}
			$this->pagination->initialize($config);
			$this->template->load('phpmu-one/template','phpmu-one/detailplaylist',$data);
		}
	}

	public function watch(){
		$query = $this->model_utama->view_join_two('video','users','playlist','username','id_playlist',array('video.video_seo' => $this->uri->segment(3)),'id_video','DESC',0,1);
		if ($query->num_rows()<=0){
			redirect('main');
		}else{
			$row = $query->row_array();
			$data['title'] = cetak($row['jdl_video']);
			$data['description'] = cetak($row['keterangan']);
			$data['keywords'] = cetak($row['tagvid']);
			$data['rows'] = $row;

			$dataa = array('dilihat'=>$row['dilihat']+1);
			$where = array('id_video' => $row['id_video']);
			$this->model_utama->update('video', $dataa, $where);
			$this->template->load('phpmu-one/template','phpmu-one/play',$data);
		}
	}

	function kirim_komentar(){
		if (isset($_POST['submit'])){
			$cek = $this->model_utama->view_where('video',array('id_video' => $this->input->post('a')));
			$row = $cek->row_array();
			if ($cek->num_rows()<=0){
				redirect('main');
			}else{
				$data = array('id_video'=>$this->db->escape_str($this->input->post('a')),
	                            'nama_komentar'=>$this->db->escape_str($this->input->post('b')),
	                            'url'=>$this->db->escape_str($this->input->post('c')),
	                            'isi_komentar'=>cetak($this->input->post('d')),
	                            'tgl'=>date('Y-m-d'),
	                            'jam_komentar'=>date('H:i:s'),
	                            'aktif'=>'N');
				$this->model_utama->insert('komentarvid',$data);
			}

			redirect('playlist/watch/'.$row['video_seo'].'#listcomment');

		}
	}
}
