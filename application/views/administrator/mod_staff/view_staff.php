            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Daftar Staff Pendidik</h3>
                  <a class='pull-right btn btn-primary btn-sm' style="margin-left: 0.5%;"
                    href='<?php echo base_url(); ?>tambah-staff'>Tambahkan Data</a>
                  <a class='pull-right btn btn-primary btn-sm' style="margin-left: 0.5%;" onclick="showLookup()">Upload
                    Template</a>
                  <a class='pull-right btn btn-primary btn-sm' style="margin-left: 0.5%;"
                    href='<?php echo base_url('formstaff/download'); ?>'>Download Template</a>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th style='width:20px'>No</th>
                        <th width='60px'>Foto</th>
                        <th>Nama</th>
                        <th>NIP/NIK</th>
                        <th>Bidang Pelayanan</th>
                        <th>Tupoksi</th>
                        <th>Urutan</th>
                        <th style='width:70px'>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php 
                    $no = 1;
                    foreach ($record as $row){
                    echo "<tr><td>$no</td>
                              <td><img src='".base_url()."asset/foto_staff/$row[foto]' width='50'></td>
                              <td width='20%'>$row[name]</td>
                              <td width='10%'>$row[nipnik]</td>
                              <td width='20%'>$row[pelayanan]</td>                          
                              <td width='20%'>$row[tupoksi]</td>                          
                              <td width='20%'>$row[urutan]</td>                          
                              <td><center>
                              <a class='btn btn-success btn-xs' title='Edit Data' href='".base_url()."edit-staff/$row[id]'><span class='glyphicon glyphicon-edit'></span></a>
                              <a class='btn btn-danger btn-xs' title='Delete Data' href='".base_url()."delete-staff/$row[id]' onclick=\"return confirm('Apa anda yakin untuk hapus Data ini?')\"><span class='glyphicon glyphicon-remove'></span></a>
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
                          <h4 class="modal-title">Upload Data Staff</h4>
                        </div>
                        <div class="modal-body">
                          <div class="form-group">
                            <label class="control-label">Berkas Template Excel</label>
                            <div style="margin-bottom: 1%">
                              <input type="file" id="fileExcel" name="fileExcel" style="display:none" onchange="document.getElementById('fileName').value=this.value" accept=".xls,.xlsx" required>
                              <input type="text" class="form-control pull-left" id="fileName" name="fileName" style="width: 72%;height: 35px;" readonly placeholder=" MAX 4 MB">
                              <input type="button" class="btn btn-primary form-control pull-right" value="Pilih File" onclick="document.getElementById('fileExcel').click()" style="width: 25%; height: 35px; margin-left: 5px;">
                              <span class="help-block with-errors"></span>
                            </div>
                          </div>
                          <br><br>
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>

                <script type="text/javascript">
                  function showLookup() {
                    $('#lookupUpload').modal('show');
                    $('#lookupUpload form')[0].reset();
                    $('.modal-title').text('Upload Data Staff');
                  }

                  $('#lookupUpload').on('submit', function (e) {
                    if (!e.isDefaultPrevented()) {
                      var formData = new FormData();
                      formData.append('fileExcel', $('#fileExcel').prop('files')[0]);

                      var url = '<?php echo base_url("formstaff/upload"); ?>'
                      $('#lookupUpload').modal('hide');
                      $('#spinner').modal('show');

                      $.ajax({
                        url: url,
                        enctype: 'multipart/form-data',
                        type: "POST",
                        contentType: false,
                        data: formData,
                        cache: false,
                        processData: false,
                        success: function (data) {
                          $('#spinner').modal('hide');
                          location.reload();             
                        },
                        error: function (data) {
                          alert("salah");
                        }
                      });
                      return false;
                    }
                  });
                </script>