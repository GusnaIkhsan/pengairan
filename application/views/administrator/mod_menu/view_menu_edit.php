<?php 
    echo "<div class='col-md-12'>
              <div class='box box-info'>
                <div class='box-header with-border'>
                  <h3 class='box-title'>Edit Menu Website</h3>
                </div>
              <div class='box-body'>";
              $attributes = array('class'=>'form-horizontal','role'=>'form');
              echo form_open_multipart('administrator/edit_menuwebsite',$attributes); 
          echo "<div class='col-md-12'>
                  <table class='table table-condensed table-bordered'>
                  <tbody>
                    <input type='hidden' name='id' value='$rows[id_menu]'>
                    <input type='hidden' name='id_halaman' id='id_halaman' value='$rows[link]'>
                    <tr><th scope='row'>Link Menu</th>                <td><select name='a' class='form-control'>
                                                                            <option value='0'>Tidak Ada Halaman</option>";
                                                                            foreach ($list_halaman as $row){
                                                                              if($row['type'] == 0){
                                                                                echo "<option value='$row[id]'>$row[judul] - Dinamis - [page/detail/$row[judul_seo]]</option>";
                                                                              } else {
                                                                                echo "<option value='$row[id]'>$row[judul] - Statis - [$row[judul_seo]]</option>";
                                                                              }
                                                                            }
                    echo "</td></tr>
                    <tr><th scope='row'>Level Menu</th>                <td><select name='b' class='form-control'>
                                                                                <option value='0'>Menu Utama</option>";
                                                                            foreach ($record as $row){
                                                                              if ($row['id_menu']==$rows['id_parent']){
                                                                                echo "<option value='$row[id_menu]' selected>$row[nama_menu] </option>";
                                                                              }else{
                                                                                echo "<option value='$row[id_menu]'>$row[nama_menu]</option>";
                                                                              }
                                                                            }
                    echo "</select></td></tr>
                    <tr><th scope='row'>Nama Menu</th>                 <td><input type='text' class='form-control' name='c' value='$rows[nama_menu]' required></td></tr>
                    <tr><th scope='row'>Urutan</th>                    <td><input type='number' class='form-control' name='e' style='width:70px' value='$rows[urutan]' required></td></tr>
                    <tr><th scope='row'>Aktif</th>                  <td>"; if ($rows['aktif'] == 'Ya'){
                                                                                echo "<input type='radio' name='f' value='Ya' checked> Ya 
                                                                                      <input type='radio' name='f' value='Tidak'> Tidak";
                                                                              }else{
                                                                                echo "<input type='radio' name='f' value='Ya'> Ya 
                                                                                      <input type='radio' name='f' value='Tidak' checked> Tidak";
                                                                              }
                    echo "</td></tr>
                  </tbody>
                  </table>
                </div>
              </div>
              <div class='box-footer'>
                    <button type='submit' name='submit' class='btn btn-info pull-right'>Simpan</button>
                    <a href='".base_url()."administrator/menuwebsite'><button type='button' class='btn btn-default'>Batal</button></a>
                    
                  </div>
            </div>";
