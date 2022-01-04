<script src="https://maps.googleapis.com/maps/api/js?key=<?php echo $this->config->item('key_maps') ?>&callback=initialize" async defer></script>

<script type="text/javascript">
// variabel global marker
var marker;
  
function buatMarker(peta, posisiTitik){
    
    if( marker ){
      // pindahkan marker
      marker.setPosition(posisiTitik);
    } else {
      // buat marker baru
      marker = new google.maps.Marker({
        position: posisiTitik,
        map: peta
      });
    }
  
     // isi nilai koordinat ke form
    document.getElementById("lat").value = posisiTitik.lat();
    document.getElementById("lng").value = posisiTitik.lng();
    
    konver_alamat(posisiTitik.lat(),posisiTitik.lng());
    
}
  
function initialize() {
  var propertiPeta = {
    center: new google.maps.LatLng(0.4698576,101.3689378),
	zoom: 5,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  
  var peta = new google.maps.Map(document.getElementById("googleMap"), propertiPeta);
  
  // even listner ketika peta diklik
  google.maps.event.addListener(peta, 'click', function(event) {
    buatMarker(this, event.latLng);
  });

}

function konver_alamat(nlat,nlng) {
var latlng = {lat: nlat, lng: nlng};
var geocoder = new google.maps.Geocoder;
geocoder.geocode({'location': latlng}, function(results, status) {
  if (status === 'OK') {
	if (results[0]) {
	  rs = results[0].formatted_address;
	} else {
	  rs = 'No results found';
	}
  } else {
	  rs = 'Geocoder failed due to: ' + status;
  }
  document.getElementById("alamat").value = rs;
  document.getElementById("alamat1").value = rs;
});
}
</script>

 <!-- Begin Page Content -->
        <div class="container-fluid">

         
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
            </div>
            <div class="card-body">
              <div class="table-responsive">
  <form class="form-horizontal" role="form"  action="" method="POST"  enctype="multipart/form-data">
<?php
  if(!empty($lokasi)){

    $alamat=$lokasi->alamat;
    $long=$lokasi->long;
    $lat=$lokasi->lat;
  }else{
    $alamat="";
    $long="";
    $lat="";
  }
?>
  
  <div class="form-group">
  
    <div class="col-sm-12"> 
    <h5><b>PILIH LOKASI SAYA</b></h5>
    <div id="googleMap" style="width:100%;height:500px;"></div>
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-12" >Alamat:</label>
    <div class="col-sm-12"> 
    <textarea name="alamat1" id="alamat1" class="form-control" cols="30" rows="5" disabled><?php echo $alamat ?></textarea>
  <input type="hidden" name="alamat" value="<?php echo $alamat ?>" id="alamat" class="form-control" placeholder="Alamat">
    </div>
  </div>

  <div class="form-group">
    <!-- <label class="control-label col-sm-12" >Latitude:</label> -->
    <div class="col-sm-12"> 
  <input type="hidden" name="lat" id="lat" value="<?php echo $lat ?>" class="form-control" placeholder="Latitude">
    </div>
  </div>

  <div class="form-group">
    <!-- <label class="control-label col-sm-12" >Longitude:</label> -->
    <div class="col-sm-12"> 
  <input type="hidden" name="lng" id="lng" value="<?php echo $long ?>" class="form-control" placeholder="Longitude">
    </div>
  </div>

  
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary">Lanjut</button>
    </div>
  </div>
</div>

</form>
  </div>
</div>
</div>
</div>
</div>