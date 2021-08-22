<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
	public function index(){
		// $jumlah= $this->model_berita->hitungberitautama()->num_rows();
		// $data['title'] = title();
		// $data['description'] = description();
		// $data['keywords'] = keywords();
		// $config['base_url'] = base_url().'main/index';
		// $config['total_rows'] = $jumlah;
		// $config['per_page'] = 5; 	
		// if ($this->uri->segment('3')!=''){
		// 	$dari = $this->uri->segment('3');
		// }else{
		// 	$dari = 0;
		// }

		// if (is_numeric($dari)) {
		// 	$data['utama'] = $this->model_berita->utama($dari, $config['per_page']);
		// }else{
		// 	redirect('main');
		// }
		// $this->pagination->initialize($config);
		// $this->template->load('phpmu-one/template','phpmu-one/view_home',$data);
		// $this->load->view('phpmu-one/rss');

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
}
