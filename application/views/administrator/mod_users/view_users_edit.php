<?php 
    echo "<div class='col-md-12'>
              <div class='box box-info'>
                <div class='box-header with-border'>
                  <h3 class='box-title'>Edit Data User</h3>
                </div>
              <div class='box-body'>";
              $attributes = array('class'=>'form-horizontal','role'=>'form');
              echo form_open_multipart('administrator/edit_manajemenuser',$attributes);
          echo "<div class='col-md-12'>
                  <table class='table table-condensed table-bordered'>
                  <tbody>
                    <input type='hidden' name='id' value='$rows[id]'>
                    <input type='hidden' name='ids' value='$rows[id_session]'>
                    <input type='hidden' name='oldFile' value='$rows[foto]'>
                    <tr><th width='120px' scope='row'>Username</th>   <td><input type='text' class='form-control' name='a' value='$rows[username]' readonly='on'></td></tr>
                    <tr><th scope='row'>Password</th>                 <td><input type='password' class='form-control' name='b'></td></tr>
                    <tr><th scope='row'>Nama Lengkap</th>             <td><input type='text' class='form-control' name='c' value='$rows[nama_lengkap]' required></td></tr>
                    <tr><th scope='row'>Email</th>                    <td><input type='email' class='form-control' name='d' value='$rows[email]' required></td></tr>
                    <tr><th scope='row'>No Telp</th>                  <td><input type='number' class='form-control' name='e' value='$rows[no_telp]' required></td></tr>
                    <tr><th scope='row'>Level</th>                    <td>"; 
                    if ($rows['level']=='admin'){ 
                      echo "<input type='radio' name='g' value='admin' checked> Admin &nbsp; <input type='radio' name='g' value='superadmin'> Super Admin &nbsp;"; 
                    }else{ 
                      echo "<input type='radio' name='g' value='admin'> Admin &nbsp; <input type='radio' name='g' value='superadmin' checked> Super Admin &nbsp;"; 
                    } 
                    echo "</td></tr>
                    <tr><th scope='row'>Blokir</th><td>"; 
                    if ($rows['blokir']=='Y'){ 
                      echo "<input type='radio' name='h' value='Y' checked> Ya &nbsp; <input type='radio' name='h' value='N'> Tidak"; 
                    }else{ 
                      echo "<input type='radio' name='h' value='Y'> Ya &nbsp; <input type='radio' name='h' value='N' checked> Tidak"; 
                    } 
                    echo "</td></tr>
                    <tr><th scope='row'>Ganti Foto</th>                     <td><input type='file' class='form-control' name='f' accept=\"image/*\"><i style='color:red'>Lihat Gambar Saat ini : </i><br>
                      <a target='_BLANK' href='".base_url()."asset/foto_user/$rows[foto]'><img class='img-thumbnail' style='height:60px' src='".base_url()."asset/foto_user/$rows[foto]'></a></td></tr>
                  </tbody>
                  </table></div>
              </div>
              <div class='box-footer'>
                    <button type='submit' name='submit' class='btn btn-info pull-right'>Simpan</button>
                    <a href='".base_url('administrator/manajemenuser')."'><button type='button' class='btn btn-default'>Batal</button></a>
                    
                  </div>
            </div>";