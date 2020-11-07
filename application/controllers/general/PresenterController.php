<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class PresenterController extends CI_Controller {

    const PENELITIAN_PENGABDIAN_PAGES = array(
        "penelitian-dosen"      => 'general/penelitian_pengabdian/penelitian_dosen',
        "penelitian-mahasiswa"  => 'general/penelitian_pengabdian/penelitian_mahasiswa',
        "publikasi"             => 'general/penelitian_pengabdian/publikasi',
        "pengabdian"            => 'general/penelitian_pengabdian/pengabdian',
        "jurnal"                => 'general/penelitian_pengabdian/jurnal'
    );

    const FASILITAS_PAGES = array(
        "akses-komputer"    => 'general/fasilitas/akses_komputer',
        "ruang-baca"        => 'general/fasilitas/ruang_baca',
        "laboratorium"      => 'general/fasilitas/laboratorium',
        "ruang-belajar"     => 'general/fasilitas/ruang_belajar'
    );

    const JAMINAN_MUTU_PAGES = array(
        "unit-jaminan-mutu" => 'general/jaminan_mutu/unit_jaminan_mutu',
        "sistem-dokumen"    => 'general/jaminan_mutu/sistem_dokumen',
        "audit"             => 'general/jaminan_mutu/audit',
        "tinjauan-manajemen"=> 'general/jaminan_mutu/tinjauan_manajemen'
    );
    
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

    // Penelitian dan Pengabdian
    function showPenelitianPengabdian($page){
        $this->load->view('global_css');
        $this->load->view('header_mobile');
        $this->load->view('header');
        $this->load->view(PresenterController::PENELITIAN_PENGABDIAN_PAGES[$page]);
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

    // Fasilitas
    function showFasilitas($page){
        $this->load->view('global_css');
        $this->load->view('header_mobile');
        $this->load->view('header');
        $this->load->view(PresenterController::FASILITAS_PAGES[$page]);
		$this->load->view('footer');
		$this->load->view('global_js');
    }

    // Jaminan Mutu
    function showJaminanMutu($page){
        $this->load->view('global_css');
        $this->load->view('header_mobile');
        $this->load->view('header');
        $this->load->view(PresenterController::JAMINAN_MUTU_PAGES[$page]);
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
