<?php 
    echo "<div class='col-md-12'>
              <div class='box box-info'>
                <div class='box-header with-border'>
                  <h3 class='box-title'>Edit Data Dosen</h3>
                </div>
              <div class='box-body'>";
              $attributes = array('class'=>'form-horizontal','role'=>'form');
              echo form_open_multipart('edit-staff/'.$rows['id'],$attributes); 
          echo "<div class='col-md-12'>
                  <table class='table table-condensed table-bordered'>
                  <tbody>
                    <input type='hidden' name='id' value='$rows[id]'>
                    <tr><th width='120px' scope='row'>Nama Staff</th>   <td><input type='text' class='form-control' name='name' value='$rows[name]'></td></tr>";                                                                       
                    echo "</td></tr>
                    <tr><th width='120px' scope='row'>NIP / NIK</th>   <td><input type='text' class='form-control' name='nipnik' value='$rows[nipnik]'></td></tr>
                    <tr><th width='120px' scope='row'>Bidang Pelayanan</th>   <td><input type='text' class='form-control' name='pelayanan' value='$rows[pelayanan]'></td></tr>
                    <tr><th width='120px' scope='row'>Tupoksi</th>   <td><input type='text' class='form-control' name='tupoksi' value='$rows[tupoksi]'></td></tr>
                    <tr><th scope='row'>Workshop/Pelatihan</th>                 <td><textarea id='editor1' class='ckeditor form-control' name='pelatihan'>$rows[pelatihan]</textarea></td></tr>
                    <tr><th scope='row'>Penghargaan & Paten</th>                 <td><textarea id='editor1' class='ckeditor form-control' name='penghargaan'>$rows[penghargaan]</textarea></td></tr>                    
                    <tr><th scope='row'>Aktivitas Penunjang</th>                 <td><textarea id='editor1' class='ckeditor form-control' name='penunjang'>$rows[penunjang]</textarea></td></tr>                    
                    <tr><th scope='row'>Ganti Foto</th>          <td><input type='file' class='form-control' name='foto'>";
                                                                   if ($rows['foto']!=''){ 
                                                                      echo " Gambar Saat ini : <a target='_BLANK' href='".base_url()."asset/foto_staff/$rows[foto]'>$rows[foto]</a>"; 
                                                                    } echo "</td></tr>
                  </tbody>
                  </table>
                </div>
              
              <div class='box-footer'>
                    <button type='submit' name='submit' class='btn btn-info'>Update</button>
                    <a href='".base_url('staff')."'><button type='button' class='btn btn-default pull-right'>Cancel</button></a>
                    
                  </div>
            </div></div></div>";
            echo form_close();