<?php 
    echo "<div class='col-md-12'>
              <div class='box box-info'>
                <div class='box-header with-border'>
                  <h3 class='box-title'>Edit Halaman Statis</h3>
                </div>
              <div class='box-body'>";
              $attributes = array('class'=>'form-horizontal','role'=>'form');
              echo form_open_multipart('administrator/edit_halamanbaru',$attributes); 
          echo "<div class='col-md-12'>
                  <table class='table table-condensed table-bordered'>
                  <tbody>
                    <input type='hidden' name='id' value='$rows[id]'>
                    <input type='hidden' name='oldFile' value='$rows[gambar]'>
                    <tr><th width='120px' scope='row'>Judul</th>   <td><input type='text' class='form-control' name='a' id='input-name' value='$rows[judul]' required></td></tr>
                    <tr><th width='120px' scope='row'>Tipe Halaman</th>   <td><input type='radio' name='tipe' value='0' id='radio-dinamis' checked> <strong>Dinamis</strong> <i>(Konten dapat diubah melalui Menu Halaman oleh Administrator)</i> &nbsp; <input type='radio' name='tipe' id='radio-statis' value='1'> <strong>Statis</strong> <i>(Konten HANYA dapat diubah oleh programmer)</i></td></tr>
                    <tr>
                      <th width='120px' scope='row'>Nama Link</th>
                      <td>
                        <div class='row'>
                          <div class='col-md-1' id='prefix-link'>
                            page/detail/
                          </div>
                          <div class='col-md-9'>
                            <input type='text' class='form-control' name='slug' id='input-slug' value='$rows[judul_seo]' required>
                          </div>
                          <div class='col-md-2'>
                            <button type='button' id='btn-slug' class='btn btn-success'>Generate Link</button>
                          </div>
                        </div>
                      </td>
                    </tr>";
                    echo "
                    <tr><th scope='row'>Daftar Foto</th>               <td><select name='foto' id='foto' class='form-control'>
                                                                            <option value='' selected>- Pilih Foto -</option>";
                                                                            foreach ($foto as $row){
                                                                              echo "<option value='$row[name_gmbr]'>$row[name]</option>";
                                                                            }
                    echo "</td>
                    </tr>
                    <tr><th scope='row'>URL Foto</th>               <td><input type='text' id='urlfoto' class='form-control' readonly></td></tr>";
                    echo "
                    <tr><th scope='row'>Daftar File</th>               <td><select name='file' id='file' class='form-control'>
                                                                            <option value='' selected>- Pilih File -</option>";
                                                                            foreach ($file as $row){
                                                                              echo "<option value='$row[file_name]'>$row[name]</option>";
                                                                            }
                    echo "</td>
                    </tr>
                    <tr><th scope='row'>URL File</th>               <td><input type='text' id='urlfile' class='form-control' readonly></td></tr>
                    <tr id='content-halaman'><th scope='row'>Isi Halaman</th>             <td><textarea id='editor1' class='ckeditor form-control' name='b' style='height:260px' required>$rows[isi_halaman]</textarea></td></tr>
                    <tr><th scope='row'>Ganti Banner</th>                    <td><input type='file' class='form-control' name='c' accept=\"image/*\"><i style='color:red'>Lihat Gambar Saat ini : </i><br>
                      <a target='_BLANK' href='".base_url()."asset/foto_statis/$rows[gambar]'><img class='img-thumbnail' style='height:60px' src='".base_url()."asset/foto_statis/$rows[gambar]'></a></td></tr>
                  </tbody>
                  </table>
                </div>
              </div>
              <div class='box-footer'>
                    <button onclick=\"spinnerClick()\" type='submit' name='submit' class='btn btn-info pull-right'>Simpan</button>
                    <a href='".base_url()."administrator/halamanbaru'><button type='button' class='btn btn-default'>Batal</button></a>
                    
                  </div>
            </div>";
            ?>
            <script type="text/javascript"> 
              $('#foto').on('change', function() {
                var nameImg = document.getElementById("foto").value;
                document.getElementById("urlfoto").value = '<?php echo base_url('asset/foto/'); ?>'+'/'+nameImg;
              });
              $('#file').on('change', function() {
                var nameFile = document.getElementById("file").value;
                document.getElementById("urlfile").value = '<?php echo base_url('asset/files/'); ?>'+'/'+nameFile;
              });
            </script>