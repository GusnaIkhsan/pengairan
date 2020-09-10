<?php 
    echo "<div class='col-md-12'>
              <div class='box box-info'>
                <div class='box-header with-border'>
                  <h3 class='box-title'>Edit Data Dosen</h3>
                </div>
              <div class='box-body'>";
              $attributes = array('class'=>'form-horizontal','role'=>'form');
              echo form_open_multipart('administrator/edit_dosen',$attributes); 
          echo "<div class='col-md-12'>
                  <table class='table table-condensed table-bordered'>
                  <tbody>
                    <input type='hidden' name='id' value='$rows[id_dosen]'>
                    <tr><th width='120px' scope='row'>Nama Dosen</th>   <td><input type='text' class='form-control' name='b' value='$rows[nm_dosen]'></td></tr>
                    <tr><th scope='row'>Fakultas</th>               <td><select name='a' class='form-control' required>
                                                                            <option value='' selected>- Pilih Kategori -</option>";
                                                                            foreach ($record as $row){
                                                                              if ($rows['id_fakultas']==$row['id_fakultas']){
                                                                                echo "<option value='$row[id_fakultas]' selected>$row[nm_fakultas]</option>";
                                                                              }else{
                                                                                echo "<option value='$row[id_fakultas]'>$row[nm_fakultas]</option>";
                                                                              }
                                                                            }
                    echo "</td></tr>
                    <tr><th width='120px' scope='row'>NIS / NIDN</th>   <td><input type='text' class='form-control' name='d' value='$rows[nidn]'></td></tr>
                    <tr><th scope='row'>Pendidikan</th>           <td><textarea class='ckeditor form-control' name='c' style='height:260px'>$rows[keterangan]</textarea></td></tr>
                    <tr><th width='120px' scope='row'>HP</th>   <td><input type='text' class='form-control' name='e' value='$rows[hp]'></td></tr>
                    <tr><th scope='row'>Ganti Foto</th>          <td><input type='file' class='form-control' name='d'>";
                                                                   if ($rows['gbr_dosen']!=''){ echo " Gambar Saat ini : <a target='_BLANK' href='".base_url()."asset/img_galeri/$rows[gbr_dosen]'>$rows[gbr_dosen]</a>"; } echo "</td></tr>
                  </tbody>
                  </table>
                </div>
              
              <div class='box-footer'>
                    <button type='submit' name='submit' class='btn btn-info'>Update</button>
                    <a href='index.php'><button type='button' class='btn btn-default pull-right'>Cancel</button></a>
                    
                  </div>
            </div></div></div>";
            echo form_close();