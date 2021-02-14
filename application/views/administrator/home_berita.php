              <div class="box box-info">              
                <div class="box-header">
                  <i class="fa fa-pencil"></i>
                  <h3 class="box-title">Tulis Pengumuman Secara Cepat</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                  </div>
                </div>
              <form action="<?php echo base_url("administrator/cepat_listberita")?>" enctype="multipart/form-data" name="frmberita" id="frmberita" method="POST">    
                <div class="box-body">
                    <div class="form-group">
                      <input type="text" class="form-control" name="a" placeholder="Judul Pengumuman...">
                    </div>
                    <div class="form-group">
                      <textarea name='b' placeholder="Isi Pengumuman..." style="width: 100%; height: 169px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                    </div>                  
                </div>

                <div class="box-footer clearfix">
                  <button name='beritaSub' class="pull-right btn btn-default" id="beritaSub">Submit <i class="fa fa-arrow-circle-right"></i></button>
                </div>
              </form>
              </div>

              <script type="text/javascript">
              $("#beritaSub").click(function(){  
                $("#frmberita").submit();
              });
              </script>
