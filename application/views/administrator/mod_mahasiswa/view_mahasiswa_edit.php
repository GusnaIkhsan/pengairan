<?php 
    echo "<div class='col-md-12'>
              <div class='box box-info'>
                <div class='box-header with-border'>
                  <h3 class='box-title'>Edit Data Mahasiswa</h3>
                </div>
              <div class='box-body'>";
              $attributes = array('class'=>'form-horizontal','role'=>'form');
              echo form_open_multipart('administrator/edit_mahasiswa',$attributes); 
          echo "<div class='col-md-12'>
                  <table class='table table-condensed table-bordered'>
                  <tbody>
                    <input type='hidden' name='id' value='$rows[id_mahasiswa]'>
                    <tr><th width='120px' scope='row'>Nama Mahasiswa</th>   <td><input type='text' class='form-control' name='b' value='$rows[nm_mahasiswa]'></td></tr>
                    <tr><th scope='row'>Program Studi</th>               <td><select name='a' class='form-control' required>
                                                                            <option value='' selected>- Pilih Kategori -</option>";
                                                                            foreach ($record as $row){
                                                                              if ($rows['id_prodi']==$row['id_prodi']){
                                                                                echo "<option value='$row[id_prodi]' selected>$row[nm_prodi]</option>";
                                                                              }else{
                                                                                echo "<option value='$row[id_prodi]'>$row[nm_prodi]</option>";
                                                                              }
                                                                            }
                    echo "</td></tr>
                    <tr><th width='120px' scope='row'>NPM</th>   <td><input type='text' class='form-control' name='d' value='$rows[npm]'></td></tr>
                    <tr><th scope='row'>Angkatan</th>           <td><textarea class='ckeditor form-control' name='c' style='height:260px'>$rows[keterangan]</textarea></td></tr>
                    <tr><th width='120px' scope='row'>HP</th>   <td><input type='text' class='form-control' name='e' value='$rows[hp]'></td></tr>
                    <tr><th scope='row'>Ganti Foto</th>          <td><input type='file' class='form-control' name='d'>";
                                                                   if ($rows['gbr_mahasiswa']!=''){ echo " Gambar Saat ini : <a target='_BLANK' href='".base_url()."asset/img_galeri/$rows[gbr_mahasiswa]'>$rows[gbr_mahasiswa]</a>"; } echo "</td></tr>
                  </tbody>
                  </table>
                </div>
              
              <div class='box-footer'>
                    <button type='submit' name='submit' class='btn btn-info'>Update</button>
                    <a href='index.php'><button type='button' class='btn btn-default pull-right'>Cancel</button></a>
                    
                  </div>
            </div></div></div>";
            echo form_close();