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
                    <tr><th width='120px' scope='row'>Nama Dosen</th>   <td><input type='text' class='form-control' name='name'></td></tr>
                    <tr><th scope='row'>Golongan & Pangkat</th>   <td><input type='text' class='form-control' name='golpang'></td></tr>";
                    
                    echo "</td></tr>
                    <tr><th width='120px' scope='row'>NIP/NIK</th>   <td><input type='text' class='form-control' name='nipnik'></td></tr>
                    <tr><th scope='row'>NIDN</th>   <td><input type='text' class='form-control' name='nidn'></td></tr>
                    <tr><th scope='row'>Bidang Ilmu</th>   <td><input type='text' class='form-control' name='bidang'></td></tr>
                    <tr><th scope='row'>Blog Dosen</th>   <td><input type='text' class='form-control' name='blog'></td></tr>
                    <tr><th scope='row'>Foto</th>                    <td><input type='file' class='form-control' name='d'></td></tr>
                    <tr><th scope='row'>Background Pendidikan</th>                 <td><textarea id='editor1' class='ckeditor form-control' name='pendidikan'></textarea></td></tr>
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
                    <button type='submit' name='submit' class='btn btn-info'>Tambahkan</button>
                    <a href='index.php'><button type='button' class='btn btn-default pull-right'>Cancel</button></a>
                    
                  </div>
            </div></div></div>";
            echo form_close();
