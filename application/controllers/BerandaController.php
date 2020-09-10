<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BerandaController extends CI_Controller {
	public function index(){
        // $data["header"] = $this->load->view('header');
        $this->load->view('global_css');
        $this->load->view('header_mobile');
        $this->load->view('header');
		$this->load->view('beranda');
		$this->load->view('footer');
		$this->load->view('global_js');
	}

	public function allNews(){
        $this->load->view('global_css');
        $this->load->view('header_mobile');
        $this->load->view('header');
		$this->load->view('all_news');
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
