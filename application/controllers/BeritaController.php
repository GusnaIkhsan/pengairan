<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BeritaController extends CI_Controller {

	const MODE_BERITA = [
		"BERITA"		=> "berita",
		"PENGUMUMAN"	=> "pengumuman",
		"AGENDA"		=> "agenda"
	];

	public function detail($id, $mode){
		$data['mode'] = $mode;
		$dataHeader['menu'] = $this->model_menu->getPrimaryMenu();
		$this->load->view('global_css');
		$this->load->view('header_mobile', $dataHeader);
		$this->load->view('header', $dataHeader);
		if($mode == BeritaController::MODE_BERITA["AGENDA"]){
			$data['agenda'] = $this->model_agenda->agenda_edit($id)->first_row('array');
			$this->load->view('berita/display_agenda', $data);
		} else {
			$data['berita'] = $this->model_berita->getBerita($id);
			$this->load->view('berita/display_berita', $data);
		}
		$this->load->view('footer');
		$this->load->view('global_js');
	}
}
