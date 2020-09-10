<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MagisterController extends CI_Controller {
	public function index(){
        $this->load->view('global_css');
        $this->load->view('header_mobile');
        $this->load->view('headerProdi');
		$this->load->view('sarjana/sarjana');
		$this->load->view('footer');
		$this->load->view('global_js');
	}
}
