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
                  
    <a href="<?php echo base_url() ?>tambah-prosedur" class="btn btn-primary">Tambah</a> 
    <?php
                          }
    ?>
                  
          <table id="table_id" class="table table-bordered">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Judul</th>
                          <th>Prosedur</th>
                          <?php
                          $level=$this->session->userdata('level');
                          if($level=="Admin"){
                            ?>
                          <th>Aksi</th>
                          <?php
                          }
                          ?>
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
                        foreach ($prosedur as $prosedur) {
                          # code...
                        $no++;
                        ?>
                        <tr>
                          <td><?php echo $no; ?></td>
                          <td><?php echo $prosedur->id_prosedur ?></td>
                          <td><?php echo $prosedur->prosedur ?></td>
                          <?php
                          $level=$this->session->userdata('level');
                          if($level=="Admin"){
                            ?>
                          <td>
                         
                            <a href="<?php echo base_url() ?>hapus-prosedur/<?php echo $prosedur->id_prosedur ?>" class="btn btn-danger btn-xs" title="Hapus">
                              Hapus
                            </a>
                            <a href="<?php echo base_url() ?>edit-prosedur/<?php echo $prosedur->id_prosedur ?>" class="btn btn-warning btn-xs" title="Edit">
                             Edit
                            </a>
                            
                            <!-- <a href="<?php echo base_url() ?>tambah-prosedur/<?php echo $prosedur->id_prosedur ?>" class="btn btn-info btn-xs" title="Edit">
                             +
                            </a> -->
                          </td>
                          <?php
                          }

                            ?>
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
