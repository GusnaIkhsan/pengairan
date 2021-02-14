<?php 
    echo "<div class='col-md-12'>
              <div class='box box-info'>
                <div class='box-header with-border'>
                  <h3 class='box-title'>Edt Agenda Terpilih</h3>
                </div>
              <div class='box-body'>";
              $attributes = array('class'=>'form-horizontal','role'=>'form');
              echo form_open_multipart('administrator/edit_agenda',$attributes); 
              $exx = explode('-',$rows['tgl_mulai']);
              $exy = explode('-',$rows['tgl_selesai']);
              $mulai = $exx[1].'/'.$exx[2].'/'.$exx[0];
              $selesai = $exy[1].'/'.$exy[2].'/'.$exy[0];
              $tanggalmulaiselesai = $mulai.' - '.$selesai;
          echo "<div class='col-md-12'>
                  <table class='table table-condensed table-bordered'>
                    <tbody>
                      <input type='hidden' name='id' value='$rows[id_agenda]'>
                      <input type='hidden' name='oldFile' value='$rows[gambar]'>
                      <tr><th width='120px' scope='row'>Tema</th>   <td><input type='text' class='form-control' name='a' value='$rows[tema]'></td></tr>";
                      echo "
                      <tr><th scope='row'>Daftar Foto</th>               <td><select name='foto' id='foto' class='form-control'>
                                                                              <option value='' selected>- Pilih Foto -</option>";
                                                                              foreach ($foto as $row){
                                                                                echo "<option value='$row[name_gmbr]'>$row[name]</option>";
                                                                              }
                       echo "</td>
                      </tr>  
                      <tr><th scope='row'>URL Foto</th>               <td><input type='text' id='urlfoto' class='form-control' readonly></td></tr>                                                       
                      <tr><th scope='row'>Isi Agenda</th>           <td><textarea id='editor1' class='ckeditor form-control' name='b' style='height:260px'>$rows[isi_agenda]</textarea></td></tr>
                      <tr><th scope='row'>Thumbnail</th>               <td><input type='file' class='form-control' name='c' accept=\"image/*\">";
                                                                          if ($rows['gambar'] != ''){ echo "<i style='color:red'>Lihat Gambar Saat ini : </i><a target='_BLANK' href='".base_url()."asset/foto_agenda/$rows[gambar]'>$rows[gambar]</a>"; } echo "</td></tr>
                      </td></tr>
                      <tr><th scope='row'>Tempat</th>               <td><input type='text' class='form-control' name='d' value='$rows[tempat]'></td></tr>
                      <tr><th scope='row'>Jam <small>s/d</small> Selesai</th><td><input type='text' class='form-control' name='e' value='$rows[jam]'></td></tr>
                      <tr><th scope='row'>Tgl <small>s/d</small> Selesai</th><td><input type='text' class='form-control' id='rangepicker' name='f' value='$tanggalmulaiselesai'></td></tr>
                      <tr><th scope='row'>Pengirim</th>             <td><input type='text' class='form-control' name='g' value='$rows[pengirim]'></td></tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class='box-footer'>
                    <button type='submit' name='submit' class='btn btn-info'>Update</button>
                    <a href='".base_url('administrator/agenda')."'><button type='button' class='btn btn-default pull-right'>Cancel</button></a>
                    
                  </div>
            </div>";
            ?>
            <script type="text/javascript"> 
              $('#foto').on('change', function() {
                var nameImg = document.getElementById("foto").value;
                document.getElementById("urlfoto").value = '<?php echo base_url('asset/foto/'); ?>'+'/'+nameImg;
              });
            </script>
