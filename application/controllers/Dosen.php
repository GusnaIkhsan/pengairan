<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Dosen extends CI_Controller {
	public function index(){
			$jumlah= $this->model_utama->view('fakultas')->num_rows();
			$config['base_url'] = base_url().'dosen/index/'.$this->uri->segment(3);
			$config['total_rows'] = $jumlah;
			$config['per_page'] = 12; 	
			if ($this->uri->segment('4')==''){
				$dari = 0;
			}else{
				$dari = $this->uri->segment('4');
			}
			$data['title'] = "Fakultas";
			$data['description'] = description();
			$data['keywords'] = keywords();
			if (is_numeric($dari)) {
				$data['fakultas'] = $this->model_utama->view_where_ordering_limit('fakultas',array('aktif' => 'Y'),'nm_fakultas','DESC',$dari,$config['per_page']);
			}else{
				redirect('main');
			}
			$this->pagination->initialize($config);
			$this->template->load('phpmu-one/template','phpmu-one/dosen',$data);
	}

	public function detail(){
		$query = $this->model_utama->view_where('fakultas',array('fakultas_seo' => $this->uri->segment(3)));
		if ($query->num_rows()<=0){
			redirect('main');
		}else{
			$row = $query->row_array();
			$jumlah= $this->model_utama->view_where('dosen',array('id_fakultas' => $row['id_fakultas']))->num_rows();
			$config['base_url'] = base_url().'fakultas/detail/'.$this->uri->segment(3);
			$config['total_rows'] = $jumlah;
			$config['per_page'] = 10000000000000;
			if ($this->uri->segment('4')==''){
				$dari = 0;
			}else{
				$dari = $this->uri->segment('4');
			}
			$data['title'] = "Fakultas $row[nm_fakultas]";
			$data['description'] = description();
			$data['keywords'] = keywords();
			$data['rows'] = $row;
			if (is_numeric($dari)){
				$data['detaildosen'] = $this->model_utama->view_join_two('dosen','users','fakultas','username','id_fakultas',array('dosen.id_fakultas' => $row['id_fakultas']),'nm_dosen','ASC',$dari,$config['per_page']);
			}else{
				redirect('main');
			}
			$this->pagination->initialize($config);

			$dataa = array('hits_fakultas' =>$row['hits_fakultas']+1);
			$where = array('id_fakultas' => $row['id_fakultas']);
			$this->model_utama->update('fakultas', $dataa, $where);
			$this->template->load('phpmu-one/template','phpmu-one/detaildosen',$data);
		}
	}
}
