<script src="https://maps.googleapis.com/maps/api/js?key=<?php echo $this->config->item('key_maps') ?>&callback=initialize" async defer></script>
<script type="text/javascript">   
    var marker;
    function initialize(){
        // Variabel untuk menyimpan informasi lokasi
        var infoWindow = new google.maps.InfoWindow;
        //  Variabel berisi properti tipe peta
        var mapOptions = {
            mapTypeId: google.maps.MapTypeId.ROADMAP
        } 
        // Pembuatan peta
        var peta = new google.maps.Map(document.getElementById('googleMap'), mapOptions);      
		// Variabel untuk menyimpan batas kordinat
        var bounds = new google.maps.LatLngBounds();
        // Pengambilan data dari database MySQL
        <?php
        foreach ($lokasi as $details) {
            # code...
            $img='<img src='.base_url().'assets/image/'.$details->foto.' height="200px" width="100%">';
            $link='<a href='.base_url().'show-jarak/'.$details->id_lokasi.' target="_blank" class="btn btn-primary btn-xs">KLIK LINK</a>';
				echo "addMarker($details->lat, $details->long, '$img<br><br>$details->alamat<br>$details->nama_lokasi<br>$link');\n";
        }
        ?> 
        // Proses membuat marker 
        function addMarker(lat, lng, info){
            var lokasi = new google.maps.LatLng(lat, lng);
            bounds.extend(lokasi);
            var marker = new google.maps.Marker({
                map: peta,
                position: lokasi
            });       
            peta.fitBounds(bounds);
            bindInfoWindow(marker, peta, infoWindow, info);
         }
        // Menampilkan informasi pada masing-masing marker yang diklik
        function bindInfoWindow(marker, peta, infoWindow, html){
            google.maps.event.addListener(marker, 'click', function() {
            infoWindow.setContent(html);
            infoWindow.open(peta, marker);
          });
        }
    }
</script>

<div class="main-card mb-3 card">
                                    <div class="card-body"><h5 class="card-title"><?php echo $title ?></h5>
                                        <form class="" method="POST" enctype="multipart/form-data">
                                            
                                          

                                            
                                            <div class="form-row">
                                                <div class="col-md-12">
                                                    
                                                    <div id="googleMap" style="width:100%;height:500px;"></div>
                                                    
                                                </div>
                                                
                                                
                                            </div>
                                        
                                           
                                        
                                        </form>
                                    </div>
                                </div>