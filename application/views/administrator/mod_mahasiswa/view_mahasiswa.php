            <div class="col-xs-12">  
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Daftar Mahasiswa</h3>
                  <a class='pull-right btn btn-primary btn-sm' href='<?php echo base_url(); ?>administrator/tambah_mahasiswa'>Tambahkan Data</a>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th style='width:20px'>No</th>
                        <th width='60px'>Foto</th>
                        <th>Nama</th>
                        <th>NPM</th>
                        <th>Angkatan</th>
                        <th>HP</th>
                        <th>Program Studi</th>
                        <th style='width:70px'>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                  <?php 
                    $no = 1;
                    foreach ($record as $row){
                    echo "<tr><td>$no</td>
                              <td><img src='".base_url()."asset/img_galeri/$row[gbr_mahasiswa]' width='50'></td>
                              <td width='20%'>$row[nm_mahasiswa]</td>
                              <td width='10%'>$row[npm]</td>
                              <td width='6%'>$row[keterangan]</td>
                              <td width='6%'>$row[hp]</td>
                              <td>$row[nm_prodi]</td>
                              <td><center>
                                <a class='btn btn-success btn-xs' title='Edit Data' href='".base_url()."administrator/edit_mahasiswa/$row[id_mahasiswa]'><span class='glyphicon glyphicon-edit'></span></a>
                                <a class='btn btn-danger btn-xs' title='Delete Data' href='".base_url()."administrator/delete_mahasiswa/$row[id_mahasiswa]' onclick=\"return confirm('Apa anda yakin untuk hapus Data ini?')\"><span class='glyphicon glyphicon-remove'></span></a>
                              </center></td>
                          </tr>";
                      $no++;
                    }
                  ?>
                  </tbody>
                </table>
              </div>