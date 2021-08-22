<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lowongan extends CI_Controller {
	public function index(){
		// $data['title'] = 'Semua Lowongan Kerja';
		// $data['description'] = description();
		// $data['keywords'] = keywords();
		// $jumlah= $this->model_lowongan->hitunglowongan()->num_rows();
		// $config['base_url'] = base_url().'lowongan/index';
		// $config['total_rows'] = $jumlah;
		// $config['per_page'] = 10; 	
		// if ($this->uri->segment('3')!=''){
		// 	$dari = $this->uri->segment('3');
		// }else{
		// 	$dari = 0;
		// }

		// if (is_numeric($dari)) {
		// 	$data['lowongan'] = $this->model_lowongan->semua_lowongan($dari, $config['per_page']);
		// }else{
		// 	redirect('lowongan');
		// }
		// $this->pagination->initialize($config);
		// $this->template->load('phpmu-one/template','phpmu-one/view_lowongan',$data);
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
		$ids = $this->uri->segment(3);
		$dat = $this->db->query("SELECT * FROM lowongan where judul_seo='".$this->db->escape_str($ids)."'");
	    $row = $dat->row();
	    $total = $dat->num_rows();
	        if ($total == 0){
	        	redirect('main');
	        }
		$data['title'] = $row->judul;
		$data['description'] = description();
		$data['keywords'] = keywords();
		$data['record'] = $this->model_lowongan->detail($ids)->row_array();
		$this->template->load('phpmu-one/template','phpmu-one/view_lowongan_detail',$data);
	}

	function file(){
		$name = $this->uri->segment(3);
		$data = file_get_contents("asset/files/".$name);
		force_download($name, $data);
	}
}
