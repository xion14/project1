      <!-- Begin Page Content -->
        <div class="container-fluid">

         
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
            </div>
            <div class="card-body">
              <div class="table-responsive"> 
              <?php
                          $level=$this->session->userdata('level');
                          if($level=="Admin"){
                            ?>
                            <a href="<?php echo base_url() ?>tambah-lokasi" class="btn btn-primary">Tambah</a>   
                            <?php
                          }
                          ?>  
                  
    <a href="<?php echo base_url() ?>show-marker" class="btn btn-danger"><i class="fa fa-globe"></i>  ALL</a>
                                        
                  Lokasi Saya: <?php echo $lokasi_saya->alamat ?>
          <table id="table_id" class="table table-bordered">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Alamat</th>
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
                        foreach ($lokasi as $lokasi) {
                          # code...
                        $no++;
                        ?>
                        <tr>
                          <td><?php echo $no; ?></td>
                          <td><?php echo $lokasi->alamat ?></td>
                          <td>
                          <?php
                          $level=$this->session->userdata('level');
                          if($level=="Admin"){
                          ?>
                            <a href="<?php echo base_url() ?>hapus-lokasi/<?php echo $lokasi->id_lokasi ?>" class="btn btn-danger btn-xs" title="Hapus">
                              Hapus
                            </a>
                            <a href="<?php echo base_url() ?>edit-lokasi/<?php echo $lokasi->id_lokasi ?>" class="btn btn-warning btn-xs" title="Edit">
                             Edit
                            </a>
                            <?php
                            }
                            ?>
                            <a href="<?php echo base_url() ?>show-jarak/<?php echo $lokasi->id_lokasi ?>" class="btn btn-success btn-xs" title="Edit">
                             <i class="fa fa-globe"></i>
                            </a>
                            <!-- <a href="<?php echo base_url() ?>tambah-lokasi/<?php echo $lokasi->id_lokasi ?>" class="btn btn-info btn-xs" title="Edit">
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
