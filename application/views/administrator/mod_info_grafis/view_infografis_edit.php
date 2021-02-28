<?php 
    echo "<div class='col-md-12'>
              <div class='box box-info'>
                <div class='box-header with-border'>
                  <h3 class='box-title'>Info Grafis</h3>
                </div>
              <div class='box-body'>";
              $attributes = array('class'=>'form-horizontal','role'=>'form');
              echo form_open_multipart('administrator/edit_info_grafis',$attributes); 
              $mahasiswa = $record[0]["mahasiswa"];
              $program = $record[0]["program"];
              $tendik = $record[0]["tendik"];
              $alumni = $record[0]["alumni"];
          echo "<div class='col-md-12'>
                  <table class='table table-condensed table-bordered'>
                  <tbody>
                    <tr><th width='120px' scope='row'>Mahasiswa</th>  <td><input type='number' min='0' class='form-control' name='mahasiswa' value='$mahasiswa' required></td></tr>                                                           
                    <tr><th scope='row'>Program Studi</th>               <td><input type='number' min='0' class='form-control' name='program' value='$program' required></td></tr>                  
                    <tr><th scope='row'>Tenaga Pendidik</th>               <td><input type='number' min='0' class='form-control' name='tendik' value='$tendik' required></td></tr>                  
                    <tr><th scope='row'>Alumni</th>               <td><input type='number' min='0' class='form-control' name='alumni' value='$alumni' required></td></tr>";                                                                                                 
                    echo "
                  </tbody>
                  </table>
                </div>
              
              <div class='box-footer'>
                    <button onclick=\"spinnerClick()\" type='submit' name='submit' class='btn btn-info pull-right'>Simpan</button>                    
                  </div>
            </div></div></div>";
            echo form_close();