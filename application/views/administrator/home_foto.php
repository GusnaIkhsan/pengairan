              <div class="box box-warning">             
                <div class="box-header">
                  <i class="fa fa-pencil"></i>
                  <h3 class="box-title">Upload Foto Secara Cepat</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                  </div>
                </div>

              <form action="<?php echo base_url("administrator/cepat_foto")?>" enctype="multipart/form-data" name="frmfoto" id="frmfoto" method="POST">    
                <div class="box-body">
                      <div class="form-group" style="margin-bottom: 10%">                            
                            <div>                          
                              <input type="text" class="form-control pull-left" name="nameFile" id="nameFile" placeholder="Nama Foto">                            
                              <span class="help-block with-errors"></span>
                            </div> 
                      </div>    
                      <div class="form-group">                           
                            <div style="margin-bottom: 1%">
                              <input type="file" id="fileImg" name="fileImg" style="display:none" onchange="document.getElementById('fileName').value=this.value" accept="image/*">
                              <input type="text" class="form-control pull-left" id="fileName" name="fileName" style="width: 72%;height: 35px;" readonly placeholder=" MAX 5 MB">
                              <input type="button" class="btn btn-primary form-control pull-right" value="Pilih File" onclick="document.getElementById('fileImg').click()" style="width: 25%; height: 35px; margin-left: 5px;">
                              <span class="help-block with-errors"></span>
                            </div>
                        </div> 
                              
                </div>

                <div class="box-footer clearfix">
                  <button name="fotoSub" id="fotoSub" class="pull-right btn btn-default">Submit <i class="fa fa-arrow-circle-right"></i></button>
                </div>
              </form> 
              </div>

              <script type="text/javascript">
              $("#fotoSub").click(function(){  
                $("#frmfoto").submit();
              });
              </script>
