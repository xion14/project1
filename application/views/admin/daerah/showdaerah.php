      <!-- Begin Page Content -->
        <div class="container-fluid">

         
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
            </div>
            <div class="card-body">
              <div class="table-responsive">   
                  
    <a href="<?php echo base_url() ?>tambah-daerah" class="btn btn-primary">Tambah</a>       
                  
          <table id="table_id" class="table table-bordered">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>daerah</th>
                          <th>Level</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>


                      <tbody>
                        <?php

                        if (!empty($this->uri->segment(2))) {
                          # code...

                        $no=$this->uri->segment(2);
                        $uris=$this->uri->segment(2);
                        }else{
                        $uris=0;
                        $no=0;
                        }
                        foreach ($daerah as $daerah) {
                          # code...
                        $no++;
                        ?>
                        <tr>
                          <td><?php echo $no; ?></td>
                          <td><?php echo $daerah->nama_daerah ?></td>
                          <td><?php echo $daerah->level ?></td>
                          <td>
                            <a href="<?php echo base_url() ?>hapus-daerah/<?php echo $daerah->id_daerah ?>" class="btn btn-danger btn-xs" title="Hapus">
                              Hapus
                            </a>
                            <a href="<?php echo base_url() ?>edit-daerah/<?php echo $daerah->id_daerah ?>" class="btn btn-warning btn-xs" title="Edit">
                             Edit
                            </a>
                            <!-- <a href="<?php echo base_url() ?>tambah-daerah/<?php echo $daerah->id_daerah ?>" class="btn btn-info btn-xs" title="Edit">
                             +
                            </a> -->
                          </td>
                        </tr>
                        <?php
                        }
                        ?>
                      </tbody>
                    </table>
        <!-- /page content -->



              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid
