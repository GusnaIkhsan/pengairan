<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Administrator extends CI_Controller {

	function index(){
		if (isset($_POST['submit'])){
			$username = $this->input->post('a');
            // $password = md5($this->input->post('b'));
            $password  = hash("sha512", md5($this->input->post('b')));
			$cek = $this->db->query("SELECT * FROM users where username='".$this->db->escape_str($username)."' AND password='".$this->db->escape_str($password)."' AND blokir='N'");
		    $row = $cek->row_array();
		    $total = $cek->num_rows();
			if ($total > 0){
				$this->session->set_userdata('upload_image_file_manager',true);
				$this->session->set_userdata(array('username'=>$row['username'],
                                        'level'=>$row['level'],
                                        'foto'=>$row['foto'],
                                        'id'=>$row['id']));   
                redirect('administrator/home');  
			}else{                
				$data['title'] = 'Administrator &rsaquo; Log In';
                $this->load->view('administrator/view_login',$data);
			}
		}else{           
            if($this->session->username){
                redirect('administrator/home'); 
            }else{
                $data['title'] = 'Administrator &rsaquo; Log In';
                $this->load->view('administrator/view_login',$data);
            } 
		}
    }

	function home(){
		cek_session_admin();
        $data = $this->model_app->select_where("general_setting","id","1");
        $record['idgenset'] = $data[0]['id'];
        $record['valgenset'] = $data[0]['value'];
		$this->template->load('administrator/template','administrator/view_home',$record);
	}

	function identitaswebsite(){
		cek_session_admin();
		if (isset($_POST['submit'])){
			$this->model_main->identitas_update();
			redirect('administrator/identitaswebsite');
		}else{
			$data['record'] = $this->model_main->identitas()->row_array();
			$this->template->load('administrator/template','administrator/mod_identitas/view_identitas',$data);
		}
	}

	// Controller Modul Menu Website

	function menuwebsite(){
        cek_session_admin();
        $data['record'] = $this->model_menu->getDatatableMenu();
        $this->template->load('administrator/template','administrator/mod_menu/view_menu',$data);
	}

	function tambah_menuwebsite(){
		cek_session_admin();
		if (isset($_POST['submit'])){
			$this->model_menu->menu_website_tambah();
			redirect('administrator/menuwebsite');
		}else{
            $data['record'] = $this->model_menu->getLevelMenu();
            $data['list_halaman'] = $this->model_halaman->getHalaman()->result_array();
            $this->template->load('administrator/template','administrator/mod_menu/view_menu_tambah',$data);
            $this->load->view('specificJS/manajemen_menu_js');
		}
	}

	function edit_menuwebsite(){
		cek_session_admin();
		$id = $this->uri->segment(3);
		if (isset($_POST['submit'])){
			$this->model_menu->menu_website_update();
			redirect('administrator/menuwebsite');
		}else{
            $data['record'] = $this->model_menu->getLevelMenu();
            $data['list_halaman'] = $this->model_halaman->getHalaman()->result_array();
			$data['rows'] = $this->model_menu->menu_edit($id)->row_array();
            $this->template->load('administrator/template','administrator/mod_menu/view_menu_edit',$data);
            $this->load->view('specificJS/manajemen_menu_js');
		}
	}

	function delete_menuwebsite(){
		$id = $this->uri->segment(3);
		$this->model_menu->menu_delete($id);
		redirect('administrator/menuwebsite');
	}


	// Controller Modul Halaman Baru

	function halamanbaru(){
		cek_session_admin();
        $data['record'] = $this->model_halaman->getHalaman();
		$this->template->load('administrator/template','administrator/mod_halaman/view_halaman',$data);
	}

	function tambah_halamanbaru(){
		cek_session_admin();
		if (isset($_POST['submit'])){
			$this->model_halaman->halamanstatis_tambah();
			redirect('administrator/halamanbaru');
		}else{
            $data['foto'] = $this->model_app->select_all('foto');
            $data['file'] = $this->model_app->select_all('file');
            $this->template->load('administrator/template','administrator/mod_halaman/view_halaman_tambah',$data);
            $this->load->view('specificJS/manajemen_halaman_js');
		}
	}

	function edit_halamanbaru(){
		cek_session_admin();
		$id = $this->uri->segment(3);
		if (isset($_POST['submit'])){
			$this->model_halaman->halamanstatis_update();
			redirect('administrator/halamanbaru');
		}else{
			$data['rows'] = $this->model_halaman->halamanstatis_edit($id)->row_array();
            $data['foto'] = $this->model_app->select_all('foto');
            $data['file'] = $this->model_app->select_all('file');
            $this->template->load('administrator/template','administrator/mod_halaman/view_halaman_edit',$data);
            $this->load->view('specificJS/manajemen_halaman_js');
		}
	}

	function delete_halamanbaru(){
		$id = $this->uri->segment(3);
        $data = $this->model_app->select_where("halaman","id",$id);
        if("default_halaman.jpg"!=$data[0]['gambar']){
            unlink('asset/foto_statis/'.$data[0]['gambar']);
        }
		$this->model_halaman->halamanstatis_delete($id);
		redirect('administrator/halamanbaru');
	}

	// Controller Modul List Berita

	function listberita(){
		cek_session_admin();
		$data['record'] = $this->model_berita->list_berita();
		$this->template->load('administrator/template','administrator/mod_berita/view_berita',$data);
	}

	function tambah_listberita(){
		cek_session_admin();
		if (isset($_POST['submit'])){
			$this->model_berita->list_berita_tambah();
			redirect('administrator/listberita');
		}else{
			$data['tag'] = $this->model_berita->tag_berita();
            $data['record'] = $this->model_berita->kategori_berita();
            $data['prodi'] = $this->model_berita->get_prodi();
            $data['foto'] = $this->model_app->view_ordering('foto','id','desc');
            $data['file'] = $this->model_app->view_ordering('file','id','desc');
			$this->template->load('administrator/template','administrator/mod_berita/view_berita_tambah',$data);
		}
	}

	function cepat_listberita(){
		cek_session_admin();
		if ($_POST['a']!="" && $_POST['b']!=""){
			$this->model_berita->list_berita_cepat();
			redirect('administrator/listberita');            
		}else{
			redirect('administrator/home');
		}
	}

	function edit_listberita(){
		cek_session_admin();
		$id = $this->uri->segment(3);
		if (isset($_POST['submit'])){
			$this->model_berita->list_berita_update();
			redirect('administrator/listberita');
		}else{
			$data['tag'] = $this->model_berita->tag_berita();
			$data['record'] = $this->model_berita->kategori_berita();
            $data['rows'] = $this->model_berita->list_berita_edit($id)->row_array();
            $data['prodi'] = $this->model_berita->get_prodi();
            $data['foto'] = $this->model_app->view_ordering('foto','id','desc');
            $data['file'] = $this->model_app->view_ordering('file','id','desc');
			$this->template->load('administrator/template','administrator/mod_berita/view_berita_edit',$data);
		}
	}

	function delete_listberita(){
		$id = $this->uri->segment(3);
        $data = $this->model_app->select_where("berita","id_berita",$id["id_berita"]);
        if("default_berita.jpg"!=$data[0]['gambar']){
            unlink('asset/foto_berita/'.$data[0]['gambar']);
        }
        $this->model_berita->list_berita_delete($id);
		redirect('administrator/listberita');
	}

    // Pengumuman
    function pengumuman(){
        cek_session_admin();
		$data['record'] = $this->model_berita->list_pengumuman();
		$this->template->load('administrator/template','administrator/mod_pengumuman/view_pengumuman',$data);
    }

    function tambah_pengumuman(){
        cek_session_admin();
		if (isset($_POST['submit'])){
			$this->model_berita->pengumuman_tambah();
			redirect('administrator/pengumuman');
		}else{
			$data['tag'] = $this->model_berita->tag_berita();
            $data['prodi'] = $this->model_berita->get_prodi();
            $data['foto'] = $this->model_app->view_ordering('foto','id','desc');
            $data['file'] = $this->model_app->view_ordering('file','id','desc');
			$this->template->load('administrator/template','administrator/mod_pengumuman/view_pengumuman_tambah',$data);
		}
    }

    function edit_pengumuman(){
		cek_session_admin();
		$id = $this->uri->segment(3);
		if (isset($_POST['submit'])){
			$this->model_berita->pengumuman_update();
			redirect('administrator/pengumuman');
		}else{
			$data['tag'] = $this->model_berita->tag_berita();			
            $data['rows'] = $this->model_berita->list_berita_edit($id)->row_array();
            $data['prodi'] = $this->model_berita->get_prodi();
            $data['foto'] = $this->model_app->view_ordering('foto','id','desc');
            $data['file'] = $this->model_app->view_ordering('file','id','desc');
			$this->template->load('administrator/template','administrator/mod_pengumuman/view_pengumuman_edit',$data);
		}
	}

    function delete_pengumuman(){
		$id = $this->uri->segment(3);
        $data = $this->model_app->select_where("berita","id_berita",$id["id_berita"]);
        if("default_berita.jpg"!=$data[0]['gambar']){
            unlink('asset/foto_berita/'.$data[0]['gambar']);
        }
        $this->model_berita->list_berita_delete($id);
		redirect('administrator/pengumuman');
	}


	// Controller Modul Kategori Berita

	function kategoriberita(){
		cek_session_admin();
		$data['record'] = $this->model_berita->kategori_berita();
		$this->template->load('administrator/template','administrator/mod_kategori/view_kategori',$data);
	}

	function tambah_kategoriberita(){
		cek_session_admin();
		if (isset($_POST['submit'])){
			$this->model_berita->kategori_berita_tambah();
			redirect('administrator/kategoriberita');
		}else{
			$this->template->load('administrator/template','administrator/mod_kategori/view_kategori_tambah');
		}
	}

	function edit_kategoriberita(){
		cek_session_admin();
		$id = $this->uri->segment(3);
		if (isset($_POST['submit'])){
			$this->model_berita->kategori_berita_update();
			redirect('administrator/kategoriberita');
		}else{
			$data['rows'] = $this->model_berita->kategori_berita_edit($id)->row_array();
			$this->template->load('administrator/template','administrator/mod_kategori/view_kategori_edit',$data);
		}
	}

	function delete_kategoriberita(){
		$id = $this->uri->segment(3);
		$this->model_berita->kategori_berita_delete($id);
		redirect('administrator/kategoriberita');
	}



		// Controller Modul Menu Group

	function menugroup(){
		cek_session_admin();
		$data['record'] = $this->model_menu->menugroup();
		$this->template->load('administrator/template','administrator/mod_menugroup/view_menugroup',$data);
	}

	function edit_menugroup(){
		cek_session_admin();
		$id = $this->uri->segment(3);
		if (isset($_POST['submit'])){
			$this->model_menu->menugroup_update();
			redirect('administrator/menugroup');
		}else{
			$data['rows'] = $this->model_menu->menugroup_edit($id)->row_array();
			$this->template->load('administrator/template','administrator/mod_menugroup/view_menugroup_edit',$data);
		}
	}



	// Controller Modul List Berita

	function menugrouplist(){
		cek_session_admin();
		$data['record'] = $this->model_menu->menugrouplist();
		$this->template->load('administrator/template','administrator/mod_menugroup_list/view_menugroup_list',$data);
	}

	function tambah_menugrouplist(){
		cek_session_admin();
		if (isset($_POST['submit'])){
			$this->model_menu->menugrouplist_tambah();
			redirect('administrator/menugrouplist');
		}else{
			$data['record'] = $this->model_menu->menugroup();
			$this->template->load('administrator/template','administrator/mod_menugroup_list/view_menugroup_list_tambah',$data);
		}
	}

	function edit_menugrouplist(){
		cek_session_admin();
		$id = $this->uri->segment(3);
		if (isset($_POST['submit'])){
			$this->model_menu->menugrouplist_update();
			redirect('administrator/menugrouplist');
		}else{
			$data['record'] = $this->model_menu->menugroup();
			$data['rows'] = $this->model_menu->menugrouplist_edit($id)->row_array();
			$this->template->load('administrator/template','administrator/mod_menugroup_list/view_menugroup_list_edit',$data);
		}
	}

	function delete_menugrouplist(){
		$id = $this->uri->segment(3);
		$this->model_menu->menugrouplist_delete($id);
		redirect('administrator/menugrouplist');
	}




	// Controller Modul Tag Berita

	function tagberita(){
		cek_session_admin();
		$data['record'] = $this->model_berita->tag_berita();
		$this->template->load('administrator/template','administrator/mod_tag/view_tag',$data);
	}

	function tambah_tagberita(){
		cek_session_admin();
		if (isset($_POST['submit'])){
			$this->model_berita->tag_berita_tambah();
			redirect('administrator/tagberita');
		}else{
			$this->template->load('administrator/template','administrator/mod_tag/view_tag_tambah');
		}
	}

	function edit_tagberita(){
		cek_session_admin();
		$id = $this->uri->segment(3);
		if (isset($_POST['submit'])){
			$this->model_berita->tag_berita_update();
			redirect('administrator/tagberita');
		}else{
			$data['rows'] = $this->model_berita->tag_berita_edit($id)->row_array();
			$this->template->load('administrator/template','administrator/mod_tag/view_tag_edit',$data);
		}
	}

	function delete_tagberita(){
		$id = $this->uri->segment(3);
		$this->model_berita->tag_berita_delete($id);
		redirect('administrator/tagberita');
	}



	// Controller Modul Iklan Home

	function iklanhome(){
		cek_session_admin();
		$data['record'] = $this->model_iklan->iklan_tengah();
		$this->template->load('administrator/template','administrator/mod_iklanhome/view_iklanhome',$data);
	}

	function tambah_iklanhome(){
		cek_session_admin();
		if (isset($_POST['submit'])){
			$this->model_iklan->iklan_tengah_tambah();
			redirect('administrator/iklanhome');
		}else{
			$this->template->load('administrator/template','administrator/mod_iklanhome/view_iklanhome_tambah');
		}
	}

	function edit_iklanhome(){
		cek_session_admin();
		$id = $this->uri->segment(3);
		if (isset($_POST['submit'])){
			$this->model_iklan->iklan_tengah_update();
			redirect('administrator/iklanhome');
		}else{
			$data['rows'] = $this->model_iklan->iklan_tengah_edit($id)->row_array();
			$this->template->load('administrator/template','administrator/mod_iklanhome/view_iklanhome_edit',$data);
		}
	}

	function delete_iklanhome(){
		$id = $this->uri->segment(3);
		$this->model_iklan->iklan_tengah_delete($id);
		redirect('administrator/iklanhome');
	}



		// Controller Modul Download

	function download(){
		cek_session_admin();
		$data['record'] = $this->model_download->download();
		$this->template->load('administrator/template','administrator/mod_download/view_download',$data);
	}

	function tambah_download(){
		cek_session_admin();
		if (isset($_POST['submit'])){
			$this->model_download->download_tambah();
			redirect('administrator/download');
		}else{
			$this->template->load('administrator/template','administrator/mod_download/view_download_tambah');
		}
	}

	function edit_download(){
		cek_session_admin();
		$id = $this->uri->segment(3);
		if (isset($_POST['submit'])){
			$this->model_download->download_update();
			redirect('administrator/download');
		}else{
			$data['rows'] = $this->model_download->download_edit($id)->row_array();
			$this->template->load('administrator/template','administrator/mod_download/view_download_edit',$data);
		}
	}

	function delete_download(){
		$id = $this->uri->segment(3);
		$this->model_download->download_delete($id);
		redirect('administrator/download');
	}




	// Controller Modul Lowker

	function lowker(){
		cek_session_admin();
		$data['record'] = $this->model_lowongan->lowker();
		$this->template->load('administrator/template','administrator/mod_lowker/view_lowker',$data);
	}

	function tambah_lowker(){
		cek_session_admin();
		if (isset($_POST['submit'])){
			$this->model_lowongan->lowker_tambah();
			redirect('administrator/lowker');
		}else{
			$this->template->load('administrator/template','administrator/mod_lowker/view_lowker_tambah');
		}
	}

	function edit_lowker(){
		cek_session_admin();
		$id = $this->uri->segment(3);
		if (isset($_POST['submit'])){
			$this->model_lowongan->lowker_update();
			redirect('administrator/lowker');
		}else{
			$data['rows'] = $this->model_lowongan->lowker_edit($id)->row_array();
			$this->template->load('administrator/template','administrator/mod_lowker/view_lowker_edit',$data);
		}
	}

	function delete_lowker(){
		$id = $this->uri->segment(3);
		$this->model_lowongan->lowker_delete($id);
		redirect('administrator/lowker');
	}



	// Controller Modul Iklan Sidebar

	function iklansidebar(){
		cek_session_admin();
		$data['record'] = $this->model_iklan->iklan_sidebar();
		$this->template->load('administrator/template','administrator/mod_iklansidebar/view_iklansidebar',$data);
	}

	function tambah_iklansidebar(){
		cek_session_admin();
		if (isset($_POST['submit'])){
			$this->model_iklan->iklan_sidebar_tambah();
			redirect('administrator/iklansidebar');
		}else{
			$this->template->load('administrator/template','administrator/mod_iklansidebar/view_iklansidebar_tambah');
		}
	}

	function edit_iklansidebar(){
		cek_session_admin();
		$id = $this->uri->segment(3);
		if (isset($_POST['submit'])){
			$this->model_iklan->iklan_sidebar_update();
			redirect('administrator/iklansidebar');
		}else{
			$data['rows'] = $this->model_iklan->iklan_sidebar_edit($id)->row_array();
			$this->template->load('administrator/template','administrator/mod_iklansidebar/view_iklansidebar_edit',$data);
		}
	}

	function delete_iklansidebar(){
		$id = $this->uri->segment(3);
		$this->model_iklan->iklan_sidebar_delete($id);
		redirect('administrator/iklansidebar');
	}



	// Controller Modul Logo

	function logowebsite(){
		cek_session_admin();
		if (isset($_POST['submit'])){
			$this->model_main->logo_update();
			redirect('administrator/logowebsite');
		}else{
			$data['record'] = $this->model_main->logo();
			$this->template->load('administrator/template','administrator/mod_logowebsite/view_logowebsite',$data);
		}
	}



	// Controller Modul Template Website

	function templatewebsite(){
		cek_session_admin();
		$data['record'] = $this->model_main->template();
		$this->template->load('administrator/template','administrator/mod_template/view_template',$data);
	}

	function tambah_templatewebsite(){
		cek_session_admin();
		if (isset($_POST['submit'])){
			$this->model_main->template_tambah();
			redirect('administrator/templatewebsite');
		}else{
			$this->template->load('administrator/template','administrator/mod_template/view_template_tambah');
		}
	}

	function edit_templatewebsite(){
		cek_session_admin();
		$id = $this->uri->segment(3);
		if (isset($_POST['submit'])){
			$this->model_main->template_update();
			redirect('administrator/templatewebsite');
		}else{
			$data['rows'] = $this->model_main->template_edit($id)->row_array();
			$this->template->load('administrator/template','administrator/mod_template/view_template_edit',$data);
		}
	}

	function delete_templatewebsite(){
		$id = $this->uri->segment(3);
		$this->model_main->template_delete($id);
		redirect('administrator/templatewebsite');
	}

	// Controller Modul Agenda

	function agenda(){
		cek_session_admin();
		$data['record'] = $this->model_agenda->agenda();
		$this->template->load('administrator/template','administrator/mod_agenda/view_agenda',$data);
	}

	function tambah_agenda(){
		cek_session_admin();
		if (isset($_POST['submit'])){
			$this->model_agenda->agenda_tambah();
			redirect('administrator/agenda');
		}else{
            $data['foto'] = $this->model_app->view_ordering('foto','id','desc');
            $data['file'] = $this->model_app->view_ordering('file','id','desc');
			$this->template->load('administrator/template','administrator/mod_agenda/view_agenda_tambah',$data);
		}
	}

	function edit_agenda(){
		cek_session_admin();
		$id = $this->uri->segment(3);
		if (isset($_POST['submit'])){
			$this->model_agenda->agenda_update();
			redirect('administrator/agenda');
		}else{
			$data['rows'] = $this->model_agenda->agenda_edit($id)->row_array();
            $data['foto'] = $this->model_app->view_ordering('foto','id','desc');
            $data['file'] = $this->model_app->view_ordering('file','id','desc');
			$this->template->load('administrator/template','administrator/mod_agenda/view_agenda_edit',$data);
		}
	}

	function delete_agenda(){
		$id = $this->uri->segment(3);
        $data = $this->model_app->select_where("agenda","id_agenda",$id);
        if("default_agenda.jpg"!=$data[0]['gambar']){
            unlink('asset/foto_agenda/'.$data[0]['gambar']);
        }
		$this->model_agenda->agenda_delete($id);
		redirect('administrator/agenda');
	}




	// Controller Modul YM

	function ym(){
		cek_session_admin();
		$data['record'] = $this->model_main->ym();
		$this->template->load('administrator/template','administrator/mod_ym/view_ym',$data);
	}

	function tambah_ym(){
		cek_session_admin();
		if (isset($_POST['submit'])){
			$this->model_main->ym_tambah();
			redirect('administrator/ym');
		}else{
			$this->template->load('administrator/template','administrator/mod_ym/view_ym_tambah');
		}
	}

	function edit_ym(){
		cek_session_admin();
		$id = $this->uri->segment(3);
		if (isset($_POST['submit'])){
			$this->model_main->ym_update();
			redirect('administrator/ym');
		}else{
			$data['rows'] = $this->model_main->ym_edit($id)->row_array();
			$this->template->load('administrator/template','administrator/mod_ym/view_ym_edit',$data);
		}
	}

	function delete_ym(){
		$id = $this->uri->segment(3);
		$this->model_main->ym_delete($id);
		redirect('administrator/ym');
	}




	// Controller Modul Pesan Masuk

	function pesanmasuk(){
		cek_session_admin();
		$data['record'] = $this->model_main->pesan_masuk();
		$this->template->load('administrator/template','administrator/mod_pesanmasuk/view_pesanmasuk',$data);
	}

	function detail_pesanmasuk(){
		cek_session_admin();
		$id = $this->uri->segment(3);
		$this->db->query("UPDATE hubungi SET dibaca='Y' where id_hubungi='$id'");
		if (isset($_POST['submit'])){
			$this->model_main->pesan_masuk_kirim();
			$data['rows'] = $this->model_main->pesan_masuk_view($id)->row_array();
			$this->template->load('administrator/template','administrator/mod_pesanmasuk/view_pesanmasuk_detail',$data);
		}else{
			$data['rows'] = $this->model_main->pesan_masuk_view($id)->row_array();
			$this->template->load('administrator/template','administrator/mod_pesanmasuk/view_pesanmasuk_detail',$data);
		}
	}




	// Controller Modul User

	function manajemenuser(){
		cek_session_admin();
        $level = $this->session->userdata('level');
        if("admin"==$level){
            $data['record'] = $this->model_users->users_edit($this->session->id);
            $data['level'] = $level;
        }else{
            $data['record'] = $this->model_users->users();
            $data['level'] = $level;
        }  
		$this->template->load('administrator/template','administrator/mod_users/view_users',$data);
	}

	function tambah_manajemenuser(){
		cek_session_admin();
		$id = $this->session->id;
		if (isset($_POST['submit'])){
			$this->model_users->users_tambah();
			redirect('administrator/manajemenuser');
		}else{
			$data['rows'] = $this->model_users->users_edit($id)->row_array();
			$this->template->load('administrator/template','administrator/mod_users/view_users_tambah',$data);
		}
	}

	function edit_manajemenuser(){
		cek_session_admin();
		$id = $this->uri->segment(3);
		if (isset($_POST['submit'])){
			$this->model_users->users_update();
			redirect('administrator/manajemenuser');
		}else{
			$data['rows'] = $this->model_users->users_edit($id)->row_array();
			$this->template->load('administrator/template','administrator/mod_users/view_users_edit',$data);
		}
	}

	function delete_manajemenuser(){
		$id = $this->uri->segment(3);
        $data = $this->model_app->select_where("users","id",$id);
        if("users.gif"!=$data[0]['foto']){
            unlink('asset/foto_user/'.$data[0]['foto']);
        }
		$this->model_users->users_delete($id);
		redirect('administrator/manajemenuser');
	}

	


	// Controller Modul Modul

	function manajemenmodul(){
		cek_session_admin();
		$data['record'] = $this->model_modul->modul();
		$this->template->load('administrator/template','administrator/mod_modul/view_modul',$data);
	}

	function tambah_manajemenmodul(){
		cek_session_admin();
		if (isset($_POST['submit'])){
			$this->model_modul->modul_tambah();
			redirect('administrator/manajemenmodul');
		}else{
			$this->template->load('administrator/template','administrator/mod_modul/view_modul_tambah');
		}
	}

	function edit_manajemenmodul(){
		cek_session_admin();
		$id = $this->uri->segment(3);
		if (isset($_POST['submit'])){
			$this->model_modul->modul_update();
			redirect('administrator/manajemenmodul');
		}else{
			$data['rows'] = $this->model_modul->modul_edit($id)->row_array();
			$this->template->load('administrator/template','administrator/mod_modul/view_modul_edit',$data);
		}
	}

	function delete_manajemenmodul(){
		$id = $this->uri->segment(3);
		$this->model_modul->modul_delete($id);
		redirect('administrator/manajemenmodul');
	}

	    // Controller Modul Album

    function album(){
        if ($this->session->level=='admin'){
            $data['record'] = $this->model_app->view_ordering('album','id_album','DESC');
        }else{
            $data['record'] = $this->model_app->view_where_ordering('album',array('username'=>$this->session->username),'id_album','DESC');
        }
        $this->template->load('administrator/template','administrator/mod_album/view_album',$data);
    }

    function tambah_album(){
        if (isset($_POST['submit'])){
            $config['upload_path'] = 'asset/img_album/';
            $config['allowed_types'] = 'gif|jpg|png|JPG|JPEG';
            $config['max_size'] = '3000'; // kb
            $this->load->library('upload', $config);
            $this->upload->do_upload('c');
            $hasil=$this->upload->data();
            if ($hasil['file_name']==''){
                $data = array('jdl_album'=>$this->input->post('a'),
                            'album_seo'=>seo_title($this->input->post('a')),
                            'keterangans'=>$this->input->post('b'),
                            'aktif'=>'Y',
                            'hits_album'=>'0',
                            'tgl_posting'=>date('Y-m-d'),
                            'jam'=>date('H:i:s'),
                            'hari'=>hari_ini(date('w')),
                            'username'=>$this->session->username);
            }else{
                $data = array('jdl_album'=>$this->input->post('a'),
                            'album_seo'=>seo_title($this->input->post('a')),
                            'keterangans'=>$this->input->post('b'),
                            'gbr_album'=>$hasil['file_name'],
                            'aktif'=>'Y',
                            'hits_album'=>'0',
                            'tgl_posting'=>date('Y-m-d'),
                            'jam'=>date('H:i:s'),
                            'hari'=>hari_ini(date('w')),
                            'username'=>$this->session->username);
            }

            $this->model_app->insert('album',$data);  
            redirect('administrator/album');
        }else{
            $this->template->load('administrator/template','administrator/mod_album/view_album_tambah');
        }
    }

    function edit_album(){
        $id = $this->uri->segment(3);
        if (isset($_POST['submit'])){
            $config['upload_path'] = 'asset/img_album/';
            $config['allowed_types'] = 'gif|jpg|png|JPG|JPEG';
            $config['max_size'] = '3000'; // kb
            $this->load->library('upload', $config);
            $this->upload->do_upload('c');
            $hasil=$this->upload->data();
            if ($hasil['file_name']==''){
                $data = array('jdl_album'=>$this->input->post('a'),
                            'album_seo'=>seo_title($this->input->post('a')),
                            'keterangans'=>$this->input->post('b'),
                            'aktif'=>$this->input->post('d'));
            }else{
                $data = array('jdl_album'=>$this->input->post('a'),
                            'album_seo'=>seo_title($this->input->post('a')),
                            'keterangans'=>$this->input->post('b'),
                            'gbr_album'=>$hasil['file_name'],
                            'aktif'=>$this->input->post('d'));
            }
            $where = array('id_album' => $this->input->post('id'));
            $this->model_app->update('album', $data, $where);
            redirect('administrator/album');
        }else{
            if ($this->session->level=='admin'){
                $proses = $this->model_app->edit('album', array('id_album' => $id))->row_array();
            }else{
                $proses = $this->model_app->edit('album', array('id_album' => $id, 'username' => $this->session->username))->row_array();
            }
            $data = array('rows' => $proses);
            $this->template->load('administrator/template','administrator/mod_album/view_album_edit',$data);
        }
    }

    function delete_album(){
        if ($this->session->level=='admin'){
            $id = array('id_album' => $this->uri->segment(3));
        }else{
            $id = array('id_album' => $this->uri->segment(3), 'username'=>$this->session->username);
        }
        $this->model_app->delete('album',$id);
        redirect('administrator/album');
    }

    // Controller Modul Fakultas

    function fakultas(){
        if ($this->session->level=='admin'){
            $data['record'] = $this->model_app->view_ordering('fakultas','id_fakultas','DESC');
        }else{
            $data['record'] = $this->model_app->view_where_ordering('fakultas',array('username'=>$this->session->username),'id_fakultas','DESC');
        }
        $this->template->load('administrator/template','administrator/mod_fakultas/view_fakultas',$data);
    }

    function tambah_fakultas(){
        if (isset($_POST['submit'])){
            $config['upload_path'] = 'asset/img_album/';
            $config['allowed_types'] = 'gif|jpg|png|JPG|JPEG';
            $config['max_size'] = '3000'; // kb
            $this->load->library('upload', $config);
            $this->upload->do_upload('c');
            $hasil=$this->upload->data();
            if ($hasil['file_name']==''){
                $data = array('nm_fakultas'=>$this->input->post('a'),
                            'fakultas_seo'=>seo_title($this->input->post('a')),
                            'keterangans'=>$this->input->post('b'),
                            'aktif'=>'Y',
                            'hits_fakultas'=>'0',
                            'tgl_posting'=>date('Y-m-d'),
                            'jam'=>date('H:i:s'),
                            'hari'=>hari_ini(date('w')),
                            'username'=>$this->session->username);
            }else{
                $data = array('nm_fakultas'=>$this->input->post('a'),
                            'fakultas_seo'=>seo_title($this->input->post('a')),
                            'keterangans'=>$this->input->post('b'),
                            'gbr_fakultas'=>$hasil['file_name'],
                            'aktif'=>'Y',
                            'hits_fakultas'=>'0',
                            'tgl_posting'=>date('Y-m-d'),
                            'jam'=>date('H:i:s'),
                            'hari'=>hari_ini(date('w')),
                            'username'=>$this->session->username);
            }

            $this->model_app->insert('fakultas',$data);  
            redirect('administrator/fakultas');
        }else{
            $this->template->load('administrator/template','administrator/mod_fakultas/view_fakultas_tambah');
        }
    }

    function edit_fakultas(){
        $id = $this->uri->segment(3);
        if (isset($_POST['submit'])){
            $config['upload_path'] = 'asset/img_album/';
            $config['allowed_types'] = 'gif|jpg|png|JPG|JPEG';
            $config['max_size'] = '3000'; // kb
            $this->load->library('upload', $config);
            $this->upload->do_upload('c');
            $hasil=$this->upload->data();
            if ($hasil['file_name']==''){
                $data = array('nm_fakultas'=>$this->input->post('a'),
                            'fakultas_seo'=>seo_title($this->input->post('a')),
                            'keterangans'=>$this->input->post('b'),
                            'aktif'=>$this->input->post('d'));
            }else{
                $data = array('nm_fakultas'=>$this->input->post('a'),
                            'fakultas_seo'=>seo_title($this->input->post('a')),
                            'keterangans'=>$this->input->post('b'),
                            'gbr_fakultas'=>$hasil['file_name'],
                            'aktif'=>$this->input->post('d'));
            }
            $where = array('id_fakultas' => $this->input->post('id'));
            $this->model_app->update('fakultas', $data, $where);
            redirect('administrator/fakultas');
        }else{
            if ($this->session->level=='admin'){
                $proses = $this->model_app->edit('fakultas', array('id_fakultas' => $id))->row_array();
            }else{
                $proses = $this->model_app->edit('fakultas', array('id_fakultas' => $id, 'username' => $this->session->username))->row_array();
            }
            $data = array('rows' => $proses);
            $this->template->load('administrator/template','administrator/mod_fakultas/view_fakultas_edit',$data);
        }
    }

    function delete_fakultas(){
        if ($this->session->level=='admin'){
            $id = array('id_fakultas' => $this->uri->segment(3));
        }else{
            $id = array('id_fakultas' => $this->uri->segment(3), 'username'=>$this->session->username);
        }
        $this->model_app->delete('fakultas',$id);
        redirect('administrator/fakultas');
    }


    // Controller Program Studi
    function prodi(){
        cek_session_admin();
        $data['record'] = $this->model_app->view_ordering('prodi','id_prodi','DESC');
        $this->template->load('administrator/template','administrator/mod_prodi/view_prodi',$data);
    }

    function tambah_prodi(){
        if (isset($_POST['submit'])){
            $config['upload_path'] = 'asset/img_album/';
            $config['allowed_types'] = 'gif|jpg|png|JPG|JPEG';
            $config['max_size'] = '3000'; // kb
            $this->load->library('upload', $config);
            $this->upload->do_upload('c');
            $hasil=$this->upload->data();
            if ($hasil['file_name']==''){
                $data = array('nm_prodi'=>$this->input->post('a'),
                            'prodi_seo'=>seo_title($this->input->post('a')),
                            'keterangans'=>$this->input->post('b'),
                            'aktif'=>'Y',
                            'hits_prodi'=>'0',
                            'tgl_posting'=>date('Y-m-d'),
                            'jam'=>date('H:i:s'),
                            'hari'=>hari_ini(date('w')),
                            'username'=>$this->session->username);
            }else{
                $data = array('nm_prodi'=>$this->input->post('a'),
                            'prodi_seo'=>seo_title($this->input->post('a')),
                            'keterangans'=>$this->input->post('b'),
                            'gbr_prodi'=>$hasil['file_name'],
                            'aktif'=>'Y',
                            'hits_prodi'=>'0',
                            'tgl_posting'=>date('Y-m-d'),
                            'jam'=>date('H:i:s'),
                            'hari'=>hari_ini(date('w')),
                            'username'=>$this->session->username);
            }

            $this->model_app->insert('prodi',$data);  
            redirect('administrator/prodi');
        }else{
            $this->template->load('administrator/template','administrator/mod_prodi/view_prodi_tambah');
        }
    }

    function edit_prodi(){
        $id = $this->uri->segment(3);
        if (isset($_POST['submit'])){            
                $data = array('nm_prodi'=>$this->input->post('a'),
                            'prodi_seo'=>seo_title($this->input->post('a')),
                            'keterangans'=>$this->input->post('b'),
                            'aktif'=>$this->input->post('d'));
            
            $where = array('id_prodi' => $this->input->post('id'));
            $this->model_app->update('prodi', $data, $where);
            redirect('administrator/prodi');
        }else{
            $proses = $this->model_app->edit('prodi', array('id_prodi' => $id))->row_array();
            $data = array('rows' => $proses);
            $this->template->load('administrator/template','administrator/mod_prodi/view_prodi_edit',$data);
        }
    }

    function delete_prodi(){  
        $id = array('id_prodi' => $this->uri->segment(3));
       
        $this->model_app->delete('prodi',$id);
        redirect('administrator/prodi');
    }

    // Controller Dosen
    function dosen(){
        cek_session_admin();
        $data['record'] = $this->model_app->view_join_one('dosen','fakultas','id_fakultas','id_dosen','DESC');
        $this->template->load('administrator/template','administrator/mod_dosen/view_dosen',$data);
    }

    function tambah_dosen(){
        if (isset($_POST['submit'])){
            $config['upload_path'] = 'asset/img_galeri/';
            $config['allowed_types'] = 'gif|jpg|png|JPG|JPEG';
            $config['max_size'] = '3000'; // kb
            $this->load->library('upload', $config);
            $this->upload->do_upload('d');
            $hasil=$this->upload->data();
            if ($hasil['file_name']==''){
                $data = array('id_fakultas'=>$this->input->post('a'),
                            // 'username'=>$this->session->username,
                            'username'=>"admin",
                            'nm_dosen'=>$this->input->post('b'),
                            'dosen_seo'=>seo_title($this->input->post('b')),
                            'keterangan'=>$this->input->post('c'),
                			'nidn'=>$this->input->post('d'),
                			'hp'=>$this->input->post('e'));
            }else{
                $data = array('id_fakultas'=>$this->input->post('a'),
                            // 'username'=>$this->session->username,
                            'username'=>"admin",
                            'nm_dosen'=>$this->input->post('b'),
                            'dosen_seo'=>seo_title($this->input->post('b')),
                            'keterangan'=>$this->input->post('c'),
                            'nidn'=>$this->input->post('d'),
                            'hp'=>$this->input->post('e'),
                            'gbr_dosen'=>$hasil['file_name']);
            }
            $this->model_app->insert('dosen',$data);  
            redirect('administrator/dosen');
        }else{
            $data['record'] = $this->model_app->view_ordering('fakultas','id_fakultas','DESC');
            $this->template->load('administrator/template','administrator/mod_dosen/view_dosen_tambah',$data);
        }
    }

    function edit_dosen(){
        $id = $this->uri->segment(3);
        if (isset($_POST['submit'])){
            $config['upload_path'] = 'asset/img_galeri/';
            $config['allowed_types'] = 'gif|jpg|png|JPG|JPEG';
            $config['max_size'] = '3000'; // kb
            $this->load->library('upload', $config);
            $this->upload->do_upload('d');
            $hasil=$this->upload->data();
            if ($hasil['file_name']==''){
                $data = array('id_fakultas'=>$this->input->post('a'),
                            'username'=>$this->session->username,
                            'nm_dosen'=>$this->input->post('b'),
                            'dosen_seo'=>seo_title($this->input->post('b')),
                            'keterangan'=>$this->input->post('c'),
                			'nidn'=>$this->input->post('d'),
                			'hp'=>$this->input->post('e'));
            }else{
                $data = array('id_fakultas'=>$this->input->post('a'),
                            'username'=>$this->session->username,
                            'nm_dosen'=>$this->input->post('b'),
                            'dosen_seo'=>seo_title($this->input->post('b')),
                            'keterangan'=>$this->input->post('c'),
                            'nidn'=>$this->input->post('d'),
                            'hp'=>$this->input->post('e'),
                            'gbr_dosen'=>$hasil['file_name']);
            }
            $where = array('id_dosen' => $this->input->post('id'));
            $this->model_app->update('dosen', $data, $where);
            redirect('administrator/dosen');
        }else{
            $record = $this->model_app->view_ordering('fakultas','id_fakultas','DESC');
            $proses = $this->model_app->edit('dosen', array('id_dosen' => $id))->row_array();
            $data = array('rows' => $proses,'record' => $record);
            $this->template->load('administrator/template','administrator/mod_dosen/view_dosen_edit',$data);
        }
    }

    function delete_dosen(){
        $id = array('id_dosen' => $this->uri->segment(3));
        $this->model_app->delete('dosen',$id);
        redirect('administrator/dosen');
    }


    // Controller Mahasiswa
    function mahasiswa(){
        if ($this->session->level=='admin'){
            $data['record'] = $this->model_app->view_join_one('mahasiswa','prodi','id_prodi','id_mahasiswa','DESC');
        }else{
            $data['record'] = $this->model_app->view_join_where('mahasiswa','prodi','id_prodi',array('mahasiswa.username'=>$this->session->username),'id_mahasiswa','DESC');
        }
        $this->template->load('administrator/template','administrator/mod_mahasiswa/view_mahasiswa',$data);
    }

    function tambah_mahasiswa(){
        if (isset($_POST['submit'])){
            $config['upload_path'] = 'asset/img_galeri/';
            $config['allowed_types'] = 'gif|jpg|png|JPG|JPEG';
            $config['max_size'] = '3000'; // kb
            $this->load->library('upload', $config);
            $this->upload->do_upload('d');
            $hasil=$this->upload->data();
            if ($hasil['file_name']==''){
                $data = array('id_prodi'=>$this->input->post('a'),
                            'username'=>$this->session->username,
                            'nm_mahasiswa'=>$this->input->post('b'),
                            'mahasiswa_seo'=>seo_title($this->input->post('b')),
                            'keterangan'=>$this->input->post('c'),
                            'npm'=>$this->input->post('d'),
                            'hp'=>$this->input->post('e'));
            }else{
                $data = array('id_prodi'=>$this->input->post('a'),
                            'username'=>$this->session->username,
                            'nm_mahasiswa'=>$this->input->post('b'),
                            'mahasiswa_seo'=>seo_title($this->input->post('b')),
                            'keterangan'=>$this->input->post('c'),
                            'npm'=>$this->input->post('d'),
                            'hp'=>$this->input->post('e'),
                            'gbr_mahasiswa'=>$hasil['file_name']);
            }
            $this->model_app->insert('mahasiswa',$data);  
            redirect('administrator/mahasiswa');
        }else{
            $data['record'] = $this->model_app->view_ordering('prodi','id_prodi','DESC');
            $this->template->load('administrator/template','administrator/mod_mahasiswa/view_mahasiswa_tambah',$data);
        }
    }

    function edit_mahasiswa(){
        $id = $this->uri->segment(3);
        if (isset($_POST['submit'])){
            $config['upload_path'] = 'asset/img_galeri/';
            $config['allowed_types'] = 'gif|jpg|png|JPG|JPEG';
            $config['max_size'] = '3000'; // kb
            $this->load->library('upload', $config);
            $this->upload->do_upload('d');
            $hasil=$this->upload->data();
            if ($hasil['file_name']==''){
                $data = array('id_prodi'=>$this->input->post('a'),
                            'username'=>$this->session->username,
                            'nm_mahasiswa'=>$this->input->post('b'),
                            'mahasiswa_seo'=>seo_title($this->input->post('b')),
                            'keterangan'=>$this->input->post('c'),
                            'npm'=>$this->input->post('d'),
                            'hp'=>$this->input->post('e'));
            }else{
                $data = array('id_prodi'=>$this->input->post('a'),
                            'username'=>$this->session->username,
                            'nm_mahasiswa'=>$this->input->post('b'),
                            'mahasiswa_seo'=>seo_title($this->input->post('b')),
                            'keterangan'=>$this->input->post('c'),
                            'npm'=>$this->input->post('d'),
                            'hp'=>$this->input->post('e'),
                            'gbr_mahasiswa'=>$hasil['file_name']);
            }
            $where = array('id_mahasiswa' => $this->input->post('id'));
            $this->model_app->update('mahasiswa', $data, $where);
            redirect('administrator/mahasiswa');
        }else{
            $record = $this->model_app->view_ordering('prodi','id_prodi','DESC');
            if ($this->session->level=='admin'){
                $proses = $this->model_app->edit('mahasiswa', array('id_mahasiswa' => $id))->row_array();
            }else{
                $proses = $this->model_app->edit('mahasiswa', array('id_mahasiswa' => $id, 'username' => $this->session->username))->row_array();
            }
            $data = array('rows' => $proses,'record' => $record);
            $this->template->load('administrator/template','administrator/mod_mahasiswa/view_mahasiswa_edit',$data);
        }
    }

    function delete_mahasiswa(){
        if ($this->session->level=='admin'){
            $id = array('id_mahasiswa' => $this->uri->segment(3));
        }else{
            $id = array('id_mahasiswa' => $this->uri->segment(3), 'username'=>$this->session->username);
        }
        $this->model_app->delete('mahasiswa',$id);
        redirect('administrator/mahasiswa');
    }


    // Controller Modul Gallery

    function gallery(){
        if ($this->session->level=='admin'){
            $data['record'] = $this->model_app->view_join_one('gallery','album','id_album','id_gallery','DESC');
        }else{
            $data['record'] = $this->model_app->view_join_where('gallery','album','id_album',array('gallery.username'=>$this->session->username),'id_gallery','DESC');
        }
        $this->template->load('administrator/template','administrator/mod_gallery/view_gallery',$data);
    }

    function tambah_gallery(){
        if (isset($_POST['submit'])){
            $config['upload_path'] = 'asset/img_galeri/';
            $config['allowed_types'] = 'gif|jpg|png|JPG|JPEG';
            $config['max_size'] = '3000'; // kb
            $this->load->library('upload', $config);
            $this->upload->do_upload('d');
            $hasil=$this->upload->data();
            if ($hasil['file_name']==''){
                $data = array('id_album'=>$this->input->post('a'),
                            'username'=>$this->session->username,
                            'jdl_gallery'=>$this->input->post('b'),
                            'gallery_seo'=>seo_title($this->input->post('b')),
                            'keterangan'=>$this->input->post('c'),
                			'npm'=>$this->input->post('d'));
            }else{
                $data = array('id_album'=>$this->input->post('a'),
                            'username'=>$this->session->username,
                            'jdl_gallery'=>$this->input->post('b'),
                            'gallery_seo'=>seo_title($this->input->post('b')),
                            'keterangan'=>$this->input->post('c'),
                            'npm'=>$this->input->post('d'),
                            'gbr_gallery'=>$hasil['file_name']);
            }
            $this->model_app->insert('gallery',$data);  
            redirect('administrator/gallery');
        }else{
            $data['record'] = $this->model_app->view_ordering('album','id_album','DESC');
            $this->template->load('administrator/template','administrator/mod_gallery/view_gallery_tambah',$data);
        }
    }

    function edit_gallery(){
        $id = $this->uri->segment(3);
        if (isset($_POST['submit'])){
            $config['upload_path'] = 'asset/img_galeri/';
            $config['allowed_types'] = 'gif|jpg|png|JPG|JPEG';
            $config['max_size'] = '3000'; // kb
            $this->load->library('upload', $config);
            $this->upload->do_upload('d');
            $hasil=$this->upload->data();
            if ($hasil['file_name']==''){
                $data = array('id_album'=>$this->input->post('a'),
                            'username'=>$this->session->username,
                            'jdl_gallery'=>$this->input->post('b'),
                            'gallery_seo'=>seo_title($this->input->post('b')),
                            'keterangan'=>$this->input->post('c'),
                			'npm'=>$this->input->post('d'));
            }else{
                $data = array('id_album'=>$this->input->post('a'),
                            'username'=>$this->session->username,
                            'jdl_gallery'=>$this->input->post('b'),
                            'gallery_seo'=>seo_title($this->input->post('b')),
                            'keterangan'=>$this->input->post('c'),
                            'npm'=>$this->input->post('d'),
                            'gbr_gallery'=>$hasil['file_name']);
            }
            $where = array('id_gallery' => $this->input->post('id'));
            $this->model_app->update('gallery', $data, $where);
            redirect('administrator/gallery');
        }else{
            $record = $this->model_app->view_ordering('album','id_album','DESC');
            if ($this->session->level=='admin'){
                $proses = $this->model_app->edit('gallery', array('id_gallery' => $id))->row_array();
            }else{
                $proses = $this->model_app->edit('gallery', array('id_gallery' => $id, 'username' => $this->session->username))->row_array();
            }
            $data = array('rows' => $proses,'record' => $record);
            $this->template->load('administrator/template','administrator/mod_gallery/view_gallery_edit',$data);
        }
    }

    function delete_gallery(){
        if ($this->session->level=='admin'){
            $id = array('id_gallery' => $this->uri->segment(3));
        }else{
            $id = array('id_gallery' => $this->uri->segment(3), 'username'=>$this->session->username);
        }
        $this->model_app->delete('gallery',$id);
        redirect('administrator/gallery');
    }


    // Controller Modul Video

    function video(){
        cek_session_admin();
        $data['record'] = $this->model_app->view_ordering('video','id_video','DESC');
        $this->template->load('administrator/template','administrator/mod_video/view_video',$data);
    }

    function tambah_video(){
        if (isset($_POST['submit'])){
            $config['upload_path'] = 'asset/img_video/';
            $config['allowed_types'] = 'gif|jpg|png|JPG|JPEG';
            $config['max_size'] = '3000'; // kb
            $this->load->library('upload', $config);
            $this->upload->do_upload('d');
            $hasil=$this->upload->data();

            if ($this->input->post('f')!=''){
                $tag_seo = $this->input->post('f');
                $tag=implode(',',$tag_seo);
            }else{
                $tag = '';
            }
            
            if ($hasil['file_name']==''){
                $data = array('id_playlist'=>0,
                            'username'=>$this->session->username,
                            'jdl_video'=>$this->input->post('b'),
                            'video_seo'=>seo_title($this->input->post('b')),
                            'keterangan'=>$this->input->post('c'),
                            'video'=>'',
                            'youtube'=>$this->input->post('e'),
                            'dilihat'=>'0',
                            'hari'=>hari_ini(date('w')),
                            'tanggal'=>date('Y-m-d'),
                            'jam'=>date('H:i:s'),
                            'tagvid'=>$tag,
                            'aktif'=>'Y');
            }else{
                $data = array('id_playlist'=>0,
                            'username'=>$this->session->username,
                            'jdl_video'=>$this->input->post('b'),
                            'video_seo'=>seo_title($this->input->post('b')),
                            'keterangan'=>$this->input->post('c'),
                            'gbr_video'=>$hasil['file_name'],
                            'video'=>'',
                            'youtube'=>$this->input->post('e'),
                            'dilihat'=>'0',
                            'hari'=>hari_ini(date('w')),
                            'tanggal'=>date('Y-m-d'),
                            'jam'=>date('H:i:s'),
                            'tagvid'=>$tag,
                            'aktif'=>'Y');
            }
            $this->model_app->insert('video',$data);  
            redirect('administrator/video');
        }else{
            $data['record'] = $this->model_app->view_ordering('playlist','id_playlist','DESC');
            $data['tag'] = $this->model_app->view_ordering('tagvid','id_tag','DESC');
            $this->template->load('administrator/template','administrator/mod_video/view_video_tambah',$data);
        }
    }

    function edit_video(){
        $id = $this->uri->segment(3);
        if (isset($_POST['submit'])){
                $data = array('id_playlist'=>0,
                            'username'=>$this->session->username,
                            'jdl_video'=>$this->input->post('b'),
                            'video_seo'=>seo_title($this->input->post('b')),
                            'keterangan'=>$this->input->post('c'),
                            'video'=>'',
                            'youtube'=>$this->input->post('e'),
                            'tagvid'=>"",
                            'aktif'=>$this->input->post('d'));
            
            $where = array('id_video' => $this->input->post('id'));
            $this->model_app->update('video', $data, $where);
            redirect('administrator/video');
        }else{
           
            $proses = $this->model_app->edit('video', array('id_video' => $id))->row_array();           
            
            $data = array('rows' => $proses);
            $this->template->load('administrator/template','administrator/mod_video/view_video_edit',$data);
        }
    }

    function delete_video(){        
        $id = array('id_video' => $this->uri->segment(3));      
        $this->model_app->delete('video',$id);
        redirect('administrator/video');
    }


    // Controller Modul Playlist

    function playlist(){
        $data['record'] = $this->model_app->view_ordering('playlist','id_playlist','DESC');
        $this->template->load('administrator/template','administrator/mod_playlist/view_playlist',$data);
    }

    function tambah_playlist(){
        if (isset($_POST['submit'])){
            $config['upload_path'] = 'asset/img_playlist/';
            $config['allowed_types'] = 'gif|jpg|png|JPG|JPEG';
            $config['max_size'] = '3000'; // kb
            $this->load->library('upload', $config);
            $this->upload->do_upload('b');
            $hasil=$this->upload->data();
            if ($hasil['file_name']==''){
                $data = array('jdl_playlist'=>$this->input->post('a'),
                            'username'=>$this->session->username,
                            'playlist_seo'=>seo_title($this->input->post('a')),
                            'aktif'=>'Y');
            }else{
                $data = array('jdl_playlist'=>$this->input->post('a'),
                            'username'=>$this->session->username,
                            'playlist_seo'=>seo_title($this->input->post('a')),
                            'gbr_playlist'=>$hasil['file_name'],
                            'aktif'=>'Y');
            }
            $this->model_app->insert('playlist',$data);  
            redirect('administrator/playlist');
        }else{
            $this->template->load('administrator/template','administrator/mod_playlist/view_playlist_tambah');
        }
    }

    function edit_playlist(){
        $id = $this->uri->segment(3);
        if (isset($_POST['submit'])){
            $config['upload_path'] = 'asset/img_playlist/';
            $config['allowed_types'] = 'gif|jpg|png|JPG|JPEG';
            $config['max_size'] = '3000'; // kb
            $this->load->library('upload', $config);
            $this->upload->do_upload('b');
            $hasil=$this->upload->data();
            if ($hasil['file_name']==''){
                $data = array('jdl_playlist'=>$this->input->post('a'),
                            'username'=>$this->session->username,
                            'playlist_seo'=>seo_title($this->input->post('a')),
                            'aktif'=>$this->input->post('c'));
            }else{
                $data = array('jdl_playlist'=>$this->input->post('a'),
                            'username'=>$this->session->username,
                            'playlist_seo'=>seo_title($this->input->post('a')),
                            'gbr_playlist'=>$hasil['file_name'],
                            'aktif'=>$this->input->post('c'));
            }
            $where = array('id_playlist' => $this->input->post('id'));
            $this->model_app->update('playlist', $data, $where);
            redirect('administrator/playlist');
        }else{
            $proses = $this->model_app->edit('playlist', array('id_playlist' => $id))->row_array();
            $data = array('rows' => $proses);
            $this->template->load('administrator/template','administrator/mod_playlist/view_playlist_edit',$data);
        }
    }

    function delete_playlist(){
        $id = array('id_playlist' => $this->uri->segment(3));
        $this->model_app->delete('playlist',$id);
        redirect('administrator/playlist');
    }


    // Controller Modul Tag Video

    function tagvideo(){
        if ($this->session->level=='admin'){
            $data['record'] = $this->model_app->view_ordering('tagvid','id_tag','DESC');
        }else{
            $data['record'] = $this->model_app->view_where_ordering('tagvid',array('username'=>$this->session->username),'id_tag','DESC');
        }
        $this->template->load('administrator/template','administrator/mod_tagvideo/view_tag',$data);
    }

    function tambah_tagvideo(){
        if (isset($_POST['submit'])){
            $data = array('nama_tag'=>$this->db->escape_str($this->input->post('a')),
                        'username'=>$this->session->username,
                        'tag_seo'=>seo_title($this->input->post('a')),
                        'count'=>'0');
            $this->model_app->insert('tagvid',$data);  
            redirect('administrator/tagvideo');
        }else{
            $this->template->load('administrator/template','administrator/mod_tagvideo/view_tag_tambah');
        }
    }

    function edit_tagvideo(){
        $id = $this->uri->segment(3);
        if (isset($_POST['submit'])){
            $data = array('nama_tag'=>$this->db->escape_str($this->input->post('a')),
                        'username'=>$this->session->username,
                        'tag_seo'=>seo_title($this->input->post('a')));
            $where = array('id_tag' => $this->input->post('id'));
            $this->model_app->update('tagvid', $data, $where);
            redirect('administrator/tagvideo');
        }else{
            if ($this->session->level=='admin'){
                $proses = $this->model_app->edit('tagvid', array('id_tag' => $id))->row_array();
            }else{
                $proses = $this->model_app->edit('tagvid', array('id_tag' => $id, 'username' => $this->session->username))->row_array();
            }
            
            $data = array('rows' => $proses);
            $this->template->load('administrator/template','administrator/mod_tagvideo/view_tag_edit',$data);
        }
    }

    function delete_tagvideo(){
        if ($this->session->level=='admin'){
            $id = array('id_tag' => $this->uri->segment(3));
        }else{
            $id = array('id_tag' => $this->uri->segment(3), 'username'=>$this->session->username);
        }
        $this->model_app->delete('tagvid',$id);
        redirect('administrator/tagvideo');
    }

    // Controller Modul Link Terkait

    function linkterkait(){
        $data['record'] = $this->model_app->view_ordering('link_terkait','id_link_terkait','DESC');
        $this->template->load('administrator/template','administrator/mod_linkterkait/view_linkterkait',$data);
    }

    function edit_linkterkait(){
        $id = $this->uri->segment(3);
        if (isset($_POST['submit'])){
            $data = array('judul_menu'=>$this->input->post('a'),
            			  'detail_menu'=>$this->input->post('b'),
            			  'link'=>$this->input->post('c'));
            $where = array('id_link_terkait' => $this->input->post('id'));
            $this->model_app->update('link_terkait', $data, $where);
            redirect('administrator/linkterkait');
        }else{
            $proses = $this->model_app->edit('link_terkait', array('id_link_terkait' => $id))->row_array();
            $data = array('rows' => $proses);
            $this->template->load('administrator/template','administrator/mod_linkterkait/view_linkterkait_edit',$data);
        }
    }

    function edit_info_grafis(){
        cek_session_admin();
        if (isset($_POST['submit'])){
            $data = array('mahasiswa'=>$this->input->post('mahasiswa'),
                        'program'=>$this->input->post('program'),
                        'tendik'=>$this->input->post('tendik'),
                        'alumni'=>$this->input->post('alumni'));

            $where = array('id' => 1);
            $this->model_app->update('info_grafis', $data, $where);
            redirect('administrator/edit_info_grafis');
        }else{
            $record = $this->model_app->view_ordering('info_grafis','id','ASC');                           
            $data = array('record' => $record);
            $this->template->load('administrator/template','administrator/mod_info_grafis/view_infografis_edit',$data);
        }
    }

    function foto(){
        cek_session_admin();
        $data['record'] = $this->model_app->view_ordering('foto','id','DESC');
        $this->template->load('administrator/template','administrator/mod_foto/view_foto',$data);
    }

    function cepat_foto(){
        if($this->input->post('nameFile')!="" && $this->input->post('fileName')!=""){
            $config['upload_path'] = 'asset/foto/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg|JPG|JPEG';
            $config['max_size'] = '5000'; // kb
            $this->load->library('upload', $config);
            $this->upload->do_upload('fileImg');
            
            if($this->upload->do_upload('fileImg')){            
                $hasil=$this->upload->data();
                $datadb= array('name'=>$this->input->post('nameFile'),
                                'name_gmbr'=>$hasil['file_name'],
                                'uploader'=>$this->session->username);
                $this->db->insert('foto',$datadb);
                redirect('administrator/foto');            
            }else{            
                redirect('administrator/home');
            }
        }else{
            redirect('administrator/home');
        }
    }

    function tambah_foto(){
        $config['upload_path'] = 'asset/foto/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|JPG|JPEG';
        $config['max_size'] = '5000'; // kb
        $this->load->library('upload', $config);
        
        if($this->upload->do_upload('fileImg')){            
            $hasil=$this->upload->data();
            $datadb= array('name'=>$this->input->post('nameFile'),
                            'name_gmbr'=>$hasil['file_name'],
                            'uploader'=>$this->session->username);
            $this->db->insert('foto',$datadb);
        }else{
            echo "Tidak berhasil disimpan";
        }
    }

    function edit_foto(){
        cek_session_admin();
        $id = $this->uri->segment(3);
        if (isset($_POST['submit'])){
            $config['upload_path'] = 'asset/foto/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg|JPG|JPEG';
            $config['max_size'] = '5000'; // kb
            $this->load->library('upload', $config);
            if($this->upload->do_upload('fileImg')){                            
                $hasil=$this->upload->data();
                $datadb= array('name'=>$this->input->post('nameFile'),
                                'name_gmbr'=>$hasil['file_name'],
                                'uploader'=>$this->session->username);
    
                unlink('asset/foto/'.$this->input->post('oldFile'));                
                $where = array('id' => $this->input->post('id'));
                $this->model_app->update('foto', $datadb, $where);
                redirect('administrator/foto');
            }else{
                $datadb= array('name'=>$this->input->post('nameFile'),                                
                                'uploader'=>$this->session->username);                      
                $where = array('id' => $this->input->post('id'));
                $this->model_app->update('foto', $datadb, $where);
                redirect('administrator/foto');
            }
        }else{
            $data['record'] = $this->model_app->edit('foto', array('id' => $id))->row_array();
            $this->template->load('administrator/template','administrator/mod_foto/view_foto_edit',$data);
        }
    }

    function delete_foto(){
        cek_session_admin();  
        $id = array('id' => $this->uri->segment(3));      
        $data = $this->model_app->select_where("foto","id",$id["id"]);
        unlink('asset/foto/'.$data[0]['name_gmbr']);
        $this->model_app->delete('foto',$id);
        redirect('administrator/foto');
    }

    function limit_headline(){
        cek_session_admin();
        if($this->input->post('nilai')!="" && $this->input->post('nilai')>0){
            $datadb= array('value'=>$this->input->post('nilai'));
            $where = array('id' => $this->input->post('id'));
            $this->model_app->update('general_setting', $datadb, $where);     
        }
        redirect('administrator/home');           
    }

    function file(){
        cek_session_admin();
        $data['record'] = $this->model_app->view_ordering('file','id','DESC');
        $this->template->load('administrator/template','administrator/mod_file/view_file',$data);
    }

    function tambah_file(){
        $config['upload_path'] = 'asset/files/';
        $config['allowed_types'] =  'gif|jpg|png|zip|rar|pdf|doc|docx|ppt|pptx|xls|xlsx|txt';
        $config['max_size'] = '15000'; // kb
        $this->load->library('upload', $config);        
        
        if($this->upload->do_upload('fileBerkas')){            
            $hasil=$this->upload->data();
            $datadb= array('name'=>$this->input->post('nameFile'),
                            'file_name'=>$hasil['file_name'],
                            'uploader'=>$this->session->username,
                            'created_at'=>date('Y-m-d h:i:s'));
            $this->db->insert('file',$datadb);
        }else{
            echo "Tidak berhasil disimpan";
        }
    }

    function edit_file(){
        cek_session_admin();
        $id = $this->uri->segment(3);
        if (isset($_POST['submit'])){
            $config['upload_path'] = 'asset/files/';
            $config['allowed_types'] =  'gif|jpg|png|zip|rar|pdf|doc|docx|ppt|pptx|xls|xlsx|txt';
            $config['max_size'] = '15000'; // kb
            $this->load->library('upload', $config);

            if($this->upload->do_upload('fileBerkas')){                            
                $hasil=$this->upload->data();
                $datadb= array('name'=>$this->input->post('nameFile'),
                                'file_name'=>$hasil['file_name'],
                                'uploader'=>$this->session->username,
                                'updated_at'=>date('Y-m-d h:i:s'));
    
                unlink('asset/files/'.$this->input->post('oldFile'));                
                $where = array('id' => $this->input->post('id'));        
            }else{
                $datadb= array('name'=>$this->input->post('nameFile'),                                
                                'uploader'=>$this->session->username,
                                'updated_at'=>date('Y-m-d h:i:s'));                      
                $where = array('id' => $this->input->post('id'));
            }
            $this->model_app->update('file', $datadb, $where);
            redirect('administrator/file');
        }else{
            $data['record'] = $this->model_app->edit('file', array('id' => $id))->row_array();
            $this->template->load('administrator/template','administrator/mod_file/view_file_edit',$data);
        }
    }

    function delete_file(){
        cek_session_admin();  
        $id = array('id' => $this->uri->segment(3));      
        $data = $this->model_app->select_where("file","id",$id["id"]);
        unlink('asset/files/'.$data[0]['file_name']);
        $this->model_app->delete('file',$id);
        redirect('administrator/file');
    }

	function logout(){        
        cek_session_admin();
        session_destroy();
		redirect(base_url('admin'));
	}
}
