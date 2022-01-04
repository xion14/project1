<script src="<?php echo base_url() ?>assets/js/geo-min.js" type="text/javascript" charset="utf-8"></script>
<script src="//maps.googleapis.com/maps/api/js?key=<?php echo $this->config->item('key_maps') ?>"
    type="text/javascript"></script>
<script>

    
            // 6. menambahkan direction
            var tampilarah;
            var layananarah = new google.maps.DirectionsService();
            // 2. menambahkan properti peta
            function initialize() {
                var pesanlat=<?php echo $lokasi_saya->lat ?>;
                var pesanlng=<?php echo $lokasi_saya->long ?>;
                var peslat=parseFloat(pesanlat);
                var peslng=parseFloat(pesanlng);
                // PETA PERTAMA
                var properti_peta = {
                    center: new google.maps.LatLng(peslat, peslng),
                    zoom: 10,
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                };
                // 4. membuat object peta
                var peta = new google.maps.Map(document.getElementById("tempat_peta"), properti_peta);
                // 7. tambahkan arah ke peta
                tampilarah = new google.maps.DirectionsRenderer();
                tampilarah.setMap(peta);
                rute();
            }
            // 8. membuat fungsi rute
            function rute() {
                
                var pesanlat=<?php echo $lokasi_saya->lat ?>;
                var pesanlng=<?php echo $lokasi_saya->long ?>;
                var peslat=parseFloat(pesanlat);
                var peslng=parseFloat(pesanlng);
                var request = {
                    origin: new google.maps.LatLng(peslat, peslng),
                    destination: new google.maps.LatLng(<?php echo $lokasi->lat ?>, <?php echo $lokasi->long ?>),
                    travelMode: google.maps.TravelMode.DRIVING
                };
                layananarah.route(request, function (result, status) {
                    if (status === google.maps.DirectionsStatus.OK) {
                        tampilarah.setDirections(result);
                    }
                });
            }
            // 5. load peta
            google.maps.event.addDomListener(window, 'load', initialize);
        </script>
        

 <!-- Begin Page Content -->
        <div class="container-fluid">

         
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <div class="form-group">
                    <div class="col-sm-12"> 
                    <div id="tempat_peta" style="width:100%;height:500px;"></div>
                    
                    </div>
                </div>
</div>

  </div>
</div>
</div>
</div>
</div>