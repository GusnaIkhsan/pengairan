<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Mahasiswa extends CI_Controller {
	public function index(){
			$jumlah= $this->model_utama->view('prodi')->num_rows();
			$config['base_url'] = base_url().'mahasiswa/index/'.$this->uri->segment(3);
			$config['total_rows'] = $jumlah;
			$config['per_page'] = 12; 	
			if ($this->uri->segment('4')==''){
				$dari = 0;
			}else{
				$dari = $this->uri->segment('4');
			}
			$data['title'] = "prodi";
			$data['description'] = description();
			$data['keywords'] = keywords();
			if (is_numeric($dari)) {
				$data['prodi'] = $this->model_utama->view_where_ordering_limit('prodi',array('aktif' => 'Y'),'nm_prodi','DESC',$dari,$config['per_page']);
			}else{
				redirect('main');
			}
			$this->pagination->initialize($config);
			$this->template->load('phpmu-one/template','phpmu-one/mahasiswa',$data);
	}

	public function detail(){
		$query = $this->model_utama->view_where('prodi',array('prodi_seo' => $this->uri->segment(3)));
		if ($query->num_rows()<=0){
			redirect('main');
		}else{
			$row = $query->row_array();
			$jumlah= $this->model_utama->view_where('mahasiswa',array('id_prodi' => $row['id_prodi']))->num_rows();
			$config['base_url'] = base_url().'prodi/detail/'.$this->uri->segment(3);
			$config['total_rows'] = $jumlah;
			$config['per_page'] = 10000000000000;
			if ($this->uri->segment('4')==''){
				$dari = 0;
			}else{
				$dari = $this->uri->segment('4');
			}
			$data['title'] = "prodi $row[nm_prodi]";
			$data['description'] = description();
			$data['keywords'] = keywords();
			$data['rows'] = $row;
			if (is_numeric($dari)){
				$data['detailmahasiswa'] = $this->model_utama->view_join_two('mahasiswa','users','prodi','username','id_prodi',array('mahasiswa.id_prodi' => $row['id_prodi']),'nm_mahasiswa','ASC',$dari,$config['per_page']);
			}else{
				redirect('main');
			}
			$this->pagination->initialize($config);

			$dataa = array('hits_prodi' =>$row['hits_prodi']+1);
			$where = array('id_prodi' => $row['id_prodi']);
			$this->model_utama->update('prodi', $dataa, $where);
			$this->template->load('phpmu-one/template','phpmu-one/detailmahasiswa',$data);
		}
	}
}
