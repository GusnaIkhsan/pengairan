<?php 
    echo "<div class='col-md-12'>
              <div class='box box-info'>
                <div class='box-header with-border'>
                  <h3 class='box-title'>Edit Program Studi</h3>
                </div>
              <div class='box-body'>";
              $attributes = array('class'=>'form-horizontal','role'=>'form');
              echo form_open_multipart('administrator/edit_prodi',$attributes); 
          echo "<div class='col-md-12'>
                  <table class='table table-condensed table-bordered'>
                  <tbody>
                    <input type='hidden' name='id' value='$rows[id_prodi]'>
                    <tr><th width='120px' scope='row'>Nama Program Studi</th>   <td><input type='text' class='form-control' name='a' value='$rows[nm_prodi]' required></td></tr>
                    <tr><th scope='row'>Keterangan</th>           <td><textarea class='ckeditor form-control' name='b' style='height:260px'>$rows[keterangans]</textarea></td></tr>
                    
                    <tr><th scope='row'>Aktif </th>        <td>"; if ($rows['aktif']=='Y'){ echo "<input type='radio' name='d' value='Y' checked> Ya &nbsp; <input type='radio' name='d' value='N'> Tidak"; }else{ echo "<input type='radio' name='d' value='Y'> Ya &nbsp; <input type='radio' name='d' value='N' checked> Tidak"; } echo "</td></tr>
                  </tbody>
                  </table>
                </div>
              
              <div class='box-footer'>
                    <button onclick=\"spinnerClick()\" type='submit' name='submit' class='btn btn-info pull-right'>Simpan</button>
                    <a href='".base_url('administrator/prodi')."'><button type='button' class='btn btn-default'>Batal</button></a>
                    
                  </div>
            </div></div></div>";
            echo form_close();