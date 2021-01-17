<?php 
class Model_halaman extends CI_model{
    function page_detail($id){
        return $this->db->query("SELECT * FROM halamanstatis where id_halaman='".$this->db->escape_str($id)."' OR judul_seo='".$this->db->escape_str($id)."'");
    }

    function page_dibaca_update($id){
        return $this->db->query("UPDATE halamanstatis SET dibaca=dibaca+1 where id_halaman='".$this->db->escape_str($id)."' OR judul_seo='".$this->db->escape_str($id)."'");
    }

    function halamanstatis(){
        return $this->db->query("SELECT * FROM halamanstatis ORDER BY id_halaman DESC");
    }

    function halamanstatis_tambah(){
            $config['upload_path'] = 'asset/foto_statis/';
            $config['allowed_types'] = 'gif|jpg|png|JPG|JPEG';
            $config['max_size'] = '3000'; // kb
            $this->load->library('upload', $config);
            $this->upload->do_upload('c');
            $hasil=$this->upload->data();
            if ($hasil['file_name']==''){
                    $datadb = array('judul'         => $this->db->escape_str($this->input->post('a')),
                                    'judul_seo'     => seo_title($this->input->post('a')),
                                    'isi_halaman'   => $this->input->post('b'),
                                    'created_at'    => date('Y-m-d H:i:s'),
                                    'updated_at'    => date('Y-m-d H:i:s'),
                                    'user_id'       => 1 // TODO: Session Id
                                );
            }else{
                    $datadb = array('judul'         => $this->db->escape_str($this->input->post('a')),
                                    'judul_seo'     => seo_title($this->input->post('a')),
                                    'isi_halaman'   => $this->input->post('b'),
                                    'gambar'        => $hasil['file_name'],
                                    'created_at'    => date('Y-m-d H:i:s'),
                                    'updated_at'    => date('Y-m-d H:i:s'),
                                    'user_id'       => 1 // TODO: Session Id
                                );
            }
        $this->db->insert('halaman',$datadb);
    }

    function halamanstatis_edit($id){
        return $this->db->query("SELECT * FROM halaman where id='$id'");
    }

    function halamanstatis_update(){
        $config['upload_path'] = 'asset/foto_statis/';
        $config['allowed_types'] = 'gif|jpg|png|JPG|JPEG';
        $config['max_size'] = '3000'; // kb
        $this->load->library('upload', $config);
        $this->upload->do_upload('c');
        $hasil=$this->upload->data();

        if ($hasil['file_name']==''){
            $datadb = array('judul'         => $this->db->escape_str($this->input->post('a')),
                            'judul_seo'     => seo_title($this->input->post('a')),
                            'isi_halaman'   => $this->input->post('b'),
                            'updated_at'    => date('Y-m-d H:i:s'),
                            'user_id'       => 1 // TODO: Session Id
                        );
        }else{
            $datadb = array('judul'         => $this->db->escape_str($this->input->post('a')),
                            'judul_seo'     => seo_title($this->input->post('a')),
                            'isi_halaman'   => $this->input->post('b'),
                            'gambar'        => $hasil['file_name'],
                            'updated_at'    => date('Y-m-d H:i:s'),
                            'user_id'       => 1 // TODO: Session Id
                        );
        }
        $this->db->where('id',$this->input->post('id'));
        $this->db->update('halaman',$datadb);
    }

    function halamanstatis_delete($id){
        return $this->db->query("DELETE FROM halaman where id='$id'");
    }

    function getHalaman(){
        return $this->db->query("SELECT * FROM halaman ORDER BY id DESC");
    }
}