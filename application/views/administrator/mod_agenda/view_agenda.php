            <div class="col-xs-12">  
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Semua Agenda</h3>
                  <a class='pull-right btn btn-primary btn-sm' href='<?php echo base_url(); ?>administrator/tambah_agenda'>Tambahkan Data</a>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th style='width:350px'>Tema</th>
                        <th>Tanggal Posting</th>
                        <th>Tanggal Mulai</th>
                        <th>Tanggal Selesai</th>
                        <th>Jam</th>
                        <th>Uploader</th>
                        <th style='width:70px'>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                  <?php 
                    $no = 1;
                    foreach ($record->result_array() as $row){
                    $tgl_mulai = tgl_indo($row['tgl_mulai']);
                    $tgl_selesai = tgl_indo($row['tgl_selesai']);
                    $tgl_posting = tgl_indo($row['tgl_posting']);
                    echo "<tr><td>$no</td>
                              <td><a href='".base_url()."agenda/$row[id_agenda]'>$row[tema]</a></td>
                              <td>$tgl_posting</td>
                              <td>$tgl_mulai</td>
                              <td>$tgl_selesai</td>
                              <td>$row[jam]</td>
                              <td>$row[username]</td>
                              <td><center>
                                <a class='btn btn-success btn-xs' title='Edit Data' href='".base_url()."administrator/edit_agenda/$row[id_agenda]'><span class='glyphicon glyphicon-edit'></span></a>
                                <a class='btn btn-danger btn-xs' title='Delete Data' href='".base_url()."administrator/delete_agenda/$row[id_agenda]' onclick=\"return confirm('Apa anda yakin untuk hapus Data ini?')\"><span class='glyphicon glyphicon-remove'></span></a>
                              </center></td>
                          </tr>";
                      $no++;
                    }
                  ?>
                  </tbody>
                </table>
              </div>