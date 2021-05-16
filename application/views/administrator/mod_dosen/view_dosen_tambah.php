<?php 
    echo "<div class='col-md-12'>
              <div class='box box-info'>
                <div class='box-header with-border'>
                  <h3 class='box-title'>Tambah Data Dosen</h3>
                </div>
              <div class='box-body'>";
              $attributes = array('class'=>'form-horizontal','role'=>'form');
              echo form_open_multipart('admin/DosenController/tambah_dosen',$attributes); 
          echo "<div class='col-md-12'>
                  <table class='table table-condensed table-bordered'>
                  <tbody>                  
                    <tr><th width='120px' scope='row'>Nama Dosen <span style=\"color: red;\">*</span></th>   <td><input type='text' class='form-control' name='name' required></td></tr>
                    <tr><th scope='row'>Golongan & Pangkat <span style=\"color: red;\">*</span></th>   <td><input type='text' class='form-control' name='golpang' required></td></tr>";
                    
                    echo "</td></tr>
                    <tr><th width='120px' scope='row'>NIP/NIK <span style=\"color: red;\">*</span></th>   <td><input type='text' class='form-control' name='nipnik' required></td></tr>
                    <tr><th scope='row'>NIDN <span style=\"color: red;\">*</span></th>   <td><input type='text' class='form-control' name='nidn' required></td></tr>
                    <tr><th scope='row'>Bidang Ilmu <span style=\"color: red;\">*</span></th>   <td><input type='text' class='form-control' name='bidang' required></td></tr>
                    <tr><th scope='row'>Email <span style=\"color: red;\">*</span></th>   <td><input type='email' class='form-control' name='email' required></td></tr>
                    <tr><th scope='row'>Blog Dosen</th>   <td><input type='text' class='form-control' name='blog'></td></tr>
                    <tr><th scope='row'>Foto</th>                    <td><input type='file' class='form-control' name='d' accept=\"image/*\"></td></tr>
                    <tr><th scope='row'>Background Pendidikan <span style=\"color: red;\">*</span></th>                 <td><textarea id='editor1' class='ckeditor form-control' name='pendidikan' required></textarea></td></tr>
                    <tr><th scope='row'>Penghargaan</th>                 <td><textarea id='editor1' class='ckeditor form-control' name='penghargaan'></textarea></td></tr>
                    <tr><th scope='row'>Penelitian</th>                 <td><textarea id='editor1' class='ckeditor form-control' name='penelitian'></textarea></td></tr>
                    <tr><th scope='row'>Publikasi</th>                 <td><textarea id='editor1' class='ckeditor form-control' name='publikasi'></textarea></td></tr>
                    <tr><th scope='row'>Link Publikasi</th>                 <td><textarea id='editor1' class='ckeditor form-control' name='linkpub'></textarea></td></tr>
                    <tr><th scope='row'>Buku</th>                 <td><textarea id='editor1' class='ckeditor form-control' name='buku'></textarea></td></tr>
                    <tr><th scope='row'>Pengabdian</th>                 <td><textarea id='editor1' class='ckeditor form-control' name='pengabdian'></textarea></td></tr>                    
                  </tbody>
                  </table>
                </div>
              
              <div class='box-footer'>
                    <button type='submit' name='submit' class='btn btn-info pull-right'>Tambahkan</button>
                    <a href='".base_url('dosen')."'><button type='button' class='btn btn-default'>Batal</button></a>
                    
                  </div>
            </div></div></div>";
            echo form_close();
