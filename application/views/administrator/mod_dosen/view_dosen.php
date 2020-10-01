            <div class="col-xs-12">  
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Daftar Dosen</h3>
                  <a class='pull-right btn btn-primary btn-sm' style="margin-left: 0.5%;" href='<?php echo base_url(); ?>administrator/tambah_dosen'>Tambahkan Data</a>
                  <a class='pull-right btn btn-primary btn-sm' style="margin-left: 0.5%;" onclick="showLookup()" >Upload Template</a>
                  <a class='pull-right btn btn-primary btn-sm' style="margin-left: 0.5%;" href='<?php echo base_url('form/download'); ?>'>Download Template</a>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th style='width:20px'>No</th>
                        <th width='60px'>Foto</th>
                        <th>Nama</th>
                        <th>NIS/NIDN</th>
                        <th>Pendidikan</th>
                        <th>HP</th>
                        <th>Fakultas</th>
                        <th style='width:70px'>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                  <?php 
                    $no = 1;
                    foreach ($record as $row){
                    echo "<tr><td>$no</td>
                              <td><img src='".base_url()."asset/img_galeri/$row[gbr_dosen]' width='50'></td>
                              <td width='20%'>$row[nm_dosen]</td>
                              <td width='10%'>$row[nidn]</td>
                              <td width='6%'>$row[keterangan]</td>
                              <td width='6%'>$row[hp]</td>
                              <td>$row[nm_fakultas]</td>
                              <td><center>
                                <a class='btn btn-success btn-xs' title='Edit Data' href='".base_url()."administrator/edit_dosen/$row[id_dosen]'><span class='glyphicon glyphicon-edit'></span></a>
                                <a class='btn btn-danger btn-xs' title='Delete Data' href='".base_url()."administrator/delete_dosen/$row[id_dosen]' onclick=\"return confirm('Apa anda yakin untuk hapus Data ini?')\"><span class='glyphicon glyphicon-remove'></span></a>
                              </center></td>
                          </tr>";
                      $no++;
                    }
                  ?>
                  </tbody>
                </table>
              </div>

              <div class="modal fade" id="lookupUpload">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <form enctype="multipart/form-data" method="post">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Upload Data Dosen</h4>
                      </div>
                      <div  class="modal-body">
                        <div class="form-group">
                        <label class="control-label">Fakultas</label>
                          <select name="select_fakultas" id="select_fakultas" class="form-control chosen-select" required>
                            <!-- <option value="Aktif">Aktif</option>
                            <option value="Tidak Aktif">Tidak Aktif</option> -->
                          </select>
                        </div>
                        <div class="form-group">
                          <label class="control-label">Berkas Template Excel</label>
                          <div style="margin-bottom: 1%">
                            <input type="file" id="fileExcel" name="fileExcel" style="display:none" onchange="document.getElementById('fileName').value=this.value" accept="application/vnd.ms-excel" required>
                            <input type="text" class="form-control pull-left" id="fileName" name="fileName" style="width: 72%;height: 35px;" readonly placeholder=" MAX 4 MB">
                            <input type="button" class="btn btn-primary form-control pull-right" value="Pilih File" onclick="document.getElementById('fileExcel').click()" style="width: 25%; height: 35px; margin-left: 5px;">
                            <span class="help-block with-errors"></span>
                          </div>
                        </div>
                        <br><br>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                      </div>
                    </form>
                    </div>
                  <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
              </div>
              <!-- /.modal -->

              <script type="text/javascript">

                function showLookup() {
                  $('#lookupUpload').modal('show');
                  $('#lookupUpload form')[0].reset();
                  $('.modal-title').text('Upload Data Dosen');    
		            }

                $('#lookupUpload').on('submit', function(e) {
                    if (!e.isDefaultPrevented()) {
                      var formData = new FormData();
                      formData.append('select_fakultas', $('#select_fakultas').val());
                      formData.append('fileExcel', $('#fileExcel').prop('files')[0]);

                      var url = '<?php echo base_url("form/upload"); ?>'
                      $('#lookupUpload').modal('hide');
                      // messageNotif = "Data Berhasil Disimpan";
                      // $('#spinner').modal('show');

                      $.ajax({
                        url: url,
                        enctype: 'multipart/form-data',
                        type: "POST",
                        contentType: false,
                        data: formData,
                        cache: false,
                        processData: false,
                        success: function(data) {
                          // $('#spinner').modal('hide');
                          // pdpTable.ajax.reload();
                          // alert(data);
                        },
                        error: function(data) {
                          alert("salah");
                        }
                      });
                      return false;
                    }
                });

                $(document).ready(function() {
                  $.ajax({
                      url: '<?php echo base_url("fakultas"); ?>',
                      type: "GET",
                      success: function(data) {
                        result = JSON.parse(data)
                          $("#select_fakultas").append('<option class="dropdown-header" value="' + null + '">Pilih Blok</option>');
                          $.each(result, function(key, value) {
                              $("#select_fakultas").append('<option value="' + value['id_fakultas'] + '">' + value['nm_fakultas'] + '</option>');
                          });
                      },
                      error: function(data) {
                          $("#select_fakultas").append('<option value="' + null + '">Pilih Fakultas</option>');
                      }
                  });
                });

              </script>