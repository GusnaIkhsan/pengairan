<?php 
    echo "<div class='col-md-12'>
              <div class='box box-info'>
                <div class='box-header with-border'>
                  <h3 class='box-title'>Edit Data Dosen</h3>
                </div>
              <div class='box-body'>";
              $attributes = array('class'=>'form-horizontal','role'=>'form');
              echo form_open_multipart('administrator/edit_foto',$attributes); 
          echo "<div class='col-md-12'>
                  <table class='table table-condensed table-bordered'>
                  <tbody>
                    <input type='hidden' name='id' value='$record[id]'>
                    <input type='hidden' name='oldFile' value='$record[name_gmbr]'>
                    <tr><th width='120px' scope='row'>Nama</th>   <td><input type='text' class='form-control' name='nameFile' value='$record[name]' required></td></tr>";
                    echo "</td></tr>                   
                    <tr><th width='120px' scope='row'>Foto (MAX 5 MB)</th>          <td><input type='file' class='form-control' name='fileImg' accept=\"image/*\" required>";
                                                                   if ($record['name_gmbr']!=''){ echo " Gambar Saat ini : <a target='_BLANK' href='".base_url()."asset/foto/$record[name_gmbr]'>$record[name_gmbr]</a>"; } echo "</td></tr>                     
                  </tbody>
                  </table>
                </div>
              
              <div class='box-footer'>
                    <button type='submit' name='submit' class='btn btn-info pull-right'>Update</button>
                    <a href='".base_url('Administrator/foto')."'><button type='button' class='btn btn-default'>Cancel</button></a>
                    
                  </div>
            </div></div></div>";
            echo form_close();