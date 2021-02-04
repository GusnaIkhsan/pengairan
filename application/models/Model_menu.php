<?php 
class Model_menu extends CI_model{
	function top_menu(){
		return $this->db->query("SELECT * FROM menu where position='Top' ORDER BY urutan ASC");
	}

    function menugroup(){
        return $this->db->query("SELECT * FROM group_menu ORDER BY id_group_menu DESC");
    }

    function menugroup_edit($id){
        return $this->db->query("SELECT * FROM group_menu where id_group_menu='$id'");
    }

    function menugroup_update(){
        $datadb = array('nama_group_menu'=>$this->db->escape_str($this->input->post('a')));
        $this->db->where('id_group_menu',$this->input->post('id'));
        $this->db->update('group_menu',$datadb);
    }

    function menugrouplist(){
        return $this->db->query("SELECT * FROM group_menu_list a JOIN group_menu b ON a.id_group_menu=b.id_group_menu ORDER BY a.id_group_menu DESC");
    }

    function menugrouplist_tambah(){
        $datadb = array('id_group_menu'=>$this->db->escape_str($this->input->post('a')),
                        'nama'=>$this->db->escape_str($this->input->post('b')),
                        'link'=>$this->db->escape_str($this->input->post('c')));
        $this->db->insert('group_menu_list',$datadb);
    }

    function menugrouplist_edit($id){
        return $this->db->query("SELECT * FROM group_menu_list where id_group_menu_list='$id'");
    }

    function menugrouplist_update(){
        $datadb = array('id_group_menu'=>$this->db->escape_str($this->input->post('a')),
                        'nama'=>$this->db->escape_str($this->input->post('b')),
                        'link'=>$this->db->escape_str($this->input->post('c')));
        $this->db->where('id_group_menu_list',$this->input->post('id'));
        $this->db->update('group_menu_list',$datadb);
    }

    function menugrouplist_delete($id){
        return $this->db->query("DELETE FROM group_menu_list where id_group_menu_list='$id'");
    }

    function bottom_menu(){
        return $this->db->query("SELECT * FROM menu where id_parent='0' AND position = 'Bottom' AND aktif='Ya' ORDER BY urutan ASC");
    }

    function dropdown_menu($id){
        return $this->db->query("SELECT * FROM menu WHERE id_parent='$id' AND aktif='Ya' ORDER BY urutan ASC");
    }

    function menu_website(){
		return $this->db->query("SELECT * FROM menu ORDER BY urutan");
	}

    function menu_utama(){
        return $this->db->query("SELECT * FROM menu where id_parent='0' ORDER BY urutan");
    }

    function menu_cek($id){
        return $this->db->query("SELECT * FROM menu where id_menu='$id'");
    }

    function menu_website_tambah(){
            $datadb = array('id_parent'=>$this->db->escape_str($this->input->post('b')),
                            'nama_menu'=>$this->db->escape_str($this->input->post('c')),
                            'link'=>$this->db->escape_str($this->input->post('a')),
                            'aktif'=>$this->db->escape_str('Ya'),
                            'position'=>"Top",
                            'urutan'=>$this->db->escape_str($this->input->post('e')));
        $this->db->insert('menu',$datadb);
    }

    function menu_website_update(){
            $datadb = array('id_parent'=>$this->db->escape_str($this->input->post('b')),
                            'nama_menu'=>$this->db->escape_str($this->input->post('c')),
                            'link'=>$this->db->escape_str($this->input->post('a')),
                            'aktif'=>$this->db->escape_str($this->input->post('f')),
                            'urutan'=>$this->db->escape_str($this->input->post('e')));
        $this->db->where('id_menu',$this->input->post('id'));
        $this->db->update('menu',$datadb);
    }

    function menu_edit($id){
        return $this->db->query("SELECT * FROM menu where id_menu='$id'");
    }

    function menu_delete($id){
        return $this->db->query("DELETE FROM menu where id_menu='$id'");
    }

    function getPrimaryMenu(){
        return $this->getSubmenu(0);
    }

    function getSubmenu($id_parent){
        $submenu = $this->db->query("SELECT * FROM menu where id_parent = " . $id_parent . " ORDER BY urutan")->result_array();
        if(count($submenu)){
            $newArray = array();
            foreach ($submenu as $menu){
                if($menu['link'] == 0){
                    $halamanMenu = "#";
                } else {
                    $tempHalaman = $this->db->query("SELECT * FROM halaman where id=" . $menu['link'])->row_array();
                    if($tempHalaman['type'] == 0){
                        $halamanMenu = "page/detail/" . $tempHalaman["judul_seo"];
                    } else {
                        $halamanMenu = $tempHalaman["judul_seo"];
                    }
                }

                $tempMenu = array(
                    'child' => $this->getSubmenu($menu['id_menu']),
                    'link'  => base_url().$halamanMenu
                );
                array_push($newArray, array_merge($menu, $tempMenu));
            }
            return $newArray;
        } else {
            return array();
        }
    }

    function getLevelMenu(){
        $resultArray = array();
        $menu = $this->db->query("SELECT * FROM menu where id_parent = 0 ORDER BY urutan")->result_array();
        foreach ($menu as $iterMenu){
            array_push($resultArray, $iterMenu);
            $subMenu = $this->db->query("SELECT * FROM menu where id_parent = " . $iterMenu["id_menu"] . " ORDER BY urutan")->result_array();
            foreach ($subMenu as $iterSubMenu){
                $iterSubMenu["nama_menu"] = $iterMenu["nama_menu"] . "/" . $iterSubMenu["nama_menu"];
                array_push($resultArray, $iterSubMenu);
            }
        }
        return $resultArray;
    }

    function getLevelName($id_menu, $depth = 0){
        $menu = $this->db->query("SELECT * FROM menu where id_menu='$id_menu'")->row_array();
        if($menu){
            if($menu["id_parent"] == 0){
                if($depth == 0){
                    return "Menu Utama";
                } else {
                    return "";
                }
            } else {
                $parentMenu = $this->db->query("SELECT * FROM menu where id_menu=" . $menu['id_parent'])->row_array();
                if($parentMenu["id_parent"] == 0){
                    return $parentMenu["nama_menu"];
                } else {
                    return $this->getLevelName($parentMenu["id_menu"], $depth + 1) . "/" . $parentMenu["nama_menu"];
                }
            }
        } else {
            return "";
        }
    }

    function getDatatableMenu(){
        $newArray = array();
        $resultArray = $this->db->query("SELECT * FROM menu ORDER BY urutan")->result_array();
        foreach ($resultArray as $menu){
            if($menu['link'] == 0){
                $halamanMenu = "#";
            } else {
                $tempHalaman = $this->db->query("SELECT * FROM halaman where id=" . $menu['link'])->row_array();
                if($tempHalaman['type'] == 0){
                    $halamanMenu = "page/detail/" . $tempHalaman["judul_seo"];
                } else {
                    $halamanMenu = $tempHalaman["judul_seo"];
                }
            }
            
            $tempMenu = array(
                'shadow_level_name' => $this->getLevelName($menu["id_menu"]),
                'shadow_link_name'  => $halamanMenu
            );
            
            array_push($newArray, array_merge($menu, $tempMenu));
        }
        return $newArray;
    }

}