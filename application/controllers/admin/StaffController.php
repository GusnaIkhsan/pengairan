<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StaffController extends CI_Controller {

    function staff_pendidik(){
        $data['record'] = $this->model_app->view_ordering('staff_pendidik','id','DESC');
        $this->template->load('administrator/template','administrator/mod_staff/view_staff',$data);
    }

    function tambah_staff(){
        if (isset($_POST['submit'])){
            $config['allowed_types'] = 'gif|jpg|png|JPG|JPEG';
            $config['max_size'] = 3000; // kb
            $config['upload_path'] = 'asset/img_galeri/';
            $this->load->library('upload', $config);
            // $this->upload->do_upload('foto');
            // $hasil=$this->upload->data();
            // if ($hasil['file_name']==''){
            if ($this->upload->do_upload('foto')){
                // $data = array(
                //             // 'username'=>$this->session->username,
                //             'username'=>"admin",
                //             'nm_dosen'=>$this->input->post('name'),
                //             'dosen_seo'=>seo_title($this->input->post('name')),
                //             'nipnik'=>$this->input->post('nipnik'),
                //             'pelayanan'=>$this->input->post('pelayanan'),
                //             'workshop'=>$this->input->post('workshop'),
                //             'penghargaan'=>$this->input->post('penghargaan'),                			
                // 			'hp'=>$this->input->post('hp'));
                $data = $_FILES['foto']['name'];
            }else{
                $data = array(
                    'name'=>$this->input->post('name'),                           
                    'name_seo'=>seo_title($this->input->post('name')),
                    'nipnik'=>$this->input->post('nipnik'),
                    'pelayanan'=>$this->input->post('pelayanan'),
                    'tupoksi'=>$this->input->post('tupoksi'),
                    'pelatihan'=>$this->input->post('pelatihan'),
                    'penghargaan'=>$this->input->post('penghargaan'),                			
                    'penunjang'=>$this->input->post('penunjang'),
                    'uploader'=>'admin',
                    // 'gbr_dosen'=>$hasil['file_name']);
                    // 'foto'=>$this->upload->data());
                    'foto'=>'default.png');
                }
            $this->model_app->insert('staff_pendidik',$data);  
            redirect('staff');    
            // print_r($data);
        }else{
            $data['record'] = $this->model_app->view_ordering('staff_pendidik','id','DESC');
            $this->template->load('administrator/template','administrator/mod_staff/view_staff_tambah',$data);
        }
    }

    function edit_staff($id){
        // $id = $this->uri->segment(3);
        if (isset($_POST['submit'])){
            $config['upload_path'] = 'asset/img_galeri/';
            $config['allowed_types'] = 'gif|jpg|png|JPG|JPEG';
            $config['max_size'] = '3000'; // kb
            $this->load->library('upload', $config);
            $this->upload->do_upload('d');
            $hasil=$this->upload->data();
            if ($hasil['file_name']==''){
                $data = array('name'=>$this->input->post('name'),                           
                            'name_seo'=>seo_title($this->input->post('name')),
                            'nipnik'=>$this->input->post('nipnik'),
                            'pelayanan'=>$this->input->post('pelayanan'),
                            'tupoksi'=>$this->input->post('tupoksi'),
                            'pelatihan'=>$this->input->post('pelatihan'),
                            'penghargaan'=>$this->input->post('penghargaan'),                			
                            'penunjang'=>$this->input->post('penunjang'),
                            'uploader'=>'admin',                       
                            'foto'=>'default.png');
            }else{
                $data = array('name'=>$this->input->post('name'),                           
                            'name_seo'=>seo_title($this->input->post('name')),
                            'nipnik'=>$this->input->post('nipnik'),
                            'pelayanan'=>$this->input->post('pelayanan'),
                            'tupoksi'=>$this->input->post('tupoksi'),
                            'pelatihan'=>$this->input->post('pelatihan'),
                            'penghargaan'=>$this->input->post('penghargaan'),                			
                            'penunjang'=>$this->input->post('penunjang'),
                            'uploader'=>'admin',                       
                            'foto'=>$hasil['file_name']);
                // $data = array('id_fakultas'=>$this->input->post('a'),
                //             'username'=>$this->session->username,
                //             'nm_dosen'=>$this->input->post('b'),
                //             'dosen_seo'=>seo_title($this->input->post('b')),
                //             'keterangan'=>$this->input->post('c'),
                //             'nidn'=>$this->input->post('d'),
                //             'hp'=>$this->input->post('e'),
                //             'gbr_dosen'=>$hasil['file_name']);
            }
            $where = array('id' => $this->input->post('id'));
            $this->model_app->update('staff_pendidik', $data, $where);
            redirect('staff');  
        }else{
            // $record = $this->model_app->view_ordering('fakultas','id_fakultas','DESC');
            // if ($this->session->level=='admin'){
            $proses = $this->model_app->edit('staff_pendidik', array('id' => $id))->row_array();       
            $data['rows'] = $proses;
            $this->template->load('administrator/template','administrator/mod_staff/view_staff_edit',$data);
        }
    }

    function delete_staff($id){       
        $this->model_app->delete('staff_pendidik',array('id' => $id));
        redirect('staff');        
    }

}