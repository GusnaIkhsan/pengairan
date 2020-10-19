<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BeritaController extends CI_Controller {

	public function detail($id){
		$data['berita'] = $this->model_berita->getBerita($id);
		$this->load->view('global_css');
		$this->load->view('header_mobile');
		$this->load->view('header');
		$this->load->view('berita/display_berita', $data);
		$this->load->view('footer');
		$this->load->view('global_js');
	}
}
