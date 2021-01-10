<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BerandaController extends CI_Controller {
	public function index(){
		$data['news'] = $this->model_berita->lastNews(3);
		$data['announc'] = $this->model_berita->lastAnnouncement(3);
		$data['headline'] = $this->model_berita->headLine(3);
		$data['agenda'] = $this->model_agenda->lastAgenda(4);
		$dataHeader['menu'] = $this->model_menu->menu_utama();
        $this->load->view('global_css');
        $this->load->view('header_mobile');
        $this->load->view('header', $dataHeader);
		$this->load->view('beranda', $data);
		$this->load->view('footer');
		$this->load->view('specificJS/beranda_js');
		$this->load->view('global_js');
	}

	public function allNews(){
		$data['news'] = $this->model_berita->allNews();
		$data['tags'] = $this->model_berita->tag_berita()->result();
        $this->load->view('global_css');
        $this->load->view('header_mobile');
        $this->load->view('header');
		$this->load->view('all_news', $data);
		$this->load->view('footer');
		$this->load->view('global_js');
	}

	public function allAgenda(){
		$data['list_agenda'] = $this->model_agenda->agenda()->result();
        $this->load->view('global_css');
        $this->load->view('header_mobile');
        $this->load->view('header');
		$this->load->view('all_agenda', $data);
		$this->load->view('footer');
		$this->load->view('global_js');
	}

	public function allAnnouncement(){
		$data['news'] = $this->model_berita->allAnnouncement();
        $this->load->view('global_css');
        $this->load->view('header_mobile');
        $this->load->view('header');
		$this->load->view('all_announcement', $data);
		$this->load->view('footer');
		$this->load->view('global_js');
	}

	public function pageNews(){
        $this->load->view('global_css');
        $this->load->view('header_mobile');
        $this->load->view('header');
		$this->load->view('news_page');
		$this->load->view('footer');
		$this->load->view('global_js');
	}
}
