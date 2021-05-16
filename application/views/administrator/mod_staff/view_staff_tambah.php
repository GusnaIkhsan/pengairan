<?php 
    echo "<div class='col-md-12'>
              <div class='box box-info'>
                <div class='box-header with-border'>
                  <h3 class='box-title'>Tambah Data Staff</h3>
                </div>
              <div class='box-body'>";
              $attributes = array('class'=>'form-horizontal','role'=>'form');
              echo form_open_multipart('admin/StaffController/tambah_staff',$attributes); 
          echo "<div class='col-md-12'>
                  <table class='table table-condensed table-bordered'>
                  <tbody>
                    <input type='hidden' name='id' value=''>
                    <tr><th width='120px' scope='row'>Nama Staff <span style=\"color: red;\">*</span></th>   <td><input type='text' class='form-control' name='name' required></td></tr>";                                                                           
                    echo "</td></tr>
                    <tr><th width='120px' scope='row'>NIP / NIK <span style=\"color: red;\">*</span></th>   <td><input type='text' class='form-control' name='nipnik' required></td></tr>
                    <tr><th width='120px' scope='row'>Bidang Pelayanan <span style=\"color: red;\">*</span></th>   <td><input type='text' class='form-control' name='pelayanan' required></td></tr>
                    <tr><th width='120px' scope='row'>Tupoksi <span style=\"color: red;\">*</span></th>   <td><input type='text' class='form-control' name='tupoksi' required></td></tr>
                    <tr><th scope='row'>Workshop/Pelatihan</th>                 <td><textarea id='editor1' class='ckeditor form-control' name='pelatihan'></textarea></td></tr>
                    <tr><th scope='row'>Penghargaan & Paten</th>                 <td><textarea id='editor1' class='ckeditor form-control' name='penghargaan'></textarea></td></tr>                    
                    <tr><th scope='row'>Aktivitas Penunjang</th>                 <td><textarea id='editor1' class='ckeditor form-control' name='penunjang'></textarea></td></tr>                    
                    <tr><th scope='row'>Foto</th>                    <td><input type='file' class='form-control' name='foto' accept=\"image/*\"></td></tr>
                    <tr><th scope='row'>Urutan <span style=\"color: red;\">*</span></th> <td><input type='number' min=1 class='form-control' name='urutan' style='width:70px' required></td></tr>
                  </tbody>
                  </table>
                </div>
              
              <div class='box-footer'>
                    <button type='submit' name='submit' class='btn btn-info pull-right'>Tambahkan</button>
                    <a href='".base_url('staff')."'><button type='button' class='btn btn-default'>Batal</button></a>
                    
                  </div>
            </div></div></div>";
            echo form_close();
