            <div class="col-xs-12">  
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Daftar Foto</h3>                
                  <a class='pull-right btn btn-primary btn-sm' style="margin-left: 0.5%;" onclick="showLookup()" >Tambah Foto</a>                
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th style='width:20px'>No</th>
                        <th width='60px'>Foto</th>
                        <th>Nama Foto</th>                
                        <th>Url Foto</th>                
                        <th>Uploader</th>                
                        <th style='width:70px'>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                  <?php 
                    $no = 1;
                    foreach ($record as $row){
                    echo "<tr><td>$no</td>
                              <td><a target='_BLANK' href='".base_url()."asset/foto/$row[name_gmbr]'><img src='".base_url()."asset/foto/$row[name_gmbr]' width='50'></a></td>
                              <td width='20%'>$row[name]</td>                              
                              <td width='20%'>".base_url()."asset/foto/".$row["name_gmbr"]."</td>                              
                              <td width='20%'>$row[uploader]</td>                              
                              <td><center>
                                <a class='btn btn-success btn-xs' title='Edit Data' href='".base_url()."administrator/edit_foto/$row[id]'><span class='glyphicon glyphicon-edit'></span></a>
                                <a class='btn btn-danger btn-xs' title='Delete Data' href='".base_url()."administrator/delete_foto/$row[id]' onclick=\"return confirm('Apa anda yakin untuk hapus Data ini?')\"><span class='glyphicon glyphicon-remove'></span></a>
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
                        <h4 class="modal-title">Upload Berkas Foto</h4>
                      </div>
                      <div  class="modal-body">        
                        <div class="form-group">
                          <label class="control-label">Nama Foto <span style="color: red;">*</span></label>
                          <div style="margin-bottom: 10%">                          
                            <input type="text" class="form-control pull-left" name="nameFile" id="nameFile" placeholder="Nama Foto" required>                            
                            <span class="help-block with-errors"></span>
                          </div> 
                        </div>                
                        <div class="form-group">
                          <label class="control-label">Berkas Foto <span style="color: red;">*</span></label>
                          <div style="margin-bottom: 1%">
                            <input type="file" id="fileImg" name="fileImg" style="display:none" onchange="document.getElementById('fileName').value=this.value" accept="image/*" required>
                            <input type="text" class="form-control pull-left" id="fileName" name="fileName" style="width: 72%;height: 35px;" readonly placeholder=" MAX 5 MB">
                            <input type="button" class="btn btn-primary form-control pull-right" value="Pilih File" onclick="document.getElementById('fileImg').click()" style="width: 25%; height: 35px; margin-left: 5px;">
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
                  <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
              </div>
              <!-- /.modal -->

              <script type="text/javascript">

                function showLookup() {
                  $('#lookupUpload').modal('show');
                  $('#lookupUpload form')[0].reset();
                  $('.modal-title').text('Upload Foto');    
		            }

                $('#lookupUpload').on('submit', function(e) {
                    if (!e.isDefaultPrevented()) {
                      var formData = new FormData();                      
                      formData.append('fileImg', $('#fileImg').prop('files')[0]);
                      formData.append('nameFile', $('#nameFile').val());

                      var url = '<?php echo base_url("upload/foto"); ?>'
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
                        success: function(data) {
                          $('#spinner').modal('hide');                        
                          location.reload();                   
                        },
                        error: function(data) {
                          alert("Internal System Error");
                        }
                      });
                      return false;
                    }
                });

               

              </script>