            <div class="col-xs-12">  
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Semua Pengumuman</h3>
                  <a class='pull-right btn btn-primary btn-sm' href='<?php echo base_url(); ?>administrator/tambah_pengumuman'>Tambahkan Data</a>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th style='width:20px'>No</th>
                        <th>Judul Pengumuman</th>
                        <th>Tanggal</th>
                        <th>Uploader</th>                        
                        <th style='width:70px'>Action</th>
                      </tr>
                    </thead>              
                    <tbody>
                  <?php 
                    $no = 1;
                    foreach ($record->result_array() as $row){
                    $tgl_posting = tgl_indo($row['tanggal']);
                    $id = $row['id_berita'];                    
                    echo "<tr><td>$no</td>
                              <td><a href=".base_url('berita/'.$id).">$row[judul]</a></td>
                              <td>$tgl_posting</td>
                              <td>$row[username]</td>                           
                              <td><center>
                                <a class='btn btn-success btn-xs' title='Edit Data' href='".base_url()."administrator/edit_pengumuman/$row[id_berita]'><span class='glyphicon glyphicon-edit'></span></a>
                                <a class='btn btn-danger btn-xs' title='Delete Data' href='".base_url()."administrator/delete_pengumuman/$row[id_berita]' onclick=\"return confirm('Apa anda yakin untuk hapus Data ini?')\"><span class='glyphicon glyphicon-remove'></span></a>
                              </center></td>
                          </tr>";
                      $no++;
                    }
                  ?>
                  </tbody>
                </table>
              </div>