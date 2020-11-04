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

    function showStrukturOrganisasi(){
        $this->load->view('global_css');
        $this->load->view('header_mobile');
        $this->load->view('header');
		$this->load->view('general/struktur_organisasi');
		$this->load->view('footer');
		$this->load->view('global_js');
    }

    function showRenstraProgramKerja(){
        $this->load->view('global_css');
        $this->load->view('header_mobile');
        $this->load->view('header');
		$this->load->view('general/vision_mission_purpose');
		$this->load->view('footer');
		$this->load->view('global_js');
    }

    // Alumni
    function showTracerStudy(){
        $this->load->view('global_css');
        $this->load->view('header_mobile');
        $this->load->view('header');
		$this->load->view('general/alumni/tracer_study');
		$this->load->view('footer');
		$this->load->view('global_js');
    }

    function showDataLulusan(){
        $this->load->view('global_css');
        $this->load->view('header_mobile');
        $this->load->view('header');
		$this->load->view('general/alumni/data_lulusan');
		$this->load->view('footer');
		$this->load->view('global_js');
    }

    function showForumAlumni(){
        $this->load->view('global_css');
        $this->load->view('header_mobile');
        $this->load->view('header');
		$this->load->view('general/alumni/forum_alumni');
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
