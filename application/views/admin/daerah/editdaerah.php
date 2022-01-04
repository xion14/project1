         <!-- Begin Page Content -->
        <div class="container-fluid">

         
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
            </div>
            <div class="card-body">
              <div class="table-responsive">

  <form class="form-horizontal" role="form"  action="" method="POST"  enctype="multipart/form-data">
      
  <div class="form-group">
    <label class="control-label col-sm-12" >Daerah:</label>
    <div class="col-sm-12"> 
  <input type="hidden" name="id_daerah" value="<?php echo $daerah->id_daerah ?>" class="form-control" placeholder="ID Daerah">
  <input type="text" name="nama_daerah" value="<?php echo $daerah->nama_daerah ?>" class="form-control" placeholder="Nama Kelurahan">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-12" >Level:</label>
    <div class="col-sm-12"> 
  <input type="text" name="level" value="<?php echo $daerah->level ?>" class="form-control" placeholder="Level">
    </div>
  </div>

  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary">Edit</button>
    </div>
  </div>
</div>

</form>
  </div>
</div>