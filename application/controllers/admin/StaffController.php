<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StaffController extends CI_Controller {

    function staff_pendidik(){
        cek_session_admin();
        $data['record'] = $this->model_app->view_ordering('staff_pendidik','id','DESC');
        $this->template->load('administrator/template','administrator/mod_staff/view_staff',$data);
    }

    function tambah_staff(){
        cek_session_admin();
        if (isset($_POST['submit'])){
            $config['upload_path'] = 'asset/foto_staff/';
            $config['allowed_types'] = 'gif|jpg|png|JPG|JPEG';
            $config['max_size'] = '3000'; // kb
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('foto')){
                $hasil=$this->upload->data();
                $data = array(
                    'name'=>$this->input->post('name'),                           
                    'name_seo'=>seo_title($this->input->post('name')),
                    'nipnik'=>$this->input->post('nipnik'),
                    'pelayanan'=>$this->input->post('pelayanan'),
                    'tupoksi'=>$this->input->post('tupoksi'),
                    'pelatihan'=>$this->input->post('pelatihan'),
                    'penghargaan'=>$this->input->post('penghargaan'),                			
                    'penunjang'=>$this->input->post('penunjang'),
                    'uploader'=>$this->session->username,                 
                    'foto'=>$hasil['file_name']);
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
                    'uploader'=>$this->session->username,
                    'foto'=>'default.png');
                }
            $this->model_app->insert('staff_pendidik',$data);  
            redirect('staff');    
        }else{
            $data['record'] = $this->model_app->view_ordering('staff_pendidik','id','DESC');
            $this->template->load('administrator/template','administrator/mod_staff/view_staff_tambah',$data);
        }
    }

    function edit_staff($id){
        cek_session_admin();
        if (isset($_POST['submit'])){
            $config['upload_path'] = 'asset/foto_staff/';
            $config['allowed_types'] = 'gif|jpg|png|JPG|JPEG';
            $config['max_size'] = '3000'; // kb
            $this->load->library('upload', $config);
           
           if ($this->upload->do_upload('foto')){
                $hasil=$this->upload->data();
                $data = array('name'=>$this->input->post('name'),                           
                            'name_seo'=>seo_title($this->input->post('name')),
                            'nipnik'=>$this->input->post('nipnik'),
                            'pelayanan'=>$this->input->post('pelayanan'),
                            'tupoksi'=>$this->input->post('tupoksi'),
                            'pelatihan'=>$this->input->post('pelatihan'),
                            'penghargaan'=>$this->input->post('penghargaan'),                			
                            'penunjang'=>$this->input->post('penunjang'),
                            'uploader'=>$this->session->username,                       
                            'foto'=>$hasil['file_name']);
                if("default.png"!=$this->input->post('oldFile')){
                    unlink('asset/foto_staff/'.$this->input->post('oldFile'));
                }
            }else{
                $data = array('name'=>$this->input->post('name'),                           
                            'name_seo'=>seo_title($this->input->post('name')),
                            'nipnik'=>$this->input->post('nipnik'),
                            'pelayanan'=>$this->input->post('pelayanan'),
                            'tupoksi'=>$this->input->post('tupoksi'),
                            'pelatihan'=>$this->input->post('pelatihan'),
                            'penghargaan'=>$this->input->post('penghargaan'),                			
                            'penunjang'=>$this->input->post('penunjang'),
                            'uploader'=>$this->session->username);              
            }
            $where = array('id' => $this->input->post('id'));
            $this->model_app->update('staff_pendidik', $data, $where);
            redirect('staff');  
        }else{
            $proses = $this->model_app->edit('staff_pendidik', array('id' => $id))->row_array();       
            $data['rows'] = $proses;
            $this->template->load('administrator/template','administrator/mod_staff/view_staff_edit',$data);
        }
    }

    function delete_staff($id){   
        cek_session_admin();    
        $data = $this->model_app->select_where("staff_pendidik","id",$id);
        if("default.png"!=$data[0]['foto']){
            unlink('asset/foto_staff/'.$data[0]['foto']);
        }
        $this->model_app->delete('staff_pendidik',array('id' => $id));
        redirect('staff');        
    }

}