<?php 
    echo "<div class='col-md-12'>
              <div class='box box-info'>
                <div class='box-header with-border'>
                  <h3 class='box-title'>Tambah Video</h3>
                </div>
              <div class='box-body'>";
              $attributes = array('class'=>'form-horizontal','role'=>'form');
              echo form_open_multipart('administrator/tambah_video',$attributes); 
          echo "<div class='col-md-12'>
                  <table class='table table-condensed table-bordered'>
                  <tbody>
                    <input type='hidden' name='id' value=''>
                    <tr><th width='120px' scope='row'>Judul Video <span style=\"color: red;\">*</span></th>   <td><input type='text' class='form-control' name='b' required></td></tr>";                                                                            
                    echo "
                    <tr><th scope='row'>Keterangan</th>                 <td><textarea id='editor1' class='form-control' name='c'></textarea></td></tr>                    
                    <tr><th scope='row'>Link Youtube <span style=\"color: red;\">*</span></th>               <td><input type='text' class='form-control' name='e' placeholder='Contoh link: http://www.youtube.com/embed/xbuEmoRWQHU' required></td></tr>                    
                    ";                                                                          
                    echo "</div></td></tr>
                  </tbody>
                  </table>
                </div>
              
              <div class='box-footer'>
                    <button onclick=\"spinnerClick()\" type='submit' name='submit' class='btn btn-info pull-right'>Tambahkan</button>
                    <a href='".base_url('administrator/video')."'><button type='button' class='btn btn-default'>Batal</button></a>
                    
                  </div>
            </div></div></div>";
            echo form_close();
