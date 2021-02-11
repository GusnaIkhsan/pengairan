<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class PresenterController extends CI_Controller {

    const AKADEMIK_PAGES = array(
        // "informasi-pendaftaran" => 'general/akademik/informasi_pendaftaran',
        // "prodi"                 => 'general/akademik/prodi',
        "sarjana"               => 'general/akademik/prodi_sarjana',
        "magister"              => 'general/akademik/prodi_magister',
        "doktoral"              => 'general/akademik/prodi_doktoral'
        // "sop"                   => 'general/akademik/sop'
    );

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

    const PROFIL_PAGES = array(
        "visi-misi"                 => 'general/profil/vision_mission_purpose',
        "sejarah"                   => 'general/profil/history',
        "struktur-organisasi"       => 'general/profil/struktur_organisasi',
        "renstra-proker"            => 'general/profil/renstra',
        "dosen"                     => 'general/profil/dosen',
        "staff-kependidikan"        => 'general/profil/staff_kependidikan',
        "kerjasama"                 => 'general/profil/kerjasama',
        "akreditasi-sertifikasi"    => 'general/profil/akreditasi_sertifikasi',
        "prestasi-penghargaan"      => 'general/profil/prestasi_penghargaan',
        "brosur"                    => 'general/profil/brosur'
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

    function showProfil($page){
        if('dosen'==$page){         
            $data['record'] = $this->model_app->view_ordering('dosen','id_dosen','ASC');
        }else if('staff-kependidikan'==$page){            
            $data['record'] = $this->model_app->select_all('staff_pendidik');            
        }else{        
            $data['record'] ="";
        }

        $dataHeader['menu'] = $this->model_menu->getPrimaryMenu();
        $this->load->view('global_css');
        $this->load->view('header_mobile', $dataHeader);
        $this->load->view('header', $dataHeader);
        $this->load->view(PresenterController::PROFIL_PAGES[$page], $data);
		$this->load->view('footer');
		$this->load->view('global_js');
    }

    function showDetailDosen($id){
        $data['record'] = $this->model_app->select_where('dosen', 'dosen.id_dosen',$id);
        $dataHeader['menu'] = $this->model_menu->getPrimaryMenu();
        $this->load->view('global_css');
        $this->load->view('header_mobile',$dataHeader);
        $this->load->view('header',$dataHeader);
		$this->load->view('general/profil/dosen_detail', $data);
		$this->load->view('footer');
		$this->load->view('global_js');
    }

    function showDetailStaff($id){
        $data['record'] = $this->model_app->select_where('staff_pendidik', 'id',$id);
        $dataHeader['menu'] = $this->model_menu->getPrimaryMenu();
        $this->load->view('global_css');
        $this->load->view('header_mobile',$dataHeader);
        $this->load->view('header',$dataHeader);
		$this->load->view('general/profil/staff_detail',$data);
		$this->load->view('footer');
		$this->load->view('global_js');
    }

    // Prodi
    function showProdi($page){
        $dataHeader['menu'] = $this->model_menu->getPrimaryMenu();
        $this->load->view('global_css');
        $this->load->view('header_mobile', $dataHeader);
        $this->load->view('header', $dataHeader);
        $this->load->view(PresenterController::AKADEMIK_PAGES[$page]);
		$this->load->view('footer');
        $this->load->view('global_js');
    }

    // Akademik
    function showAkademik($page){
        $dataHeader['menu'] = $this->model_menu->getPrimaryMenu();
        $this->load->view('global_css');
        $this->load->view('header_mobile');
        $this->load->view('header', $dataHeader);
        $this->load->view(PresenterController::AKADEMIK_PAGES[$page]);
		$this->load->view('footer');
		$this->load->view('global_js');
    }

    // Penelitian dan Pengabdian
    function showPenelitianPengabdian($page){
        $dataHeader['menu'] = $this->model_menu->getPrimaryMenu();
        $this->load->view('global_css');
        $this->load->view('header_mobile');
        $this->load->view('header', $dataHeader);
        $this->load->view(PresenterController::PENELITIAN_PENGABDIAN_PAGES[$page]);
		$this->load->view('footer');
		$this->load->view('global_js');
    }

    // Alumni
    function showTracerStudy(){
        $dataHeader['menu'] = $this->model_menu->getPrimaryMenu();
        $this->load->view('global_css');
        $this->load->view('header_mobile');
        $this->load->view('header', $dataHeader);
		$this->load->view('general/alumni/tracer_study');
		$this->load->view('footer');
		$this->load->view('global_js');
    }

    function showDataLulusan(){
        $dataHeader['menu'] = $this->model_menu->getPrimaryMenu();
        $this->load->view('global_css');
        $this->load->view('header_mobile');
        $this->load->view('header', $dataHeader);
		$this->load->view('general/alumni/data_lulusan');
		$this->load->view('footer');
		$this->load->view('global_js');
    }

    function showForumAlumni(){
        $dataHeader['menu'] = $this->model_menu->getPrimaryMenu();
        $this->load->view('global_css');
        $this->load->view('header_mobile');
        $this->load->view('header', $dataHeader);
		$this->load->view('general/alumni/forum_alumni');
		$this->load->view('footer');
		$this->load->view('global_js');
    }

    // Fasilitas
    function showFasilitas($page){
        $dataHeader['menu'] = $this->model_menu->getPrimaryMenu();
        $this->load->view('global_css');
        $this->load->view('header_mobile');
        $this->load->view('header', $dataHeader);
        $this->load->view(PresenterController::FASILITAS_PAGES[$page]);
		$this->load->view('footer');
		$this->load->view('global_js');
    }

    // Jaminan Mutu
    function showJaminanMutu($page){
        $dataHeader['menu'] = $this->model_menu->getPrimaryMenu();
        $this->load->view('global_css');
        $this->load->view('header_mobile');
        $this->load->view('header', $dataHeader);
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

    function showNewsByTag($tag){
        $data['news'] = $this->model_berita->getNewsByTag($tag);
        $data['tags'] = $this->model_berita->tag_berita()->result();
        $data['last_news'] = $this->model_berita->lastNews(3);
		$dataHeader['menu'] = $this->model_menu->getPrimaryMenu();
        $this->load->view('global_css');
        $this->load->view('header_mobile');
        $this->load->view('header', $dataHeader);
		$this->load->view('all_news', $data);
		$this->load->view('footer');
		$this->load->view('global_js');
    }

    // Dynamic Page
    function showDynamicPage($page){
        $temp = $this->model_halaman->getHalamanBySlug($page);
        $akun = $this->model_app->select_where('users','id',$temp['user_id']);
        $data['level'] = $akun[0]["level"];
        $data['page'] = $this->model_halaman->getHalamanBySlug($page);
        if($data['page'] == null){
            show_404();
        } else {
            $dataHeader['menu'] = $this->model_menu->getPrimaryMenu();
            $this->load->view('global_css');
            $this->load->view('header_mobile', $dataHeader);
            $this->load->view('header', $dataHeader);
            $this->load->view('general/page_general', $data);
            $this->load->view('footer');
            $this->load->view('global_js');
        }
    }
}
