<?php 
    echo "<div class='col-md-12'>
              <div class='box box-info'>
                <div class='box-header with-border'>
                  <h3 class='box-title'>Tambah Pengumuman Baru ".$this->session->disabled." </h3>
                </div>
              <div class='box-body'>";
              $attributes = array('class'=>'form-horizontal','role'=>'form');
              echo form_open_multipart('administrator/tambah_pengumuman',$attributes); 
          echo "<div class='col-md-12'>
                  <table class='table table-condensed table-bordered'>
                  <tbody>
                    <input type='hidden' name='id' value=''>
                    <input type='hidden' name='f' value='N'>
                    <input type='hidden' name='g' value='N'>

                    <tr><th width='130px' scope='row'>Judul Pengumuman <span style=\"color: red;\">*</span></th>    <td><input type='text' class='form-control' name='b' required></td></tr>
                    <tr><th scope='row'>Sub Judul</th>              <td><input type='text' class='form-control' name='c'></td></tr>                    
                    <tr><th scope='row'>Kategori Prodi <span style=\"color: red;\">*</span></th>         <td><select name='kategori-prodi' class='form-control' required>
                                                                            <option value='' selected>- Pilih Kategori Prodi -</option>";
                                                                            foreach ($prodi->result_array() as $row){
                                                                                echo "<option value='$row[id_prodi]'>$row[nm_prodi]</option>";
                                                                            }
                    echo "</td></tr>";
                    echo "</td></tr>
                    <tr><th scope='row'>Tanggal</th>            <td><input type='date' class='form-control' name='date'></td></tr>";
                    echo "
                    <tr><th scope='row'>Daftar Foto</th>               <td><select name='foto' id='foto' class='form-control'>
                                                                            <option value='' selected>- Pilih Foto -</option>";
                                                                            foreach ($foto as $row){
                                                                              echo "<option value='$row[name_gmbr]'>$row[name]</option>";
                                                                            }
                    echo " </td>
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
                    <tr><th scope='row'>Isi Pengumuman <span style=\"color: red;\">*</span></th>             <td><textarea id='editor1' class='ckeditor form-control' name='h' style='height:260px' required></textarea></td></tr>
                    <tr><th scope='row'>Thumbnail</th>                 <td><input type='file' class='form-control' name='k' accept=\"image/*\"></td></tr>";
                    // <tr><th scope='row'>Tag</th>                    <td>
                    //                                                         foreach ($tag->result_array() as $tag){
                    //                                                             echo "<span style='display:inline-block;'><input type=checkbox value='$tag[tag_seo]' name=j[]>$tag[nama_tag] &nbsp; &nbsp; &nbsp; </span>";
                    //                                                         }
                    echo "</td></tr>
                  </tbody>
                  </table>
                </div>
              </div>
              <div class='box-footer'>
                    <button onclick=\"spinnerClick()\" type='submit' name='submit' class='btn btn-info pull-right'>Tambahkan</button>
                    <a href='".base_url('administrator/pengumuman')."'><button type='button' class='btn btn-default'>Batal</button></a>
                    
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
