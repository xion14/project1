 <!-- Begin Page Content --><br>
        <div class="container-fluid">

<div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-4 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">DAERAH</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $this->Ambil->CountBy("tb_daerah") ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-4 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">LOKASI</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $this->Ambil->CountBy("tb_lokasi") ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-users fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <?php
                          $level=$this->session->userdata('level');
                          if($level=="Admin"){
                            ?>
                            

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-4 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">USER</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $this->Ambil->CountBy("tb_login") ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-user fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>

        <?php
        }
        ?>
      

      <div class="row">
 
    <div class="col-xl-8 col-lg-7">
      Selamat Datang, <?php echo $this->session->username ?>

    </div>
 
    <div class="col-xl-12 col-lg-12">
      <div id="container2" style="min-width: 310px; height: 400px; margin: 0 auto"></div>

    </div>
	
   	</div>
   </div>

	<script src="<?php echo base_url() ?>assets/js/highcharts.js"></script>
<script>
	var chart1; // globally available
	$(document).ready(function() {
	      chart1 = new Highcharts.Chart({
	         chart: {
	            renderTo: 'container2',
	            type: 'column'
	         },  
	         title: {
	            text: 'Grafik Daerah '
	         },
	         xAxis: {
	            categories: ['Daerah']
	         },
	         yAxis: {
	            title: {
	               text: 'Jumlah Lokasi'
	            }
	         },
	              series:            
	            [
	            <?php
	            $sql=$this->Ambil->getAllByParam("view_tb_daerah","length > 1");
	            foreach ($sql as $row4) {
                $id_daerah=$row4->id_daerah;
                $nilai=$this->Ambil->CountByParam('tb_lokasi',array('id_daerah'=>$id_daerah));
	            	# code...
	                  ?>
	                 //data yang diambil dari database dimasukan ke variable nama dan data
	                 //
	                  {
	                      name: '<?php echo $row4->nama_daerah ?>',
	                      data: [<?php echo $nilai ?>]
	                  },
	                  <?php } ?>
	            ]
	      });
	   });  
	   </script>