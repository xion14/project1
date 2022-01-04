        <!-- Begin Page Content -->
        <div class="container-fluid">

         
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <a href="<?php echo base_url() ?>tambah-pengguna" class="btn btn-primary" title="">Tambah</a>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                          <th>No</th>
                          <th>username</th>
                          <th>Nama Lengkap</th>
                          <th>Level</th>
                          <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $no=0;
                    foreach ($pengguna as $pengguna) {
                          # code...
                        $no++;
                        ?>
                        <tr>
                          <td><?php echo $no; ?></td>
                          <td><?php echo $pengguna->username ?></td>
                          <td><?php echo $pengguna->nama_lengkap ?></td>
                          <td><?php echo $pengguna->level ?></td>
                          
                          <td>
                            <a href="<?php echo base_url() ?>edit-pengguna/<?php echo $pengguna->username ?>" class="btn btn-danger btn-xs" title="Edit">
                              Edit
                            </a>
                            <a href="<?php echo base_url() ?>hapus-pengguna/<?php echo $pengguna->username ?>" class="btn btn-danger btn-xs" title="Hapus">
                              Hapus
                            </a>
                            
                          </td>
                        </tr>
                        <?php
                        }
                        ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->
