<?php 
    echo "<div class='col-md-12'>
              <div class='box box-info'>
                <div class='box-header with-border'>
                  <h3 class='box-title'>Tambah Halaman Baru</h3>
                </div>
              <div class='box-body'>";
              $attributes = array('class'=>'form-horizontal','role'=>'form');
              echo form_open_multipart('administrator/tambah_halamanbaru',$attributes); 
          echo "<div class='col-md-12'>
                  <table class='table table-condensed table-bordered'>
                  <tbody>
                    <input type='hidden' name='id' value=''>
                    <tr><th width='120px' scope='row'>Judul</th>   <td><input type='text' class='form-control' name='a' id='input-name'></td></tr>
                    <tr><th width='120px' scope='row'>Tipe Halaman</th>   <td><input type='radio' name='tipe' value='0' id='radio-dinamis' checked> Dinamis (Dapat diubah melalui Menu Halaman oleh Administrator) &nbsp; <input type='radio' name='tipe' id='radio-statis' value='1'> Statis (HANYA dapat diubah oleh programmer)</td></tr>
                    <tr>
                      <th width='120px' scope='row'>Nama Link</th>
                      <td>
                        <div class='row'>
                          <div class='col-md-1' id='prefix-link'>
                            page/detail/
                          </div>
                          <div class='col-md-9'>
                            <input type='text' class='form-control' name='slug' id='input-slug'>
                          </div>
                          <div class='col-md-2'>
                            <button type='button' id='btn-slug' class='btn btn-success'>Generate Link</button>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr id='content-halaman'><th scope='row'>Isi Halaman</th>             <td><textarea id='editor1' class='ckeditor form-control' name='b' style='height:260px' required></textarea></td></tr>
                    <tr><th scope='row'>Gambar</th>                    <td><input type='file' class='form-control' name='c'></td></tr>
                  </tbody>
                  </table>
                </div>
              </div>
              <div class='box-footer'>
                    <button type='submit' name='submit' class='btn btn-info'>Tambahkan</button>
                    <a href='".base_url()."administrator/halamanbaru'><button type='button' class='btn btn-default pull-right'>Cancel</button></a>
                    
                  </div>
            </div>";
