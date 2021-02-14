              <div class="box box-danger">              
                <div class="box-header">
                  <i class="fa fa-pencil"></i>
                  <h3 class="box-title">Limit Headline</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                  </div>
                </div>

              <form action="<?php echo base_url("administrator/limit_headline")?>" enctype="multipart/form-data" name="frmlimit" id="frmlimit" method="POST">    
                <div class="box-body">
                      <div class="form-group">                            
                            <div>       
                              <input type='hidden' name='id' value='<?php echo $idgenset; ?>'>                   
                              <input type="number" min="1" max="10" class="form-control pull-left" name="nilai" id="nilai" value='<?php echo $valgenset; ?>'>                            
                              <span class="help-block with-errors"></span>
                            </div> 
                      </div>    
                      <!-- <div class="form-group">
                            <label class="control-label">Berkas Foto</label>
                            <div style="margin-bottom: 1%">
                              <input type="file" id="fileImg" name="fileImg" style="display:none" onchange="document.getElementById('fileName').value=this.value" accept="image/*" required>
                              <input type="text" class="form-control pull-left" id="fileName" name="fileName" style="width: 72%;height: 35px;" readonly placeholder=" MAX 5 MB">
                              <input type="button" class="btn btn-primary form-control pull-right" value="Pilih File" onclick="document.getElementById('fileImg').click()" style="width: 25%; height: 35px; margin-left: 5px;">
                              <span class="help-block with-errors"></span>
                            </div>
                        </div>  -->
                              
                </div>

                <div class="box-footer clearfix">
                  <button name="limitSub" id="limitSub" class="pull-right btn btn-default">Submit <i class="fa fa-arrow-circle-right"></i></button>
                </div>
              </form> 
              </div>

              <script type="text/javascript">
              $("#limitSub").click(function(){  
                $("#frmlimit").submit();
              });
              </script>
