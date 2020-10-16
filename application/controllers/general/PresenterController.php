<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class PresenterController extends CI_Controller {
    
    // Profile
    function showVisiMisi(){
        $this->load->view('global_css');
        $this->load->view('header_mobile');
        $this->load->view('header');
		$this->load->view('general/vision_mission_purpose');
		$this->load->view('footer');
		$this->load->view('global_js');
    }

    function showHistory(){
        $this->load->view('global_css');
        $this->load->view('header_mobile');
        $this->load->view('header');
		$this->load->view('general/history');
		$this->load->view('footer');
		$this->load->view('global_js');
    }


    // Tentang Kami
    function showAddress(){
        
    }

    function showAddressCriticsSuggestion(){
        $this->load->view('global_css');
        $this->load->view('header_mobile');
        $this->load->view('header');
		$this->load->view('general/critics_suggest');
		$this->load->view('footer');
		$this->load->view('global_js');
    }
}
