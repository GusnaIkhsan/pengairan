<?php 
    echo "<div class='col-md-12'>
              <div class='box box-info'>
                <div class='box-header with-border'>
                  <h3 class='box-title'>Tambah Menu Website</h3>
                </div>
              <div class='box-body'>";
              $attributes = array('class'=>'form-horizontal','role'=>'form');
              echo form_open_multipart('administrator/tambah_menuwebsite',$attributes); 
          echo "<div class='col-md-12'>
                  <table class='table table-condensed table-bordered'>
                  <tbody>
                    <input type='hidden' name='id' value=''>
                    <tr><th scope='row'>Link Menu</th>                <td><select id='input_menu' name='a' class='form-control'>
                                                                            <option value='0' selected>Tidak Ada Halaman</option>";
                                                                            foreach ($list_halaman as $row){
                                                                              if($row['type'] == 0){
                                                                                echo "<option value='$row[id]'>$row[judul] - Dinamis - [page/detail/$row[judul_seo]]</option>";
                                                                              } else {
                                                                                echo "<option value='$row[id]'>$row[judul] - Statis - [$row[judul_seo]]</option>";
                                                                              }
                                                                            }
                    echo "</td></tr>
                    <tr><th scope='row'>Level Menu</th>                <td><select name='b' class='form-control'>
                                                                            <option value='0' selected>Menu Utama</option>";
                                                                            foreach ($record as $row){
                                                                                echo "<option value='$row[id_menu]'>$row[nama_menu]</option>";
                                                                            }
                    echo "</td></tr>
                    <tr><th scope='row'>Nama Menu</th>                 <td><input type='text' class='form-control' name='c'></td></tr>
                    <tr><th scope='row'>Urutan</th>                    <td><input type='number' class='form-control' name='e' style='width:70px'></td></tr>
                  </tbody>
                  </table>
                </div>
              </div>
              <div class='box-footer'>
                    <button type='submit' name='submit' class='btn btn-info'>Tambahkan</button>
                    <a href='".base_url()."administrator/menuwebsite'><button type='button' class='btn btn-default pull-right'>Cancel</button></a>
                    
                  </div>
            </div>";
