<?php 
    echo "<div class='col-md-12'>
              <div class='box box-info'>
                <div class='box-header with-border'>
                  <h3 class='box-title'>Tambah Kategori Berita</h3>
                </div>
              <div class='box-body'>";
              $attributes = array('class'=>'form-horizontal','role'=>'form');
              echo form_open_multipart('administrator/tambah_kategoriberita',$attributes); 
          echo "<div class='col-md-12'>
                  <table class='table table-condensed table-bordered'>
                  <tbody>
                    <input type='hidden' name='id' value=''>
                    <tr><th width='120px' scope='row'>Nama Kategori <span style=\"color: red;\">*</span></th>    <td><input type='text' class='form-control' name='a' required></td></tr>
                    <tr><th scope='row'>Aktif</th>                          <td><input type='radio' name='b' value='Y' checked> Ya &nbsp; <input type='radio' name='b' value='N'> Tidak</td></tr>
                    <tr><th scope='row'>Posisi <span style=\"color: red;\">*</span></th>                         <td><input type='text' class='form-control' name='c' required></td></tr>
                  </tbody>
                  </table>
                </div>
              </div>
              <div class='box-footer'>
                    <button onclick=\"spinnerClick()\" type='submit' name='submit' class='btn btn-info pull-right'>Tambahkan</button>
                    <a href='".base_url('administrator/kategoriberita')."'><button type='button' class='btn btn-default'>Batal</button></a>
                    
                  </div>
            </div>";
