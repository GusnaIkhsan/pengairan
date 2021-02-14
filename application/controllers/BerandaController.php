<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BerandaController extends CI_Controller {
	public function index(){
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

	public function allNews(){
		if($this->input->get('search')){
			$data['news']	= $this->model_berita->allNews(strtolower($this->input->get('search')));
			$data['search']	= $this->input->get('search');
		} else {
			$data['news'] 	= $this->model_berita->allNews();
			$data['search']	= "";
		}
		$data['last_news'] = $this->model_berita->lastNews(3);
		$data['tags'] = $this->model_berita->tag_berita()->result();
		$dataHeader['menu'] = $this->model_menu->getPrimaryMenu();
        $this->load->view('global_css');
        $this->load->view('header_mobile');
        $this->load->view('header', $dataHeader);
		$this->load->view('all_news', $data);
		$this->load->view('footer');
		$this->load->view('global_js');
		// $this->load->view('specificJs/all_news_js');
		$this->load->view('all_news_js');
	}

	public function allAgenda(){
		if($this->input->get('search')){
			$data['list_agenda']	= $this->model_agenda->agenda(strtolower($this->input->get('search')))->result();
			$data['search']			= $this->input->get('search');
		} else {
			$data['list_agenda'] 	= $this->model_agenda->agenda()->result();
			$data['search']			= "";
		}
		$data['last_agenda']= $this->model_agenda->lastAgenda(3);
		$dataHeader['menu'] = $this->model_menu->getPrimaryMenu();
        $this->load->view('global_css');
        $this->load->view('header_mobile');
        $this->load->view('header', $dataHeader);
		$this->load->view('all_agenda', $data);
		$this->load->view('footer');
		$this->load->view('global_js');
		// $this->load->view('specificJs/all_agenda_js');
		$this->load->view('all_agenda_js');
	}

	public function allAnnouncement(){
		if($this->input->get('search')){
			$data['news']	= $this->model_berita->allAnnouncement(strtolower($this->input->get('search')));
			$data['search']	= $this->input->get('search');
		} else {
			$data['news'] 	= $this->model_berita->allAnnouncement();
			$data['search']	= "";
		}

		$data['last_news'] = $this->model_berita->lastAnnouncement(3);
		$dataHeader['menu'] = $this->model_menu->getPrimaryMenu();
        $this->load->view('global_css');
        $this->load->view('header_mobile');
        $this->load->view('header', $dataHeader);
		$this->load->view('all_announcement', $data);
		$this->load->view('footer');
		$this->load->view('global_js');
		// $this->load->view('specificJs/all_announcement_js');
		$this->load->view('all_announcement_js');
	}

	public function pageNews(){
		$dataHeader['menu'] = $this->model_menu->getPrimaryMenu();
        $this->load->view('global_css');
        $this->load->view('header_mobile');
        $this->load->view('header', $dataHeader);
		$this->load->view('news_page');
		$this->load->view('footer');
		$this->load->view('global_js');
	}

	public function allContents(){
		$data['last_news'] = $this->model_berita->lastNews(3);
		if($this->input->get('search')){
			$data['news']	= $this->model_berita->allContents(strtolower($this->input->get('search')));
			$data['search']	= $this->input->get('search');
		} else {
			$data['news'] 	= $this->model_berita->allContents();
			$data['search']	= "";
		}
		$data['tags'] = $this->model_berita->tag_berita()->result();
		$dataHeader['menu'] = $this->model_menu->getPrimaryMenu();
        $this->load->view('global_css');
        $this->load->view('header_mobile');
        $this->load->view('header', $dataHeader);
		$this->load->view('all_contents', $data);
		$this->load->view('footer');
		$this->load->view('global_js');
		// $this->load->view('specificJs/all_contents_js');
		$this->load->view('all_contents_js');
	}
}
